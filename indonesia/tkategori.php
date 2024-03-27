<?php
include 'koneksi.php';

$id_kategori = $_POST['id_kategori'];
$nama_kategori = $_POST['nama_kategori'];

$stmt = $koneksi->prepare("INSERT INTO kategori (id_kategori, nama_kategori) VALUES (?, ?)");
$stmt->bind_param("ss", $id_kategori, $nama_kategori);

if ($stmt->execute()) {
    header("location: kategori.php");
    exit();
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$koneksi->close();
?>
