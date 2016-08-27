<?php
//Importamos las variables del formulario de contacto

@$nombre = addslashes($_POST['first_name']);
@$email = addslashes($_POST['email']);
@$telefono = addslashes($_POST['icon_telephone']);
@$mensaje = addslashes($_POST['textarea1']);



//Preparamos el mensaje de contacto
$cabeceras = "From: $email\n" //La persona que envia el correo
 . "Reply-To: $email\n";
$asunto = "Mensaje desde la pagina Web"; //asunto aparecera en la bandeja del servidor de correo
$email_to = "awce5nk@hotmail.com"; //cambiar por tu email
$contenido = "$nombre ha enviado un mensaje desde splik.mx\n"
. "\n"
. "Nombre: $nombre\n"
. "Email: $email\n"
  "Telefono: $telefono\n"
. "Mensaje: $mensaje\n"
. "\n";
//Enviamos el mensaje y comprobamos el resultado
if (@mail($email_to, $asunto ,$contenido ,$cabeceras )) {

//Si el mensaje se envía muestra una confirmación
die("Gracias, su mensaje se envio correctamente.");
}else{
//Si el mensaje no se envía muestra el mensaje de error
die("Error: Su información no pudo ser enviada, intente más tarde");
}
?>
