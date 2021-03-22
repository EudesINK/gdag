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

// Route::get('home/{user}', function($user) {
//     $user = User::find($user);
//     if ($user) {
//     	$tarefa = $user->tarefa;
//     	return view('layout.home', ['tarefa' => $tarefa]);
//     }
//     return 'usuario nao logado';
//     //return view('layout.home');
//     return redirect()->to(route('layout.index'));
//});

// Route::get('login/home', function() {
//     return view('layout/home');
// });