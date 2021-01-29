<?php
$destinatario = 'm4huens@gmail.com'

$name = $_POST['name'];
$lastName = $_POST['lastName'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$header = "send from te page"

$completeMessage = $message . $name . $lastName . $phone

mail($destinatario, $completeMessage, $header);
echo "<script>alert('correo enviado exitosamente')</script>";

?>
