<?php
// Conexión segura con PDO
$dsn = "mysql:host=localhost;dbname=mi_sitio;charset=utf8mb4";
$user = "root"; // tu usuario
$pass = "";     // tu contraseña

try {
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

    // Recibir datos del formulario
    $nombre = $_POST['name'] ?? null;
    $comentario = $_POST['comentario'] ?? '';
    $anonimo = isset($_POST['anonimo']) ? 1 : 0;

    // Si es anónimo, el nombre se guarda como NULL
    if ($anonimo) {
        $nombre = null;
    }

    // Insertar en la tabla
    $stmt = $pdo->prepare("INSERT INTO testimonios (nombre, comentario, anonimo) VALUES (?, ?, ?)");
    $stmt->execute([$nombre, $comentario, $anonimo]);

    // Redirigir con mensaje de éxito
    header("Location: index.php?mensaje=ok");
    exit;

} catch (PDOException $e) {
    echo "Error en la conexión o inserción: " . $e->getMessage();
}
?>