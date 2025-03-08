<?php
$dsn = 'mysql:host=mysql;dbname=app_db;charset=utf8mb4';
$username = 'root';
$password = 'root';

try {
    $pdo = new PDO($dsn, $username, $password);
    echo "MySQL connection successful!";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}