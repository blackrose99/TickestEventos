<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StandController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\PlacesController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\PassportController;
use App\Http\Controllers\EvaluationController;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/stands/home', [App\Http\Controllers\StandController::class, 'getAllStands'])->name('stands.home');


// RUTAS PROTEGIDAS PARA EL VISITANTE
Route::middleware(['auth', 'role:Visitante'])->group(function () {
    
    // Muestra la evaluación 
    Route::get('/evaluation/index/{qr_code}', [EvaluationController::class, 'index'])->name('evaluation.index');

    // Guarda el resultado de la evaluación
    Route::post('/evaluation/store/{qr_code}', [EvaluationController::class, 'store'])->name('evaluation.store');

    // Stand individual
    Route::get('/stands/{id}', [StandController::class, 'show'])->name('stand.show');

    // Stands visitados
    Route::get('/stands-visitados', [StandController::class, 'standsVisitados'])->name('stand.visitados');

    // Ruta para el método index2 redirigiendo a /list
    Route::get('/stands', [StandController::class, 'index2'])->name('stands.list');

    Route::resource('passport', PassportController::class);
    Route::resource('user', UserController::class);  
});


// RUTAS PROTEGIDAS PARA EL ADMIN
    Route::middleware(['auth', 'role:Administrador'])->group(function () {

    Route::resource('empresa', EmpresaController::class);
    Route::resource('places',PlacesController::class);
    Route::resource('schedule',ScheduleController::class);

});

// RUTAS PROTEGIDAS PARA LA EMPRESA
Route::middleware(['auth', 'role:Empresa'])->group(function () {
     Route::resource('stand', StandController::class);
    Route::resource('agenda', AgendaController::class);
});


//CRUD de visitante
Route::resource('user',UserController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('places',PlacesController::class);



// IMPLEMENTACION AUTH GOOGLE

Route::get('/login-google', function () {
    return Socialite::driver('google')->redirect();
});
 
Route::get('/google-callback', function () {
    $user = Socialite::driver('google')->user();
    $userExiste = User::where('auth_id', $user->id)->where('auth_name', 'google')->first();

    if ($userExiste) {
        Auth::login($userExiste);
    } else {
        $user = User::create([
            'name' => $user->name,
            'email' => $user->email,
            'auth_id' => $user->id,
            'auth_name' => 'google',
            'rol_id' => 2
        ]);

        $user->assignRole('Visitante');
        Auth::login($user);
    }
    return redirect()->route('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
