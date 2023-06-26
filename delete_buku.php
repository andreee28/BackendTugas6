<?php

include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['kode'])) {
    $kode = $_POST['kode'];

    // Menghapus data buku berdasarkan kode
    $sql = "DELETE FROM buku WHERE kode='$kode'";

    if ($conn->query($sql) === TRUE) {
        $response = array('status' => 'success', 'message' => 'Data buku berhasil dihapus.');
        echo json_encode($response);
    } else {
        $response = array('status' => 'error', 'message' => 'Terjadi kesalahan: ' . $conn->error);
        echo json_encode($response);
    }
}

$conn->close();
?>
