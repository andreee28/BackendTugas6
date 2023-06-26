<?php

include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['kode_kategori'], $_POST['kategori'])) {
    
    
    $kode_kategori = $_POST['kode_kategori'];
    $kategori = $_POST['kategori'];

    // data kategori ke databse
    $sql = "INSERT INTO kategori (kode, kategori) VALUES ('$kode_kategori', '$kategori')";

    if ($conn->query($sql) === TRUE) {
        $response = array('status' => 'success', 'message' => 'Data kategori berhasil ditambahkan.');
        echo json_encode($response);
    } else {
        $response = array('status' => 'error', 'message' => 'Terjadi kesalahan: ' . $conn->error);
        echo json_encode($response);
    }
}

$conn->close();
?>
