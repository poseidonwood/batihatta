<?php
// Panggil koneksi database
require_once "config/database.php";

if (isset($_GET['id_kriteria'])) {

	$id_kriteria = $_GET['id_kriteria'];

	// perintah query untuk menghapus data pada tabel is_siswa
	$query = mysql_query("DELETE FROM kriteria WHERE id_kriteria='$id_kriteria'");

	// cek hasil query
	if ($database->query($query) === TRUE) {
   echo "<script>alert('Data telah berhasil dihapus');window.location = 'index.php;</script>";
		// jika berhasil tampilkan pesan berhasil delete data
		// header('location: index.php?alert=4');
	} else {
		// jika gagal tampilkan pesan kesalahan
		// header('location: index.php?alert=1');
		 echo "Error: " . $sql . "<br>" . $database	->error;
}
	}						
?>