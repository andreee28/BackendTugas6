<?php

include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nomor'])) {
    $nomor = $_POST['nomor'];

    $sql = "SELECT * FROM anggota WHERE nomor='$nomor'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
        echo json_encode($data);
    } else {
        echo "Data anggota tidak ditemukan.";
    }
}

$conn->close();
?>
