<?php
include('koneksi.php');
if (isset($_GET['id'])) {
    $query = mysqli_query($koneksi, "SELECT * FROM artikel WHERE id_artikel='" . $_GET['id'] . "'");
    $row = mysqli_fetch_array($query);
    $imagePath = 'indonesia/' . $row["file"]; 
    
    if (!empty($imagePath) && file_exists($imagePath)) {
        $imageInfo = getimagesize($imagePath);
        if ($imageInfo && isset($imageInfo['mime'])) {
            header('Content-Type: ' . $imageInfo['mime']);
        }
        readfile($imagePath);
    } else {
        echo "Gambar tidak tersedia";
    }
} else {
    header('location:blog.php');
}
?>