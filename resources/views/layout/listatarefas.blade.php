<!<!DOCTYPE html>
<html>
<head>
    <title>Lista de tarefas</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>


<nav class="navbar navbar-expand-lg fixed-top" id="mainNav" style="background: rgb(247, 247, 247);">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu <i class="ti-menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul style="margin-left: -120px;" class="navbar-nav text-uppercase ml-auto text-right">
                    <li class="nav-item"><a style="color: black;" class="nav-link js-scroll-trigger" href="#">GDAG</a></li>
                    <li class="nav-item"><a style="color: black;" class="nav-link js-scroll-trigger" href=" {{route('usuario_home')}} ">Início</a></li>

                    <div class="user-profile pull-right">
                        <div class="btn-group dropright ">
                            <div class="dropdown">
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="avatar.png">Logout
                            </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="{{route('usuario_logout')}}">Sair</a></li>
                                </ul>
                            </div>
                            </div>
                        </div>
                    </div>  
                </ul>
            </div>
        </div>
</nav>
<br><br><br>
    
<div class="card-body">
    <center><h3><span class="badge bg-secondary">Lista de tarefas</span></h3><br>
        <button type="button" class="btn btn-light"><a href="{{route('cadastro_tarefa')}}">Cadastrar nova tarefa</a></button>
        <center><br>

    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>ID da atividade</th>
                    <th>Nome da atividade</th>
                    <th>Prioridade</th>
                    <th>Abertura</th>
                    <th>Previsão de término</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tarefas as $tarefa)
                <tr>    
                        <td>{{$tarefa->id}}</td>
                        <td>{{$tarefa->nome}}</td>
                        <td>{{$tarefa->prioridade}}</td>
                        <td>{{$tarefa->created_at}}</td>
                        <td>{{$tarefa->dt_termino}}</td>
                        <td>
                            <a href="{{route('exluir_tarefa', ['id'=>$tarefa->id])}}"><i class="far fa-trash-alt"></i></a>
                        </td>
                @endforeach   
                </tr>
            </tbody>
        </table> 
    </div>
</div>



 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>
</html>