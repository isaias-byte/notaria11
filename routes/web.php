<?php

use App\Http\Controllers\AbogadoController;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

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

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/dashboard');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('/', function () {
    return view('inicio');
});

Route::get('descargar-imagen/{abogado}', [AbogadoController::class, 'descargarImagen'])->name('descargar');

Route::get('servicios', [AbogadoController::class, 'obtenerServicios'])->name('servicios');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::post('abogado/{abogado}/servicios', [AbogadoController::class, 'agregarServicios'])->name('abogado.servicio');

Route::resource('abogado', AbogadoController::class)->middleware('verified');


// Route::get('inicio', function () {
//     return view('inicio');
// });