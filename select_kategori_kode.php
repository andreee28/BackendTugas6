<?php

include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['kode_kategori'])) {
    $kode_kategori = $_GET['kode_kategori'];

    // Mengambil data kategori berdasarkan kode
    $sql = "SELECT * FROM kategori WHERE kode='$kode_kategori'";
    $result = $conn->query($sql);

    $category = array();
    if ($result->num_rows > 0) {
        $category = $result->fetch_assoc();
    }

    echo json_encode($category);
}

$conn->close();
?>
