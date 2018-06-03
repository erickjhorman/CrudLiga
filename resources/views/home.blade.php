<!DOCTYPE html>
<html>
    <head>
        <title>
            Flat Responsive Bootstrap Website Tutorial
        </title>
        <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1" name="viewport">
                <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
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
                        <img alt="" src="img/logo.png"/>
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
                                About
                            </a>
                        </li>
                        <li>
                            <a href="#features">
                                Features
                            </a>
                        </li>
                        <li>
                            <a href="#portfolio">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#connect">
                                Conect
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
            <img alt="" class="banner" src="img/desktop.png">
            </img>
        </div>
        <div class="container-fluid text-center" id="about">
            <h1>
                Welcome to my website
            </h1>
            <h3>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat sed expedita aspernatur sequi, autem. Ullam?
            </h3>
            <br>
                <br>
                    <div class="row">
                        <div class="col-md-6">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit ipsum magni quod odit quaerat officiis accusantium sint? Iusto, soluta eligendi est ea eius, asperiores in autem corrupti itaque! Ipsa, expedita.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <img id="code" src="img/code.png">
                            </img>
                        </div>
                    </div>
                    <!-- end of row-->
                    <br>
                        <h3>
                            <i>
                                "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, corrupti?"
                            </i>
                        </h3>
                    </br>
                </br>
            </br>
        </div>
        <!-- end of container -->
        <img class="banner" src="img/charts.png">
            <div class="container-fluid text-center" id="features">
                <h2>
                    Get to know our features
                </h2>
                <div class="row">
                    <div class="col-sm-4">
                        <img alt="" id="icon" src="img/html5.png">
                            <h3>
                                HTML5
                            </h3>
                        </img>
                    </div>
                    <div class="col-sm-4">
                        <img alt="" id="icon" src="img/Bootstrap.png">
                            <h3>
                                BOOSTRAP
                            </h3>
                        </img>
                    </div>
                    <div class="col-sm-4">
                        <img alt="" id="icon" src="img/css3.png">
                            <h3>
                                CSS3
                            </h3>
                        </img>
                    </div>
                </div>
                <!-- end of row-->
                <br>
                    <br>
                        <h3>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod at dolorem, unde eveniet quos officia, ab vel voluptas earum aut saepe alias dolor excepturi non, minus officiis architecto. Nostrum corporis tenetur, nemo cupiditate laborum, quibusdam pariatur veniam eos possimus optio ex earum magni facere. Vel maxime, quod vero ad ullam!
                        </h3>
                    </br>
                </br>
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
