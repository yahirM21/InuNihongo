<?php
include "../connection.php";
include "Header.php";
include "sidebar.php";
?>    
<style>
        .container {
            margin-top: 50px;
        }

        .palabra-japonesa {
            display: inline-block;
            background-color: #f5f5f5;
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px;
            cursor: pointer;
        }

        .oracion-espanol {
            font-size: 20px;
            margin-bottom: 20px;
        }
</style>
  <center><h1><font color="green"><b>です　/　じゃないです　/　ですか</b></font></h1></center>
  <div class="container mt-3">
    <p class="justificado">Antes de empezar con el tema es necesario conocer la particula <ruby><font color="red">は</font><rt>HA</rt></ruby> que en este caso se pronuncia como "<font color="red">WA</font>", esta particula marca el sujeto o tema del que se quiere hablar y se coloca despues de estos.</p> 
      <p class="justificado">En japones para poder decir que A es B se utiliza la siguiente estructura: A<font color="red">は</font>Ｂ<font color="red">です。</font></p>
      <p class="justificado"><span class="glyphicon glyphicon-chevron-right"></span>この<ruby>動物<rt>どうぶつ</rt></ruby><font color="red">は</font><ruby>犬<rt>いぬ</rt></ruby><font color="red">です</font>。<font color="blue">Este animal es un perro.</font><audio controls>
            <source src="aud/aud1.ogg" type="audio/ogg">
            <source src="aud/aud1.mp3" type="audio/mpeg"> <!--audio1 / cambiar el nombre del archivo al mostrado en source --> 
            Tu navegador no soporta los audios.
      </audio></p>
      <p class="justificado">Si queremos decir que A no es B es tan sencillo como agregar <font color="red">じゃない</font> antes del <font color="red">です。</font></p>
      <p class="justificado"><span class="glyphicon glyphicon-chevron-right"></span>その<ruby>動物<rt>どうぶつ</rt></ruby><font color="red">は</font><ruby>犬<rt>いぬ</rt></ruby><font color="red">じゃないです</font>。<font color="blue">Ese animal no es un perro.</font>
      <audio controls>
            <source src="aud/aud2.ogg" type="audio/ogg">
            <source src="aud/aud2.mp3" type="audio/mpeg"> <!--audio1 / cambiar el nombre del archivo al mostrado en source --> 
            Tu navegador no soporta los audios.
      </audio></p>
      <p class="justificado">Para hacer preguntas en japonés hay que agregar la partícula <font color="red">か</font> al final de la oración, esta partícula fungirá como un signo de interrogación.</p>
      <p class="justificado"><span class="glyphicon glyphicon-chevron-right"></span>あの<ruby>動物<rt>どうぶつ</rt></ruby><font color="red">は</font><ruby>犬<rt>いぬ</rt></ruby>です<font color="red">か</font>。 <font color="blue">¿Aquel animal es un perro?</font>      <audio controls>
            <source src="aud/aud3.ogg" type="audio/ogg">
            <source src="aud/aud3.mp3" type="audio/mpeg"> <!--audio1 / cambiar el nombre del archivo al mostrado en source --> 
            Tu navegador no soporta los audios.
      </audio></p>
      <p class="justificado">Si quieres preguntar sobre un tema que desconozcas puedes seguir la siguiente estructura ”Cosa que quieras saber”は<font color="red">なん</font>です<font color="red">か</font>。</p>
      <p class="justificado"><span class="glyphicon glyphicon-chevron-right"></span>この<ruby>動物<rt>どうぶつ</rt></ruby>は<ruby><font color="red">何</font><rt>なん</rt></ruby>です<font color="red">か</font>。<font color="blue">¿Qué es este animal?</font><audio controls>
            <source src="aud/aud4.ogg" type="audio/ogg">
            <source src="aud/aud4.mp3" type="audio/mpeg"> <!--audio1 / cambiar el nombre del archivo al mostrado en source --> 
            Tu navegador no soporta los audios.
      </audio>  </p>
      <h3>Ejercicio de practica</h3>
      <div class="container">
        <div class="oracion-espanol">A:えええ、あの犬はかわいいです。<br>B:いいえ、あの動物は＿＿＿＿＿＿</div>
        <div id="banco-palabras">
            <div class="palabra-japonesa" onclick="verificar('犬です')">犬です</div>
            <div class="palabra-japonesa" onclick="verificar('犬じゃないです')">犬じゃないです</div>
            <div class="palabra-japonesa" onclick="verificar('猫じゃないです')">猫じゃないです</div>
            <div class="palabra-japonesa" onclick="verificar('かわいいです')">かわいいです</div>
        </div>
        <div id="mensaje" class="mt-3"></div>
    </div>
    <script>
        function verificar(respuesta) {
            if (respuesta === '犬じゃないです') {
                document.getElementById('mensaje').textContent = 'よくできました! La respuesta es correcta.';
                document.getElementById('mensaje').className = 'alert alert-success';
            } else {
                document.getElementById('mensaje').textContent = 'Intenta de nuevo.';
                document.getElementById('mensaje').className = 'alert alert-danger';
            }
        }
    </script>
    <ul class="pager">
        <li class="previous"><a href="PresentacionN5.php">Anterior</a></li>
        <li class="next"><a href="No.php">Siguiente</a></li>
    </ul>
    </div>
    </div>
    
    <?php
      include "sidenav.php";
    ?>
    </body>
</html>