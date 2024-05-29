<?php

namespace App\Http\Controllers;

use App\Service\AuthService;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Stand;
use App\Models\Criterio;
use App\Models\Passport;
use App\Models\Evaluation;
use App\Models\EvaluationHasCriterio;

class EvaluationController extends Controller
{

    private $service;
    private $user;

    public function __construct(AuthService $service)
    {
        $this->service = $service;
    }

    private function userInauthenticated()
    {
        $this->user = $this->service->getUserAuthenticated();

        if ($this->user === null || $this->user->rol->name != 'Visitante') {
            return view('auth/login', ['message' => 'No se ha logueado o no tiene los permisos']);   
        }  
        return null;
    }

    private function existeCodigo($qr_code) 
    {
        $existeCodigo = Stand::where('qr_code', $qr_code)->exists();
        return $existeCodigo;
    }

    private function evalCompletada($stand)
    {
        $evalCompletada = Evaluation::where('user_id', $this->user->id)
            ->where('stand_id', $stand->id)->exists();
        return $evalCompletada;
    }

    private function createPassport($stand_id)
    {   
        $passport = new Passport();
        $passport->date = Carbon::now();
        $passport->user_id = $this->user->id;
        $passport->stand_id = $stand_id;
        $passport->save();
    }

    public function index($qr_code)
    {   
        $userInauthenticated = $this->userInauthenticated();
        if ($userInauthenticated !== null) return $userInauthenticated;
        
        $stand = Stand::where('qr_code', $qr_code)->first();

        $evalCompletada = $this->evalCompletada($stand);
        if ($evalCompletada) {
            return view('home', ['message' => 'Evaluacion ya completada']);
        }

        $existeCodigo = $this->existeCodigo($qr_code);

        if (!$existeCodigo) {
            return redirect()->route('home')->with('error', 'Codigo QR Invalido');
        }
        
        $user = Auth::user();
        $criterios = Criterio::all();

        // Obtener la ruta del logo del stand
        $logoPath = $stand->logo;

        return view('evaluations/index', compact('criterios', 'qr_code', 'user', 'stand'));
    }

    public function store(Request $request, $qr_code)     
    {   
        try {
            //DB::beginTransaction();
            
            $userInauthenticated = $this->userInauthenticated();
            if ($userInauthenticated !== null) return null;

            $existeCodigo = $this->existeCodigo($qr_code);
            if (!$existeCodigo) {
                return redirect()->route('home')->with('error', 'Codigo QR Invalido');
            }
               
            
            $valorCriterios = $request->input('puntuacion');
            $rank =  array_sum($valorCriterios) / count($valorCriterios);
            
            $stand = Stand::where('qr_code', $qr_code)->lockForUpdate()->first();
            $evalCompletada = $this->evalCompletada($stand);
            if ($evalCompletada) {
                return view('home', ['message' => 'Evaluacion ya completada']);
            }
            
            $eval = Evaluation::create([
                'rank' => $rank,
                'feedback' => $request->get('feedback'),
                'criterio_id' => 1, // TODO: REVISAR RELACION CON CRITERIOS
                'stand_id' => $stand->id,
                'user_id' => $this->user->id
            ]);

            foreach ($request->criterio_id as $id) {
                EvaluationHasCriterio::create([
                    'criterio_id' => $id,
                    'evaluation_id' => $eval->id
                ]);
            }
            
            $this->addRankToClalificationStand($rank, $stand);

            // DB::commit();
            $this->createPassport($stand->id);

            // DEBE RETORNAR LA VISTA DE LOS STANDS SELLADOS
            return view('paginas-sello/index');

         } catch (\Throwable $th) {

            // DB::rollback();
            return redirect()->back()->with('error', 'Error al procesar la evaluación');
        }
    }

    private function addRankToClalificationStand($rank, $stand)
    {
        $calification = $stand->calification;
        if ($calification == 0) {
            $stand->update([
                'calification' => $rank
            ]);
        } else {
            $stand->update([
                'calification' => ($calification + $rank) / 2
            ]);
        }
    }
}
