<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "xvanos";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = $conn->real_escape_string($_POST['name']);
    $phone   = $conn->real_escape_string($_POST['phone']);
    $email   = $conn->real_escape_string($_POST['email']);
    $message = $conn->real_escape_string($_POST['message']);

    $sql = "INSERT INTO reservas (name, phone, email, message) 
            VALUES ('$name', '$phone', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        // Mostrar alerta SweetAlert
        echo '
        <html>
        <head>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        </head>
        <body>
            <script>
                Swal.fire({
                    icon: "success",
                    title: "¡Reservación guardada!",
                    text: "Tu reservación fue registrada exitosamente.",
                    confirmButtonText: "Aceptar"
                }).then(() => {
                    window.location.href = "reservation.php"; // Redirige de vuelta al formulario
                });
            </script>
        </body>
        </html>';
    } else {
        echo '
        <html>
        <head>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        </head>
        <body>
            <script>
                Swal.fire({
                    icon: "error",
                    title: "Error",
                    text: "Hubo un problema al guardar tu reservación.",
                    confirmButtonText: "Intentar de nuevo"
                }).then(() => {
                    window.history.back(); // Regresa al formulario
                });
            </script>
        </body>
        </html>';
    }
}

$conn->close();
?>