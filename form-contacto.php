<?php 
$email = ""; //Agregar email de destino

$nombre = $_POST["inputNombre"];
$email_input = $_POST["inputEmail"];
$asunto = $_POST["inputAsunto"];
$mensaje = $_POST["textareaMensaje"];

$mensaje = $mensaje + "\n \n" + 
            "Información de contacto: \n" + 
            "Nombre: " + $nombre + 
            "\n Email: " + $email_input;

mail($email,$asunto,$mensaje);

?>