<!doctype html>
<html lang="en">
  <head>
    <style type="text/css">
        .botoes{
            border: none;
            background-color: white;
        }
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>GDag!</title>
  </head>
  <body>
    

<nav class="navbar navbar-expand-lg fixed-top" id="mainNav" style="background: white">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu <i class="ti-menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul style="margin-left: -120px;" class="navbar-nav text-uppercase ml-auto text-right">
                    <li class="nav-item"><a style="color: black;" class="nav-link js-scroll-trigger" href="#votacao">Início</a></li>

                    <li class="nav-item"><a style="color: black;" class="nav-link js-scroll-trigger" href="#sobre">Sobre</a></li>
                    <div class="user-profile pull-right">
                        <div class="btn-group dropright ">
                            <div class="dropdown">
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="avatar.png">Ricardo
                            </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="sair.php">Sair</a></li>
                                </ul>
                            </div>
                            </div>
                        </div>
                    </div>  
                </ul>
            </div>
        </div>
</nav>

<br><br><br><hr>

<div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Amo fazer atividades</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">50</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Total de atividades</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">50</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Atividades concluídas</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">50</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Atividades pendentes</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <center><h6 class="m-0 font-weight-bold text-primary">Lista de atividades</h6></center>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nome da atividade</th>
                                            <th>Prioridade</th>
                                            <th>Aberta em</th>
                                            <th>Previsão de término</th>
                                           <th>Editar</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nome da atividade</th>
                                            <th>Prioridades</th>
                                            <th>Aberta em</th>
                                            <th>Previsão de término</th>
                                            <th>Editar</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>Projetar HTML</td>
                                            <td>Alta</td>
                                            <td>Hoje</td>
                                            <td>Amanhã</td>
                                            <th><button class="botoes" class="btn-icon-split">Editar</button></th>
                                        </tr>
                                        <tr>
                                            <td>Estudar Laravel</td>
                                            <td>Alta</td> 
                                            <td>Hoje</td>
                                            <td>Amanhã</td>
                                            <th><button class="botoes" class="btn-icon-split">Editar</button></th>
                                        </tr>
                                        <tr>
                                            <td>Fazer backend</td>
                                            <td>Intermediária</td>
                                            <td>Hoje</td>
                                            <td>Amanhã</td>
                                            <th><button class="botoes" class="btn-icon-split">Editar</button></th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>







    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>