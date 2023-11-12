<?php
include "connection.php";
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Regístrese ahora</title>
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
  <nav class="navbar navbar-default"> <!-- Barra -->
    <div class="container-fluid"> 
      <div class="navbar-header">
        <a class="navbar-brand" href="inicio.php">Inu Nihongo</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="inicio.php">Inicio</a></li>
        <li><a href="Introduccion/Introduccion.php">Introducción al japones</a></li>
        <li><a href="hiragana/introduccionhiragana.php">Hiragana</a></li>
        <li><a href="#">Katakana</a></li>
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
        <div class="text-center custom-login">
            <h3>Crear cuenta</h3>

        </div>
        <div class="content-error"> <!-- Formulario para el registro de nuevos usuarios-->
            <div class="hpanel">
                <div class="panel-body">
                    <form action="" name="form1" method="post">
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <label>Nombre</label>
                                <input type="text" name="firstname" class="form-control" required>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Apellido</label>
                                <input type="text" name="lastname" class="form-control" required>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Usuario</label>
                                <input type="text" name="username" class="form-control" required>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Contraseña</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" required>
                            </div>
                            <div class="form-group col-lg-12">
                                <label>Contacto</label>
                                <input type="text" name="contact" class="form-control" required>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" name="submit1" class="btn btn-success loginbtn">Regístrar</button><br> <!-- Boton para confirmar los datos del registro de nuevo usuario -->
                            <a href="login.php">Ir a la página de inicio de sesión</a>
                        </div>

                        <div class="alert alert-success" id="success" style="margin-top: 10px; display: none">
                            <strong>¡Éxito!</strong> Registro de cuenta realizado con éxito.
                        </div>

                        <div class="alert alert-danger" id="failure" style="margin-top: 10px; display: none">
                            <strong>Ya existe</strong> Este nombre de usuario ya existe
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>
</div>


<?php
if (isset($_POST["submit1"])) {

    $count = 0;
    $res = mysqli_query($link, "select * from registration where username='$_POST[username]'") or die(mysqli_error($link));
    $count = mysqli_num_rows($res);

    if ($count > 0) {
        ?>
        <script type="text/javascript">
            document.getElementById("success").style.display = "none";
            document.getElementById("failure").style.display = "block";
        </script>
        <?php
    } else {

        mysqli_query($link,"insert into registration values(NULL,'$_POST[firstname]','$_POST[lastname]','$_POST[username]','$_POST[password]','$_POST[email]','$_POST[contact]')")or die(mysqli_error($link));
        ?>
        <script type="text/javascript">
            document.getElementById("success").style.display = "block";
            document.getElementById("failure").style.display = "none";
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
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

</body>

</html>