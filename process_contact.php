<?php
$to = "villanuevajovana@gmail.com";
$subject = "Nuevo mensaje desde el formulario de contacto";

$name    = htmlspecialchars($_POST['name']);
$phone   = htmlspecialchars($_POST['phone']);
$email   = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$message = htmlspecialchars($_POST['message']);

if(empty($name) || empty($phone) || empty($email) || empty($message)) {
    header("Location: index.php?error=1");
    exit;
}

$body = "
Has recibido un nuevo mensaje desde tu formulario de contacto:

Nombre: $name
Teléfono: $phone
Correo: $email

Mensaje:
$message
";

$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

if(mail($to, $subject, $body, $headers)) {
    header("Location: index.php?success=1");
} else {
    header("Location: index.php?error=2");
}
exit;
?>