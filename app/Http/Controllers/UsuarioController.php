<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function login(Request $request){
    	$email = $request->email;
    	$password = $request->password;

    	$usuarios = user::where('email', '=', $email)->where('password', '=', $password)->first();

    	if (@$usuarios->id != null) {
    		@session_start();
    		$_SESSION['id'] = $usuarios->id;
    		$_SESSION['name'] = $usuarios->name;

    		return view('layout/home');
    	}else{
    		echo "<script language='javascript'> window.alert('Os dados Incorretos.') </script>";

    		return view('layout/login');
    	}
    }

    public function logout(){
    	@session_start();
    	@session_destroy();

    	return view('layout/login');
    }

    public function cadastrar(){
    	return view('layout/cadastro');
    }

    public function inserir(Request $request){
    	$user = new user;
    	$user->name = $request->name;
    	$user->email = $request->email;
    	$user->password = bcrypt($request->password);
    	$user->email_verified_at = now();
    	$user->remember_token = Str::random(10);

    	$user->save();
		
		return view('layout/login');
    }
}
