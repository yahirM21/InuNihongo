<?php
include "../connection.php";
include "Header.php";
?>
    <div class="container mt-3">  
      <center><h1><font color="green"><b>Sistema de escritura, pronunciación y lectura</b></font></h1></center>
      <p class="justificado">El japonés cuenta varios sistemas de escritura pero los 3 principales son el <font color="red">hiragana</font>, <font color="blue">katakana</font> y kanji.</p>
      <p><ruby><font color="blue">ペット</font><rt><font color="blue">Petto</font></rt><font color="red">が</font><rt><font color="red">ga</font></rt>欲<font color="red">しい</font><rt>ho<font color="red">shii</font></rt><font color="red">です。</font><rt><font color="red">desu.</font></rt></ruby> <font color="blue">Quiero una mascota.</font></p>
      <audio controls>
        <source src="aud/ぺっとがほしいです.ogg" type="audio/ogg">
        <source src="aud/ぺっとがほしいです.mp3" type="audio/mpeg"> <!--audio3 / cambiar el nombre del archivo al mostrado en source --> 
        Tu navegador no soporta los audios.
      </audio>
      <p class="justificado">La ventaja que tenemos como hispanohablantes es que el japonés se asemeja muchísimo al español, por ejemplo las vocales son la “<font color="red">a</font>”, “<font color="red">i</font>”, “<font color="red">u</font>”, “<font color="red">e</font>”, “<font color="red">o</font>” casi siempre se pronunciaran de la misma manera, existen algunas excepciones donde no sera asi como el caso de una vocal “<font color="red">u</font>” seguida de una “<font color="red">o</font>” se leerá como “<font color="red">oo</font>” también escrita como “<font color="red">ō</font>” o como es el caso de las vocales “<font color="red">e</font>” e “<font color="red">i</font>” seguidas que se leen como "<font color="red">ee</font>".</p>
      <p>Por ejemplo:</p>
      <table class="table table-bordered">
          <thead>
            <tr>
              <th>Palabra</th>
              <th>Escritura</th>
              <th>Pronunciación</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><p><ruby>先生<rt>せん<font color="red">せい</font></rt></ruby></p></td>
              <td><p>Sens<font color="red">ei</font></p></td>
              <td><p>Sens<font color="red">ee</font></p></td>
            </tr>
            <tr>
              <td><p><ruby>学校<rt>がっ<font color="red">こう</font></rt></ruby></p></td>
              <td><p>Gakk<font color="red">ou</font></p></td>
              <td><p>Gakk<font color="red">oo</font></p></td>
            </tr>
          </tbody>
        </table>
      <p class="justificado">Algunas consonantes son diferentes como la “<font color="red">h</font>” que se asemeja más a nuestro sonido de la “<font color="red">j</font>”.</p>
      <p class="justificado">El japonés cuenta con algo llamado moras, estas sirven para ir marcando el ritmo del idioma y cada una representa el sonido de una letra de japonés.</p>          
      <p>Por ejemplo:</p>
      <p><font color="red"><ruby>あ<rt>a</rt>-き<rt>ki</rt>-た<rt>ta</rt>-い<rt>i</rt>-ぬ<rt>nu</rt></ruby>　A-KI-TA-I-NU</font></p>
      <p class="justificado">Este sistema es importante para poder saber el ritmo y la pronunciación de las palabras ya que el japonés cuenta con dos tonos, uno bajo y otro alto que puede llegar a cambiar el significado de las palabras en algunos casos.</p>
      <p class="justificado">El primero significa puente, su pronunciación empieza con el sonido bajo y luego sube,  a diferencia del segundo que es palillos chinos donde el primer sonido empieza alto y luego baja. Si bien no es necesario aprender todas las pronunciaciones ya que el contexto nos ayudará entender a qué nos referimos, usar el tono correcto hará que nos comuniquemos de mejor manera.</p>
      <ul class="pager">
        <li class="previous"><a href="Introduccion.php">Anterior</a></li>
        <li class="next"><a href="../hiragana/introduccionhiragana.php">Siguiente(hiragana)</a></li>
      </ul>      
        </div>        
    </body>
</html>