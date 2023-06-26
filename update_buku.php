<?php

include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['kode'], $_POST['judul'], $_POST['pengarang'], $_POST['penerbit'], $_POST['tahun'], $_POST['harga'])) {
   
    
    $kode = $_POST['kode'];
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];
    $tahun = $_POST['tahun'];
    $harga = $_POST['harga'];

    // Memperbarui data buku berdasarkan kode
    $sql = "UPDATE buku SET judul='$judul', pengarang='$pengarang', penerbit='$penerbit', tahun='$tahun', harga='$harga' WHERE kode='$kode'";

    if ($conn->query($sql) === TRUE) {
        $response = array('status' => 'success', 'message' => 'Data buku berhasil diperbarui.');
        echo json_encode($response);
    } else {
        $response = array('status' => 'error', 'message' => 'Terjadi kesalahan: ' . $conn->error);
        echo json_encode($response);
    }
}

$conn->close();
?>
