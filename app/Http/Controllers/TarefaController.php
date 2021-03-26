<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Tarefa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TarefaController extends Controller
{
     public function listar(){
     	@session_start();
     	$id= $_SESSION['id'];

        $tarefas = Tarefa::where('user', '=', $id)->get();


        return view('layout.listatarefas', ['tarefas'=>$tarefas]);

    }

    public function store(Request $request){
        @session_start();
        $id= $_SESSION['id'];
        $tarefa = new Tarefa;

        $tarefa->nome = $request->nome;
        $tarefa->prioridade = $request->prioridade;
        $tarefa->dt_termino = $request->dt_termino;
        $tarefa->user = $id;
        $tarefa->save();

        return redirect('cadastro_tarefa');
    }

    public function cadastrar(){
        return view('layout.cadastrar_tarefa');
    }

    public function inserir(){
        return view('layout.processa');
    }

    public function home(){
        return view('layout.home');
    }

    public function excluir($id, Request $request){
        $data = [];
        $tarefas = Tarefa::find($id);

        if($tarefas){

            $tarefas->delete();
            $data["resp"] = "Tarefa excluída com sucesso";

        }else{
            $data["resp"] = "Nenhuma tarefa encontrada";
        }

        return redirect()->to(route('tarefa_listagem'));

    }
}