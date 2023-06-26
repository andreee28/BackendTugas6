<?php

include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nomor = $_POST['nomor'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $tanggal_terdaftar = $_POST['tanggal_terdaftar'];

    // Mengupdate data anggota berdasarkan nomor
    $sql = "UPDATE anggota
            SET nama='$nama', jenis_kelamin='$jenis_kelamin', alamat='$alamat', no_hp='$no_hp', tanggal_terdaftar='$tanggal_terdaftar'
            WHERE nomor='$nomor'";

    if ($conn->query($sql) === TRUE) {
        $response = array('status' => 'success', 'message' => 'Data anggota berhasil diperbarui.');
        echo json_encode($response);
    } else {
        $response = array('status' => 'error', 'message' => 'Terjadi kesalahan: ' . $conn->error);
        echo json_encode($response);
    }
}

$conn->close();
?>
