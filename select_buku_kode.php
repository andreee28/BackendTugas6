<?php

include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['kode'])) {
    $kode = $_GET['kode'];

    // ngambil data buku berdasarkan kode
    $sql = "SELECT * FROM buku WHERE kode='$kode'";
    $result = $conn->query($sql);

    $book = array();
    if ($result->num_rows > 0) {
        $book = $result->fetch_assoc();
    }

    echo json_encode($book);
}

$conn->close();
?>
