<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title>GRU Main Menu</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <style>
      body {
      padding-top: 50px;
      }
        .starter-template {
        padding: 40px 15px;
        text-align: center;
      }
      .dropdown-menu {
        left: 50%;
        right: auto;
        text-align: center;
        transform: translate(-50%, 0);
      }
            .modal-dialog {
        height: 80% !important;
        padding-top:10%;
      }

      .modal-content {
        height: 100% !important;
        overflow:visible;
      }

      .modal-body {
        height: 80%;
        overflow: auto;
      }

    </style>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Gestor de recursos universitarios</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">Acerca de</a></li>
            <li><a href="#contact">Contáctanos</a></li>
            <li><a href="../logout.php">Salir</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      <div class="starter-template">
<div class="dropdown">
    <button type="button" class="btn btn-lg btn-warning dropdown-toggle" data-toggle="dropdown">Seleccione la entidad <span class="caret"></span>

    </button>
    <ul class="dropdown-menu" role="menu">
        <li><a href="#sistemas" data-toggle="modal">Facultad de Sistemas</a>
        <li><a href="#arq" data-toggle="modal">Facultad de Arquitectura</a>
        <li><a href="#ingcivil" data-toggle="modal">Facultad de Ingeniería Civil</a>
        <li><a href="#artes" data-toggle="modal">Escuela de Artes Plásticas</a>
        <li><a href="#infoteca" data-toggle="modal">Infoteca Campus Arteaga</a>

        </li>
    </ul>
</div>
<div class="modal fade" id="sistemas" data-target="#sistemas">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header orange">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>

                </button>
                 <h4 class="modal-title"><strong></strong>Test 1</h4>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="arq" data-target="#arq">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header orange">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>

                </button>
                 <h4 class="modal-title"><strong></strong>Test 2</h4>

            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="ingcivil" data-target="#ingcivil">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header orange">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>

                </button>
                 <h4 class="modal-title"><strong></strong>Test 3</h4>

            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="artes" data-target="#artes">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header orange">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>

                </button>
                 <h4 class="modal-title"><strong></strong>Test 4</h4>

            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="infoteca" data-target="#infoteca">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header orange">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>

                </button>
                 <h4 class="modal-title"><strong></strong>Test 5</h4>

            </div>
        </div>
    </div>
</div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>