<?php
include 'koneksi.php';



if (isset($_POST['id_artikel']) && isset($_POST['penulis']) && isset($_POST['judul']) && isset($_POST['kategori']) && isset($_POST['deksripsi']) && isset($_POST['file']) && isset($_POST['tanggal_upload'])) {
    $id_artikel = $_POST['id_artikel'];
    $penulis = $_POST['penulis'];
    $judul = $_POST['judul'];
    $kategori = $_POST['kategori'];
    $deskripsi = $_POST['deskripsi'];
    $file = $_POST['file'];
    $tanggal_upload = $_POST['tanggal_upload'];

    $query = "UPDATE artikel SET penulis= '$penulis', judul= '$judul', kategori= '$kategori', deskripsi = '$deskripsi', file = '$file', tanggal_upload = '$tanggal_upload' WHERE id_artikel = '$id_artikel'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        header("Location: artikel.php");
        exit();
    } else {
        echo "Gagal mengupdate data outlet.";
    }
} else {
    header("Location: artikel.php");
    exit();
}
?>
