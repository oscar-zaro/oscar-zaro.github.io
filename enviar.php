<?php
$destino= "ooscarzaro@gmail.com";
$nombre= $_POST["nombre"];
$correo= $_POST["correo"];
$opcional= $_POST["opcional"];
$detalles= $_POST["detalles"];
$contenido ="Nombre: " . $nombre . "\nCorreo: " . $correo . "\nPagina: " .$opcional . "\nDEtalles: " . $detalles;
mail($destino,"Contacto", $contenido);
header("Location:index.html");

 ?>
