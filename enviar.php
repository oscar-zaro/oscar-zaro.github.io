<?php
include("PHPMailer/PHPMailer.php");
include("PHPMailer/SMTP.php");
include("PHPMailer/Exception.php");

$mail = new PHPMailer\PHPMailer\PHPMailer();

try {

$subject = $_POST["correo"];
$bodyEmail = $_POST["detalles"];

  $fromemail = "ooscarzaro@gmail.com";
  $fromname = "zaro web";
  $host = "smtp.live.com";
  $port = "587";
  $SMTPAuth = "login";
  $SMTPSecure = "tls";
  $password = "oscarzaro1922";

  $mail->isSMTP();

  $mail->SMTPDebug = 0;
  $mail->Host = $host;
  $mail->Port = $port;
  $mail->SMTPAuth = $SMTPAuth;
  $mail->SMTPSecure = $SMTPSecure;
  $mail->Username = $fromemail;
  $mail->Password = $password;

  $mail->setFrom($fromemail, $fromname);

  $mail->addAddress("ooscarzaro@gmail.com")

  $mail->isHTML(True);
  $mail->Subject = $subject;

  $mail->Body = $bodyEmail;

  if (!$mail->send()) {
    error_log("No se pudo enviar");
  }
  echo "Correo enviado pronto recibiras la respuesta.";
} catch (\Exception $e) {

}


 ?>
