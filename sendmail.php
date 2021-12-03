<?php

   // llamado a los campos
   $nombre = $_POST['name'];
   $correo = $_POST['email'];
   $asunto = $_POST['subject'];
   $mensaje = $_POST['msg'];

   // Datos para el correo
   $destinatario = "info@resortelpasogp.com.co";

   // Datos del emisor
   $header = "From: $correo \n";
   $header .= "Reply-To: $correo \n";
   $header .= "X-Mailer: PHP/". phpversion();

   // Enviando mensaje
   $mail = @mail($destinatario, $asunto, $mensaje, $header);

   header("Location: https://resortelpasogp.com.co/");
   exit();

?>