<?php

include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nomor'])) {
    $nomor = $_POST['nomor'];

    // Menghapus data anggota berdasarkan nomor
    $sql = "DELETE FROM anggota WHERE nomor='$nomor'";

    if ($conn->query($sql) === TRUE) {
        $response = array('status' => 'success', 'message' => 'Data anggota berhasil dihapus.');
        echo json_encode($response);
    } else {
        $response = array('status' => 'error', 'message' => 'Terjadi kesalahan: ' . $conn->error);
        echo json_encode($response);
    }
}

$conn->close();
?>
