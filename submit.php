<?php
header("Content-Type: application/json; charset=UTF-8");

$input = file_get_contents("php://input");
$data = json_decode($input, true);

if (
    !isset($data["name"]) ||
    !isset($data["phone"]) ||
    !isset($data["email"]) ||
    !isset($data["message"])
) {
    echo json_encode([
        "status" => "error",
        "message" => "Missing required fields."
    ]);
    exit;
}

// Datos que se envían a tu API
$payload = [
    "name" => $data["name"],
    "phone" => $data["phone"],
    "email" => $data["email"],
    "message" => $data["message"]
];

// URL de tu API de inserción en MongoDB
$apiURL = "https://TU-DOMINIO.com/api/insert.php"; // cambialo por el tuyo

$ch = curl_init($apiURL);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Content-Type: application/json"
]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
curl_close($ch);

echo json_encode([
    "status" => "success",
    "message" => "Data sent successfully.",
    "api_response" => json_decode($response, true)
]);
