<?php
session_start();
include "connection.php";
?>
<!doctype html>
<html class="no-js" lang="en">

<head>


    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Inicio de sesión</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <link rel="stylesheet" href="css1/bootstrap.min.css">
    <link rel="stylesheet" href="css1/font-awesome.min.css">
    <link rel="stylesheet" href="css1/owl.carousel.css">
    <link rel="stylesheet" href="css1/owl.theme.css">
    <link rel="stylesheet" href="css1/owl.transitions.css">
    <link rel="stylesheet" href="css1/animate.css">
    <link rel="stylesheet" href="css1/normalize.css">
    <link rel="stylesheet" href="css1/main.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css1/responsive.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
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
          <li><a href="#">Soporte</a></li>
          <li><a href="misionvision.php">Acerca De</a></li>
          </ul>
      <div class="header-right-info">
      <ul class="nav navbar-nav mai-top-nav header-right-menu">
         </ul>
        </div>
      </ul>
    </div>
  </nav>

<div class="error-pagewrap">
    <div class="error-page-int">
        <div class="text-center m-b-md custom-login">
            <h3>Inicio de sesión</h3>

        </div>
        <div class="content-error">
            <div class="hpanel">
                <div class="panel-body">
                    <form action="" name="form1" method="post">
                        <div class="form-group">
                            <label class="control-label" for="username">Usuario</label>
                            <input type="text"  placeholder="Introduce tu usuario" title="Please enter you username" required="" value="" name="username" id="username" class="form-control">

                        </div>
                        <div class="form-group">
                            <label class="control-label" for="password">Contraseña</label>
                            <input type="password"  title="Please enter your password" placeholder="Introduce tu contraseña" required="" value="" name="password" id="password" class="form-control">

                        </div>

                        <button type="submit" name="login" class="btn btn-success btn-block loginbtn">Iniciar Sesión</button>
                        <button type="button" name="register" class="btn btn-success btn-block loginbtn" onclick="window.location='register.php'">Crear cuenta</button>


                        <div class="alert alert-danger" id="failure" style="margin-top: 10px; display: none">
                            <strong>No coincide!</strong> Nombre de usuario o contraseña invalidos
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>


<?php
if(isset($_POST["login"]))
{


    $count=0;
    $res=mysqli_query($link,"select * from registration where username='$_POST[username]' && password='$_POST[password]'");

    $count=mysqli_num_rows($res);

    if($count==0)
    {

        ?>
        <script type="text/javascript">
            document.getElementById("failure").style.display = "block";
        </script>
        <?php

    }
    else{

        $_SESSION["username"]=$_POST["username"];

        ?>
<script type="text/javascript">
    window.location="inicio.php";
</script>
        <?php
    }



}

?>


<script src="js/vendor/jquery-1.12.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/jquery-price-slider.js"></script>
<script src="js/jquery.meanmenu.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/jquery.scrollUp.min.js"></script>


</body>

</html>