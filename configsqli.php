<?php


$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'pdo';


$conn = mysqli_connect($host, $user, $pass, $dbname);


if (!$conn) {
    die(" Connection failed: " );
}

echo "Connected to database with MySQLi";
