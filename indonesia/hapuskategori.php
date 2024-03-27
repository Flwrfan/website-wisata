<?php
include 'koneksi.php';

// Memeriksa apakah data 'no' telah dikirim melalui metode POST
if(isset($_POST['id_kategori'])) {
    $id_kategori = $_POST['id_kategori'];

    // Menghapus data menu dari database berdasarkan 'no'
    $query = "DELETE FROM kategori WHERE id_kategori = '$id_kategori'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        // Jika penghapusan berhasil, redirect ke halaman menu atau tampilan lainnya
        header("Location: kategori.php");
        exit();
    } else {
        // Jika terjadi kesalahan, tampilkan pesan error
        echo "Error: " . mysqli_error($koneksi);
    }
} else {
    // Jika 'no' tidak ada, redirect ke halaman menu atau tampilan lainnya
    header("Location: kategori.php");
    exit();
}
?>
