<?php

include "connection.php";
include "header2.php";


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["send"])) {

    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'villasenor.jose@uabc.edu.mx';
    $mail->Password = 'oaqxiabirwgrvmiy    ';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('villasenor.jose@uabc.edu.mx');

    $mail->addAddress('villasenor.jose@uabc.edu.mx');

    $mail->isHTML(true);

    $mail->Subject = 'Solicitud de soporte - Inu Nihongo' . ' - ' . $_POST["username"];
    $mail->Body = 'Usuario: '. $_POST["username"] . ' - Correo electronico de contacto: '. $_POST["email"] . ' - Mensaje: ' . $_POST["message"];

    $mail->send();

    echo
    "
    <script>
    alert('Tu correo se envio correctamente');
    document.location.hred = 'contactarsoporte.php';
    </script>
    ";

}


?>


<div class="container mt-3"><br>  
        <h1>Gracias por contactar al soporte de Inu Nihongo!</h1><br>
        <p style="text-align: justify;  margin-top: 10px;">Hemos recibido su solicitud, nuestro equipo de expertos está revisando su mensaje y se pondrá en contacto con usted lo más pronto posible. Entendemos la importancia de su consulta y estamos comprometidos a brindarle la mejor asistencia.</p><br>

        <p>Tiempo de espera estimado:<b> 12 </b> a <b>48 </b>horas</p></div>