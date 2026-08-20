<?php
header("Content-Type: application/json");

$foods = [
    ["id" => 1, "name" => "Chicken Burger", "price" => 1200],
    ["id" => 2, "name" => "Chicken Pizza", "price" => 1800],
    ["id" => 3, "name" => "Pasta", "price" => 1400]
];

echo json_encode($foods);
?>
