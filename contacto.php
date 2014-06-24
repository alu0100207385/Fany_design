<?php
//Importamos las variables del formulario de contacto
@$nombre = addslashes($_POST['nombre']);
@$email = addslashes($_POST['email']);
@$mensaje = addslashes($_POST['mensaje']);

//Preparamos el mensaje de contacto
$cabeceras = "From: $email\n" //La persona que envia el correo
 . "Reply-To: $email\n";
$asunto = "Mensaje desde la pagina Web";
// $email_to = "socasgaspar@gmail.com";
$email_to = "fanidesign@hotmail.com";
$contenido = "$nombre ha enviado un mensaje desde la web http://fanidesign.comxa.com/fanidesign.html\n"
. "\n"
. "Nombre: $nombre\n"
. "Email: $email\n"
. "Mensaje: $mensaje\n"
. "\n";
//Enviamos el mensaje y comprobamos el resultado
if (@mail($email_to, $asunto ,$contenido ,$cabeceras )) {
//Si el mensaje se envía muestra una confirmación
// die("Gracias, su mensaje se envio correctamente.");
return true;
}else{
//Si el mensaje no se envía muestra el mensaje de error
// die("Error: Su información no pudo ser enviada, inténtelo más tarde");
return false;
}
?>