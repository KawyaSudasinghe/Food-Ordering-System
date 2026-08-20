<?php
header("Content-Type: application/json");

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    echo json_encode(["success" => false, "message" => "POST request required"]);
    exit;
}

$data = json_decode(file_get_contents("php://input"), true);

if (!$data) {
    echo json_encode(["success" => false, "message" => "Invalid order data"]);
    exit;
}

echo json_encode([
    "success" => true,
    "message" => "Order received successfully",
    "order" => $data
]);
?>
