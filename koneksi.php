<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "crud_foto";

$db = mysqli_connect($host,$username,$password);
$open = mysqli_select_db($db,$database);

try {
    $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    // Set mode error PDO ke exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}

?>