<?php

include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['kode_kategori'])) {
    $kode_kategori = $_POST['kode_kategori'];

    // Menghapus data kategori berdasarkan kode
    $sql = "DELETE FROM kategori WHERE kode='$kode_kategori'";

    if ($conn->query($sql) === TRUE) {
        $response = array('status' => 'success', 'message' => 'Data kategori berhasil dihapus.');
        echo json_encode($response);
    } else {
        $response = array('status' => 'error', 'message' => 'Terjadi kesalahan: ' . $conn->error);
        echo json_encode($response);
    }
}

$conn->close();
?>
