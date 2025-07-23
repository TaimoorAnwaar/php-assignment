<?php

// DB info
$host = 'localhost';
$dbname = 'pdo';
$user = 'root';
$pass = '';

// DSN = Data Source Name
$dsn = "mysql:host=$host;dbname=$dbname";

try {
    // Connect using PDO
    $pdo = new PDO($dsn, $user, $pass);

    echo "Database connected with pdo";

} catch (PDOException $e) {
    echo " Connection error: " . $e->getMessage();
}
