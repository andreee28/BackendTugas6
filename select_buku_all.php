<?php

include 'koneksi.php';

// Mengambil seluruh data buku
$sql = "SELECT * FROM buku";
$result = $conn->query($sql);

$books = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $books[] = $row;
    }
}

echo json_encode($books);

$conn->close();
?>
