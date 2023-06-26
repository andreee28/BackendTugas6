<?php

include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['kode_kategori'], $_POST['kategori'])) {
   
    
    $kode_kategori = $_POST['kode_kategori'];
    $kategori = $_POST['kategori'];

    // Memperbarui data kategori berdasarkan kode
    $sql = "UPDATE kategori SET kategori='$kategori' WHERE kode='$kode_kategori'";

    if ($conn->query($sql) === TRUE) {
        $response = array('status' => 'success', 'message' => 'Data kategori berhasil diperbarui.');
        echo json_encode($response);
    } else {
        $response = array('status' => 'error', 'message' => 'Terjadi kesalahan: ' . $conn->error);
        echo json_encode($response);
    }
}

$conn->close();
?>
