<!DOCTYPE html>
<html>
<head>
    <title>Cadastrar nova tarefa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

    <style type="text/css">
        #b{
            width: 200px;
        }

        #user{
            width: 100px;
        }

        #btncadastrar{
            width: 100px;
        }

    </style>
<center>
<body>

    <nav class="navbar navbar-expand-lg fixed-top" id="mainNav" style="background: rgb(247, 247, 247);">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu <i class="ti-menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul style="margin-left: -120px;" class="navbar-nav text-uppercase ml-auto text-right">
                    <li class="nav-item"><a style="color: black;" class="nav-link js-scroll-trigger" href="#">GDAG</a></li>
                    <li class="nav-item"><a style="color: black;" class="nav-link js-scroll-trigger" href="{{route('usuario_home')}}">Início</a></li>

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

<br><br><br><br>


    <div class="container">
        <form action = "" method="POST">
            @csrf
            <div class="row justify-content-center mb-5">
                <div class="col-sm-12 col-sm-10 col-sm-8">
                    <div class="form-row">
                        <label id="b" class="form-control"><b>Cadastrar nova tarefa:</b></label><br>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-sm-4">
                            <label>Nome: </label>
                            <input class="form-control" name = "nome" placeholder="Nome da atividade">
                        </div>
                        <br>
                        <div class="form-group col-sm-4">                           
                            <label>Prioridade: </label>
                            <input class="form-control" name = "prioridade"  placeholder="Prioridade da atividade">
                        </div>
                        <br>
                        <div class="form-group col-sm-4">                           
                            <label>Previsão de término: </label>
                            <input class="form-control" name = "dt_termino"  placeholder="Previsão de término. Ex.: 2021-03-03 16:00:00">
                        </div>
                    </div>         
                    <br>                                                                         
                    <div class="form-row">
                        <input id="btncadastrar" class="form-control btn-success" value="Cadastrar" type="submit">
                    </div>
                    <div class="line"></div><div class="line"></div><div class="line"></div><div class="line"></div><div class="line"></div><div class="line"></div><div class="line"></div><div class="line"></div><div class="line"></div><div class="line"></div>
                </div>
             </div>
        </form>
    </div>
<button type="button" class="btn btn-light"><a href="{{route('tarefa_listagem')}}">Ver tarefas</a></button>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</center>
</html>