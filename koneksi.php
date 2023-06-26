<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "tokobuku"; 

$conn = new mysqli($servername, $username, $password, $database);

// mastikan konek berhasil atau ga
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
