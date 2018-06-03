<!DOCTYPE html>
<html>
    <head>
        <title>
            Flat Responsive Bootstrap Website Tutorial
        </title>
        <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1" name="viewport">
                <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
                <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald|PT+Sans" rel="stylesheet">
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
                    </script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
                    </script>
                    <script defer="" src="https://use.fontawesome.com/releases/v5.0.6/js/all.js">

                    </script>
                    <script src="scrolling.js">
                    </script>
                    <link href="style.css" rel="stylesheet">
                        <script type="text/javascript">
                            $(document).on('click','.navbar-collapse.in',function(e) {
    if( $(e.target).is('a') && ( $(e.target).attr('class') != 'dropdown-toggle' ) ) {
        $(this).collapse('hide');
    }
    });
                        </script>
                    </link>
                </link>
            </meta>
        </meta>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button class="navbar-toggle" data-target="#MyNavbar" data-toggle="collapse" type="button">
                        <span class="icon-bar">
                        </span>
                        <span class="icon-bar">
                        </span>
                        <span class="icon-bar">
                        </span>
                        <span class="icon-bar">
                        </span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img alt="" src="img/Logo_teams/logo_liga.png"/>
                    </a>
                </div>
                <!-- end of navbar header-->
                <div class="collapse navbar-collapse" id="MyNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#home">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#about">
                                Registrar
                            </a>
                        </li>
                        <li>
                            <a href="#consultar">
                                Consultar
                            </a>
                        </li>
                        <li>
                            <a href="#portfolio">
                            Actualizar
                            </a>
                        </li>
                        <li>
                            <a href="#connect">
                                Eliminar
                            </a>
                        </li>
                        <li>
                            <a href="#connect">
                                Conectar
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- end of navbar collapse -->
            </div>
            <!-- end of container-->
        </nav>
        <!---End of nav-->



    <div id="home">
            <img alt="" class="banner" src="img/logo-liga-bbva.jpg">
            </img>
        </div>
        <div class="container-fluid text-center" id="about">
            <h1>
                Registrar Equipo Favorito
            </h1>
            <h3>
                Si tus piernas no puedes mas pues deja que el corazon juegue por ellas.
            </h3>
            <br>
                <br>
                    <div class="row">
                        <div class="col-md-6">

     <div id="form-registrar-equipos">

     <form> <!-- begining of  the form-->
    <fieldset>
    <legend id="titulo-formulario">formulario de Registro</legend>
    <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 nombre">Nombre</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nombre" placeholder="Nombre">
    </div>
    <br>
    <label for="inputEmail3" class="col-sm-2 Ciudad">Ciudad</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="ciudad" placeholder="Ciudad">
    </div>
    <label for="inputEmail3" class="col-sm-2 director">Director</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="director" placeholder="Director">
    </div>
    <label for="inputEmail3" class="col-sm-2 col-form-label">Estadio</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="estadio" placeholder="Estadio">
    </div>
    <label for="inputEmail3" class="col-sm-2 col-form-label">Año</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="ano" placeholder="Año">
    </div>

  </div>


  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary btn-lg">REGISTRAR</button>
    </div>
  </div>
 <fieldset>
</form>   <!-- end of the form-->
</div>
</div>
<div class="col-md-6 logo_liga">
        <img id="code" src="img/logo2.png">
</div>
 </div>
     <!-- end of row-->

        <!-- end of container -->

        <div class="relleno">
           
       </div> 
       <div>
        <img class="img-reus" src="img/reus.png">
       </div>
       
       <div class="relleno">
           
       </div> 

            <div class="container-fluid text-center" id="consultar">
                <h2>
                    Buscar Equipo
                </h2>
            <div class="col-sm-4">
                        
                           
    <div class="col-sm-10 buscar-equipo ">
      <input type="text" class="form-control" id="equipo" placeholder="Equipo">
    </div>

    <div class="col-sm-10 buscar-equipo">
      <input type="text" class="form-control" id="equipo" placeholder="Equipo hallado">
     </div>
                        </img>
                    </div>
                </div>
                <!-- end of row-->
                
            </div>
            <!-- end of container -->
            <img class="banner" src="img/people.png">
                <div class="container-fluid text-center" id="portfolio">
                    <h2>
                        Check out our Portfolio
                    </h2>
                    <br>
                        <br>
                            <div class="row">
                                <div class="col-sm-4" >
                                    <img alt="" id="icon" src="img/icons/camera.png">
                                    </img>
                                </div>
                                <div class="col-sm-4">
                                    <img alt="" id="icon" src="img/icons/mic.png">
                                    </img>
                                </div>
                                <div class="col-sm-4">
                                    <img alt="" id="icon" src="img/icons/phone.png">
                                    </img>
                                </div>
                                <div class="col-sm-4 hidden-sm hidden-xs">
                                    <img alt="" id="icon" src="img/icons/calendar.png">
                                    </img>
                                </div>
                                <div class="col-sm-4 hidden-sm hidden-xs">
                                    <img alt="" id="icon" src="img/icons/tv.png">
                                    </img>
                                </div>
                                <div class="col-sm-4 hidden-sm hidden-xs ">
                                    <img alt="" id="icon" src="img/icons/clock.png">
                                    </img>
                                </div>
                            </div>
                            <!-- end of row-->
                        </br>
                    </br>
                </div>
                <!-- end of container -->
                <img alt="" class="banner" src="img/social.png">
                    <footer class="container-fluid text-center" id="connect">
                        <div class="row">
                            <h2>
                                Connect
                            </h2>
                            <div class="social">
                                <a href="https://www.facebook.com/jhorman.romero.5" target="_blank">
                                    <i class="fab fa-facebook">
                                    </i>
                                </a>
                                <a href="" target="_blank">
                                    <i class="fab fa-twitter">
                                    </i>
                                </a>
                                <a href="" target="_blank">
                                    <i class="fab fa-instagram">
                                    </i>
                                </a>
                                <a href="https://www.youtube.com/channel/UC9O2oFY2yesW-1rCvTFCq1A?view_as=subscriber" target="_blank">
                                    <i class="fab fa-youtube">
                                    </i>
                                </a>
                            </div>
                        </div>
                        <!-- end of row-->
                    </footer>
                    <!-- end of container -->
     </body>
</html>
