<?php
include "../connection.php";
include "Header.php";
?>
  <center><h1><font color="green"><b>Introducción al japonés</b></font></h1></center>
  <div class="container mt-3">
    <p class="justificado"><ruby><font color="red">犬日本語の世界ようこそへ</font><rt>Inu Nihongo no sekai youkoso e</rt></ruby> Bienvenido al mundo de InuNihongo, en esta breve introducción aprenderás las bases necesarias para poder empezar a aprender japonés.</p> 
      <p class="justificado"> La gramática del idioma japonés es diferente a la del español, el orden de las oraciones en japonés se compone de sujeto - objeto - verbo.</p>
      <p>Por ejemplo:</p>        
      <table>
          <tr>
            <td><center><p><ruby><font color="red">いぬは</font><rt>Inu wa</rt></ruby></p></center></td>
            <td><center><p><ruby><font color="red">こうえんに</font><rt>kouen ni</rt></ruby></p></center></td>
            <td><center><p><ruby><font color="red">いきます。</font><rt>ikimasu.</rt></ruby></p></center></td>
          </tr>
          <tr>
            <td><center><font color="blue">Perro</font></center></td>
            <td><center><font color="blue">parque</font></center></td>
            <td><center><font color="blue">ir</font></center></td>
          </tr>
          <tr>
            <td colspan="2"><p>El perro va al parque.</p></td>
          </tr>
          </table>
          <audio controls>
            <source src="aud/犬は公園に行きます.ogg" type="audio/ogg">
            <source src="aud/犬は公園に行きます.mp3" type="audio/mpeg"> <!--audio1 / cambiar el nombre del archivo al mostrado en source --> 
            Tu navegador no soporta los audios.
          </audio>
          <p class="justificado">El japonés tiene una particularidad muy curiosa ya que es un idioma aglutinante, que quiere decir esto, una palabra puede llevar consigo misma atributos como el tiempo, positividad o negatividad, entre otras cosas. Además algo que caracteriza mucho al japonés es que a diferencia del español que cuenta con pasado, presente y futuro el japonés solo cuenta con pasado y no pasado.</p>         
          <table class="table table-bordered">
            <thead>
              <tr>
                <th></th>
                <th><p>Pasado</p></th>
                <th><p>No pasado</p></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th><p>Afirmativo</p></th>
                <td><p><ruby>よみ<font color="red">ました</font><rt>Yomi<font color="red">mashita</font></rt></ruby> <font color="blue">Leí</font></p></td>
                <td><p><ruby>よみ<font color="red">ます</font><rt>Yomi<font color="red">masu</font></rt></ruby> <font color="blue">Leo</font></p></td>
              </tr>
              <tr>
                <th><p>Negativo</p></th>
                <td><p><ruby>よみ<font color="red">ませんでした</font><rt>Yomi<font color="red">masendeshita</font></rt></ruby> <font color="blue">No leí</font></p></td>
                <td><p><ruby>よみ<font color="red">ません</font><rt>Yomi<font color="red">masen</font></rt></ruby> <font color="blue">No leo</font></p></td>
              </tr>
            </tbody>
          </table>
          <p class="justificado">Los géneros gramaticales y el plural no existe como tal en el japonés, por ejemplo, si queremos decir gato, gata, gatos, gatas en todos los casos se utiliza la misma palabra <ruby><font color="red">ねこ</font><rt>neko</rt></ruby>. Existen sufijos que funcionan para expresar el plural y también prefijos para indicar el género. Además los verbos no se ven afectados por el género ni por la cantidad del sustantivo.</p>
          <p>Ejemplos:</p>
          <table>
              <tr>
                <td><p><ruby>子供<rt>Kodomo</rt></ruby> <font color="blue">Infante</font></p></td>
              </tr>
              <tr>
                <td><p><ruby>子供<font color="red">たち</font><rt>Kodomo<font color="red">tachi</font></rt></ruby> <font color="blue">Infantes</font></p></td>
              </tr>
              <tr>
                  <td><p><ruby><font color="red">女の</font>子<rt><font color="red">Onna no</font> ko</rt></ruby> <font color="blue">Niña</font></p></td>    
              </tr>
              <tr>
                  <td><p><ruby><font color="red">男の</font>子<rt><font color="red">Otoko no</font> ko</rt></ruby> <font color="blue">Niño</font></p></td>
              </tr>
          </table>
          <p class="justificado">Las partículas serán nuestras amigas en el japonés ya que estas nos ayudaran a saber en qué posición gramatical se encuentra el sustantivo y a diferenciar una palabra de otras ya que no existen los espacios a la hora de escribir.</p>
          <table>
              <tr>
                <td><center><p><ruby>私<font color="red">は</font><rt>Watashi<font color="red"> wa</font></rt></ruby></p></center></td>
                <td><center><p><ruby>犬日本語<font color="red">で</font><rt>Inu Nihongo<font color="red"> de</font> </rt></ruby></p></center></td>
                <td><center><p><ruby>日本語<font color="red">を</font><rt>nihongo<font color="red"> o</font> </rt></ruby></p></center></td>
                <td><center><p><ruby>勉強したいです。<rt>benkyoushitai desu.</rt></ruby></p></center></td>
              </tr>
              <tr>
                <td><center><font color="blue">Yo</font></center></td>
                <td><center><font color="blue">en Inu Nihongo</font></center></td>
                <td><center><font color="blue">japonés</font></center></td>
                <td><center><font color="blue">quiero estudiar</font></center></td>
              </tr>
          </table>
          <p>Yo quiero estudiar japonés en Inu Nihongo.</p>
          <audio controls>
            <source src="aud/私は犬日本語で日本語を勉強したいです.ogg" type="audio/ogg">
            <source src="aud/私は犬日本語で日本語を勉強したいです.mp3" type="audio/mpeg"> <!--audio2 / cambiar el nombre del archivo al mostrado en source --> 
            Tu navegador no soporta los audios.
          </audio>
          <p class="justificado">En este ejemplo la primera partícula marcada en rojo marca el sujeto, en este caso nosotros, la segunda partícula el lugar donde se realiza la acción y la tercera el complemento del verbo que será realizado.</p>
          <ul class="pager">
            <li class="next"><a href="introduccion2.php">Siguiente</a></li>
          </ul>
    </div>        
    </body>
</html>