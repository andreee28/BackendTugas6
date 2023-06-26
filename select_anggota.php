<?php

include 'koneksi.php';

$sql = "SELECT * FROM anggota";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $data = array();
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    echo json_encode($data);
} else {
    echo "Data anggota tidak ditemukan.";
}

$conn->close();
?>
