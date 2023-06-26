<?php

include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['kode'], $_POST['kode_kategori'], $_POST['judul'], $_POST['pengarang'], $_POST['penerbit'], $_POST['tahun'], $_POST['harga'])) {
   
    
    $kode = $_POST['kode'];
    $kode_kategori = $_POST['kode_kategori'];
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];
    $tahun = $_POST['tahun'];
    $harga = $_POST['harga'];

    // proses masukkan data ke database (data buku)
    $sql = "INSERT INTO buku (kode, kode_kategori, judul, pengarang, penerbit, tahun, tanggal_input, harga) VALUES ('$kode', '$kode_kategori', '$judul', '$pengarang', '$penerbit', '$tahun', NOW(), '$harga')";

    if ($conn->query($sql) === TRUE) {
        $response = array('status' => 'success', 'message' => 'Data buku berhasil ditambahkan.');
        echo json_encode($response);
    } else {
        $response = array('status' => 'error', 'message' => 'Terjadi kesalahan: ' . $conn->error);
        echo json_encode($response);
    }
}

$conn->close();
?>
