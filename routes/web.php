<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',RegisterController::class)->name("usuario.index");

Route::get("user",[RegisterController::class,"create"])->name("usuario.register");
Route::post("user",[RegisterController::class,"store"])->name("register.user");

Route::get("login",[RegisterController::class,"getLogin"])->name("logueo.user");
Route::post("login",[RegisterController::class,"validandoLogin"])->name("validando.login");
Route::get("Logout",[RegisterController::class,"loginOut"])->name("salir.login");

Route::get("interfaz",[RegisterController::class, "interfaz"])->middleware("auth")->name("interfaz.user");
