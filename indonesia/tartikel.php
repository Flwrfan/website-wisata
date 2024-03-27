<?php
include 'koneksi.php';

$id_artikel = $_POST['id_artikel'];
$penulis = $_POST['penulis'];
$judul = $_POST['judul'];
$kategori = $_POST['kategori'];
$deskripsi = $_POST['deskripsi'];
$tanggal_upload = $_POST['tanggal_upload'];

// Memeriksa apakah file gambar telah diunggah
if(isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
    $file = $_FILES['file']['name']; // Mengambil nama file gambar

    // Menentukan direktori tujuan untuk menyimpan file gambar
    $targetDir = "gambar/"; // Ganti dengan direktori tujuan sesuai kebutuhan
    $targetFile = $targetDir . basename($_FILES["file"]["name"]);

    // Memindahkan file gambar ke direktori tujuan
    if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
        // File gambar berhasil diunggah, simpan jalur file dalam database
        $stmt = $koneksi->prepare("INSERT INTO artikel (id_artikel, penulis, judul, kategori, deskripsi, file, tanggal_upload) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssss", $id_artikel, $penulis, $judul, $kategori, $deskripsi, $targetFile, $tanggal_upload);

        if ($stmt->execute()) {
            header("location: artikel.php");
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Error in uploading file.";
    }
} else {
    echo "No file uploaded.";
}

$koneksi->close();
?>

