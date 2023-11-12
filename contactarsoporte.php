
<?php
include "connection.php";
include "header2.php";
?>
  
  <div class="container">
    <br><h2><b>Contactar a soporte</h2><br></b>
    <p >Hola! en Inu Nihongo nos esforzamos por ayudar a todos nuestros usuarios, si deseas contactarnos para resolver alguna problematica, duda, o dar una
      sugerencia, utiliza el siguiente formulario y uno de nuestros colaboradores se pondra en contacto contigo lo mas pronto posible.</p><br>
  
    <form action="procesar_soporte.php" method="post">
      <div class="form-group">
        <label for="username"><p>Nombre de Usuario:</p></label>
        <input type="text" style="font-size: 20px;" class="form-control" value="<?php echo $_SESSION['username']; ?>" id="username" name="username" required readonly>
      </div>
      <div class="form-group">
        <label for="email"><p>Correo electrónico al que desees ser contactado:</p></label>
        <input type="email" value = ""  style="font-size: 20px;" class="form-control" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="message"><p>Mensaje sobre problemática, duda o sugerencia (máx. 250 caracteres):</p></label>
        <textarea class="form-control" style="font-size: 18px;" id="message" name="message" maxlength="250" rows="4" required></textarea>
      </div>
      <button type="submit" class="btn btn-danger btn-lg" name = "send">Enviar</button>  
    </form>
  </div>
</body>

</html>

