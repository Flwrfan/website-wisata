<?php
include 'koneksi.php';

// Memeriksa apakah data yang diperlukan telah dikirim melalui metode POST
if (isset($_POST['id_kategori']) && isset($_POST['nama_kategori'])) {
    // Mengambil data dari input form
    $id_kategori = $_POST['id_kategori'];
    $nama_kategori = $_POST['nama_kategori'];

    // Melakukan update data kategori berdasarkan nomor (no)
    $query = "UPDATE kategori SET nama_kategori = '$nama_kategori' WHERE id_kategori = '$id_kategori'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        // Jika update berhasil, redirect ke halaman kategori.php atau halaman lain yang diinginkan
        header("Location: kategori.php");
        exit();
    } else {
        // Jika update gagal, tampilkan pesan kesalahan
        echo "Gagal mengupdate data menu.";
    }
} else {
    // Jika data yang diperlukan tidak dikirim melalui metode POST, redirect ke halaman kategori.php atau halaman lain yang diinginkan
    header("Location: kategori.php");
    exit();
}
?>
