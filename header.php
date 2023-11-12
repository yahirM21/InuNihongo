<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Inu Nihongo</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     <!-- Agrega el icono del navegador -->
     <link rel="icon" href="img/6.png" type="image/x-icon">
     <link rel="shortcut icon" href="img/6.png" type="image/x-icon">
     <link rel="icon" href="img/6.png" type="image/png">
     <link rel="stylesheet" href="css1/bootstrap.min.css">
    <link rel="stylesheet" href="css1/font-awesome.min.css">
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="style.css">
    <style>
      .imagen-sesion{
        width:35px;
        height:35px;
        border-radius: 50%;
      }
    </style>
</head>
<body>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="inicio.php">Inu Nihongo</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="inicio.php">Inicio</a></li>
        <li><a href="Introduccion/Introduccion.php">Introducción al japones</a></li>
        <li><a href="hiragana/introduccionhiragana.php">Hiragana</a></li>
        <li><a href="katakana/introduccionkatakana.php">Katakana</a></li>
        <li><a href="kanji/introduccionkanji.php">Kanji</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
                aria-expanded="false">Gramatica<span class="caret"></span>
          </a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="N5/PresentacionN5.php">N5</a></li>
            <li><a href="#">N4</a></li>
            <li><a href="#">N3</a></li>
            <li><a href="#">N2</a></li>
            <li><a href="#">N1</a></li>
          </ul>
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
                aria-expanded="false">Cuestionarios<span class="caret"></span>
          </a>
          <ul class="dropdown-menu" role="menu">
            <li class="nav-item"><a href="select_exam.php" class="nav-link">Realizar</a></li>
            <li class="nav-item"><a href="old_exam_results.php" class="nav-link">Resultados</a></li>
          </ul>
          <li><a href="contactarsoporte.php">Soporte</a></li>
          <li><a href="misionvision.php">Acerca De</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
            <img src="img/avatar-mini2.jpg" alt="" class="imagen imagen-sesion">
            <span><font color="black"><?php echo $_SESSION["username"]; ?></font></span>
            <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
            </a>
            <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
              <li><a href="logout.php"><span class="edu-icon edu-locked author-log-ic"></span>Log Out</a></li>
            </ul>
    </ul>
        </ul>
    </div>
  </nav>
        <!-- Mobile Menu start -->

        <!-- Mobile Menu end -->
        <div class="breadcome-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcome-list">
                            <div class="row">
                                <div class="col-lg-6">Bienvenido, <b><?php echo $_SESSION["username"]; ?></b></div>

                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-right">
                                    <ul class="breadcome-menu">
                                        <li><div id="countdowntimer" style="display: block;"></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript">
    setInterval(function(){
        timer();
    },1000);
    function timer()
    {
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

                if(xmlhttp.responseText=="00:00:01")
                {
                    window.location="result.php";
                }

                document.getElementById("countdowntimer").innerHTML=xmlhttp.responseText;

            }
        };
        xmlhttp.open("GET","forajax/load_timer.php",true);
        xmlhttp.send(null);
    }

    </script>