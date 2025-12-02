<?php
$host = "localhost";   // Servidor
$user = "root";        // Usuario de MySQL
$pass = "";            // Contraseña de MySQL
$db   = "xvanos";      // Nombre de la base de datos

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("❌ Error de conexión: " . $e->getMessage());
}
?>