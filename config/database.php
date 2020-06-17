<?php
// deklarasi parameter koneksi database
$server   = "localhost";
$username = "root";
$password = "";
// $database = "batikhatta";
$database = "batikhatta";
// Koneksi dan memilih database di server
$koneksi = mysqli_connect($server, $username, "", $database);

// Check connection
if (mysqli_connect_errno()) {
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
