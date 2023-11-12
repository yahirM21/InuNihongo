<?php
include "../connection.php";
include "Header.php";
include "sidebar.php";
?>
    <style>

        #pregunta {
            font-size: 24px;
            margin-bottom: 30px;
        }

        .radio-label {
            display: inline-block;
            margin-right: 20px;
        }

        #mensaje {
            margin-top: 20px;
            font-weight: bold;
        }

        .btn-verificar {
            background-color: #28a745;
            border-color: #28a745;
        }

        .btn-verificar:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }
    </style>
      <center><h1><font color="green"><b>Verbos</b></font></h1></center>
      <div class="container mt-3">
        <p class="justificado">En japonés, los verbos son una parte fundamental de la gramática y se utilizan para expresar acciones, estados y procesos. A diferencia del español, los verbos en japonés no conjugan en número (singular/plural) ni en persona (yo/tú/él/ella), pero sí varían en tiempo, forma y modalidad. Existen tres grupos de verbos en japonés:</p> 
        <p class="justificado">Verbos <ruby><font color="red">う</font><rt>u</rt></ruby>: La mayoría de los verbos japoneses pertenecen a este grupo. Terminan en -u en su forma infinitiva tambien llamada en japones forma diccionario.</p>
        <p class="justificado"><span class="glyphicon glyphicon-chevron-right"><ruby>聞<rt>き</rt><font color="red">きます</font></ruby>　→　<ruby>聞<rt>き</rt><font color="red">く</font>　</ruby><font color="blue">Escuchar / Preguntar</font>
        <audio controls>
            <source src="aud/aud6.ogg" type="audio/ogg">
            <source src="aud/aud6.mp3" type="audio/mpeg"> <!--audio1 / cambiar el nombre del archivo al mostrado en source --> 
            Tu navegador no soporta los audios.
          </audio></p>
        <p class="justificado"><span class="glyphicon glyphicon-chevron-right"><ruby>飲<rt>の</rt><font color="red">みます</font></ruby>　→　<ruby>飲<rt>の</rt><font color="red">む</font>　</ruby><font color="blue">Beber</font>
        <audio controls>
            <source src="aud/aud7.ogg" type="audio/ogg">
            <source src="aud/aud7.mp3" type="audio/mpeg"> <!--audio1 / cambiar el nombre del archivo al mostrado en source --> 
            Tu navegador no soporta los audios.
          </audio></p>
        <p class="justificado"><span class="glyphicon glyphicon-chevron-right"><ruby>話<rt>はな</rt><font color="red">します</font></ruby>　→　<ruby>話<rt>はな</rt><font color="red">す</font>　</ruby><font color="blue">Hablar</font>
        <audio controls>
            <source src="aud/aud8.ogg" type="audio/ogg">
            <source src="aud/aud8.mp3" type="audio/mpeg"> <!--audio1 / cambiar el nombre del archivo al mostrado en source --> 
            Tu navegador no soporta los audios.
          </audio></p>
        <p class="justificado"><span class="glyphicon glyphicon-chevron-right"><ruby>遊<rt>あそ</rt><font color="red">びます</font></ruby>　→　<ruby>遊<rt>あそ</rt><font color="red">ぶ</font>　</ruby><font color="blue">Jugar</font>
        <audio controls>
            <source src="aud/aud9.ogg" type="audio/ogg">
            <source src="aud/aud9.mp3" type="audio/mpeg"> <!--audio1 / cambiar el nombre del archivo al mostrado en source --> 
            Tu navegador no soporta los audios.
          </audio></p>    
        <p class="justificado">Verbos <ruby><font color="red">る</font><rt>ru</rt></ruby>: Estos verbos terminan en -ru en su forma de diccionario.</p>
        <p class="justificado"><span class="glyphicon glyphicon-chevron-right"><ruby>見<rt>み</rt><font color="red">ます</font></ruby>　→　<ruby>見<rt>み</rt><font color="red">る</font>　</ruby><font color="blue">Mirar</font>
        <audio controls>
            <source src="aud/aud10.ogg" type="audio/ogg">
            <source src="aud/aud10.mp3" type="audio/mpeg"> <!--audio1 / cambiar el nombre del archivo al mostrado en source --> 
            Tu navegador no soporta los audios.
          </audio></p>
        <p class="justificado"><span class="glyphicon glyphicon-chevron-right"><ruby>食<rt>た</rt>べ<font color="red">ます</font></ruby>　→　<ruby>食<rt>た</rt>べ<font color="red">る</font>　</ruby><font color="blue">Comer</font>
        <audio controls>
            <source src="aud/aud11.ogg" type="audio/ogg">
            <source src="aud/aud11.mp3" type="audio/mpeg"> <!--audio1 / cambiar el nombre del archivo al mostrado en source --> 
            Tu navegador no soporta los audios.
          </audio></p> 
        <p class="justificado">Verbos <font color="red">Irregulares</font>: Algunos verbos no siguen las reglas estándar y deben ser memorizados individualmente.</p>  
        <p class="justificado"><span class="glyphicon glyphicon-chevron-right"><font color="red">します</font>　→　<font color="red">する</font>　<font color="blue">Hacer</font>
        <audio controls>
            <source src="aud/aud12.ogg" type="audio/ogg">
            <source src="aud/aud12.mp3" type="audio/mpeg"> <!--audio1 / cambiar el nombre del archivo al mostrado en source --> 
            Tu navegador no soporta los audios.
          </audio></p>
        <p class="justificado"><span class="glyphicon glyphicon-chevron-right"><ruby><font color="red">来</font><rt>き</rt><font color="red">ます</font></ruby>　→　<ruby><font color="red">来</font><rt>く</rt><font color="red">る</font>　</ruby><font color="blue">Venir</font>
        <audio controls>
            <source src="aud/aud13.ogg" type="audio/ogg">
            <source src="aud/aud13.mp3" type="audio/mpeg"> <!--audio1 / cambiar el nombre del archivo al mostrado en source --> 
            Tu navegador no soporta los audios.
          </audio></p>  
        <ul class="pager">
            <li class="previous"><a href="No.php">Anterior</a></li>
            <li class="next"><a href="#">Siguiente</a></li>
        </ul>
        <h3>Ejercicio de practica</h3>
      <div class="container">
        <div class="oracion-espanol">Convierte el verbo de su forma ます a su forma diccionario:</br>さんぽします</div>
        <div id="banco-palabras">
            <div class="palabra-japonesa" onclick="verificar('A')">さんぽしる</div>
            <div class="palabra-japonesa" onclick="verificar('B')">さんぽす</div>
            <div class="palabra-japonesa" onclick="verificar('C')">さんぽする</div>
            <div class="palabra-japonesa" onclick="verificar('D')">さんぽる
        </label></div>
        </div>
        <div id="mensaje" class="mt-3"></div>
    </div>
    <script>
        function verificar(respuesta) {
            if (respuesta === 'C') {
                document.getElementById('mensaje').textContent = 'よくできました! La respuesta es correcta.';
                document.getElementById('mensaje').className = 'alert alert-success';
            } else {
                document.getElementById('mensaje').textContent = 'Intenta de nuevo.';
                document.getElementById('mensaje').className = 'alert alert-danger';
            }
        }
    </script>
</body>
    </div>       
    </div>

    <?php
    include "sidenav.php";
    ?>
    <center>
        <a class="btn btn-danger" href="verbos2.php" role="button">Practicar forma diccionario</a>
    </center>
</body>
</html>
