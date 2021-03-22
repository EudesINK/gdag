<?php

use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Models\User;

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


Route::get('/', function() {
    return view('layout/login');
});

Route::get('/', LoginController::class)->name('login');

Route::post('painel', [UsuarioController::class, 'login'])->name('usuario_login');

Route::get('logout', [UsuarioController::class, 'logout'])->name('usuario_logout');

Route::get('usuario/cadastrar', [UsuarioController::class, 'cadastrar'])->name('usuario_cadastrar');

Route::post('usuario/inserir', [UsuarioController::class, 'inserir'])->name('usuario_inserir');