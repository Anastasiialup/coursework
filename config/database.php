<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "finance_app";

try {
    // Підключення до бази даних
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Встановлення режиму помилок PDO на режим винятків
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Вивід повідомлення про помилку, якщо підключення не вдалось
    echo "Помилка підключення до бази даних: " . $e->getMessage();
}