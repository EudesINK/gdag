<!doctype html>
<html lang="en">
  <head>
    <style type="text/css">
        .botoes{
            border: none;
            background-color: white;
        }

        #sobre{
            position: relative;
            left: 550px;
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



<div class="card shadow mb-4">
    <div class="card-header py-3">
        <center><h6 class="m-0 font-weight-bold text-primary"><a href="{{route('tarefa_listagem')}}">Listar atividades</a></h6>
                <h6 class="m-0 font-weight-bold text-primary"><a href="{{route('cadastro_tarefa')}}">Nova atividade</a>
        </h6></center>
    </div>
</div>

<br><br><br>

<center><section class="page-section bg-light">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <h2 class="section-heading text-uppercase" style="font-family: 'Lato', sans-serif">Sobre</h2>
                    <p class="text-muted">O GDAG visa aprimorar recursos já existentes, otimizando e poupando tempo para uma melhor organização acadêmica</p>
                </div>
            </div>
            <!-- Informações sobre a equipe que desenvolveu o projeto -->
            <div class="text-center">
                <br>
                <h3 class="section-heading text-uppercase" style="font-family: 'Lato', sans-serif">Nossa equipe</h3>
            </div>
            <div class="row">
                
                
                <div class="col-lg-3">
                    <div id="sobre" class="team-member">
                        <img class="mx-auto rounded-circle" src="perfil.jfif" alt="Ricardo Alencar" width="100px" height="100px"/>
                        <h4>Ricardo Alencar</h4>
                        <p class="text-muted">Devenvolvedor</p>
                        <a class="btn btn-light btn-social mx-2" href="https://www.instagram.com/euoalencar/?hl=pt-br"><img src="icinsta.png" width="30px" height="30px"></a>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="perfil2.jfif"alt="Eudes Medeiros" width="100px" height="100px"/>
                        <h4>Eudes Medeiros</h4>
                        <p class="text-muted">Devenvolvedor</p>
                        <a class="btn btn-light btn-social mx-2" href="https://www.instagram.com/eudesamedeiros/?hl=pt-br"><img src="icinsta.png" width="30px" height="30px"></a>
                    </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Para dúvidas sobre o funcionamento da aplicação, contatar a equipe de desenvolvedores pelos meios de comunicação supracitados.</p></div>
            </div>
        </div>
    </section></center>
                        







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