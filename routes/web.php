<?php

use Illuminate\Support\Facades\Route;

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


use App\Http\Controllers\UserController;
use App\Http\Controllers\EstudiantesController;
use App\Http\Controllers\DocentesController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\loginController;
// rais del programa users
// Route::get('/', [UserController::class,'index']);
Route::get('/', [EstudiantesController::class,'index']);
/// controlador de usuarios creacion
Route::post('users', [UserController::class, 'store'])->name('users.store');

Route::post('archivos/all', [EstudiantesController::class, 'get_all'])->name('archivos/all');

// controlador de usuarios eliminacion
Route::delete('users/{user}', [UserController::class,'destroy'])->name('users.destroy');

//pagina inicial de estudiantes
Route::get('estudiantes', [EstudiantesController::class,'index'])->name("estudiantes");

///pagina de inicio docentes
Route::get('docentes', [DocentesController::class,'index']);
// en la primersa parte va la url que se ve en la barra de direcciones  controlador inicio de sesion estudiantes

//Route::post($uri, $callback);
Route::get('sign_in', [EstudiantesController::class, 'sign_in'])->name('sign_in');

//Route::post($uri, $callback);
Route::get('estudiantes/callback', [EstudiantesController::class, 'callback'])->name('callback');

Route::resource("upload",UploadController::class);

