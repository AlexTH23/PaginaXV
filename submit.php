
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $date  = $_POST['date'];
    $time  = $_POST['time'];

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'villanuevajovana1@gmail.com'; // tu correo
        $mail->Password   = 'Jojovana0101';     // contraseña de aplicación
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        $mail->setFrom('tu_correo@gmail.com', 'Formulario Web');
        $mail->addAddress('villanuevajovana1@gmail.com', 'Jovana');

        $mail->Subject = 'Reservation Request';
        $mail->Body    = "Name: $name\nEmail: $email\nDate: $date\nTime: $time";

        $mail->send();
        echo "✅ Mensaje enviado correctamente.";
    } catch (Exception $e) {
        echo "❌ Error: {$mail->ErrorInfo}";
    }
}
?>