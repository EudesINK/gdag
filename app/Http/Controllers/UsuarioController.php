<?php

namespace App\Http\Controllers;

use App\Models\User;
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
}
