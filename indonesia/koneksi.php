<?php  
$koneksi = mysqli_connect("localhost", "root", "1234basdat", "indonesia");

if(mysqli_connect_errno()){
	echo "Koneksi database gagal: " . mysqli_connect_errno();
}
?>
