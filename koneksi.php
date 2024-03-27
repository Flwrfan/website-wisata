<?php
$servername = "localhost";
$username = "root";
$password = "1234basdat";
$dbs = "indonesia";

// Create connection
$koneksi = mysqli_connect($servername, $username, $password, $dbs);

// Check connection
if ($koneksi) {
} else {
    echo "Server not connected";
}
