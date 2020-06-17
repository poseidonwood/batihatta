<?php
// Panggil koneksi database
require_once "../../config/database.php";

if (isset($_GET['id'])) {

	$id_alternatif = $_GET['id'];

	// perintah query untuk menghapus data pada tabel is_siswa
	$query = mysqli_query($koneksi,"DELETE FROM alternatif WHERE id_alternatif='$id_alternatif'");

	// cek hasil query
	if ($query) {
   echo "<script>alert('Data telah berhasil dihapus');window.location.href='././tampil-data-alter.php';</script>";
		// jika berhasil tampilkan pesan berhasil delete data
		// header('location: index.php?alert=4');
	} else {
		// jika gagal tampilkan pesan kesalahan
		// header('location: index.php?alert=1');
		 echo "Error: " . $sql . "<br>" . $database	->error;
}
	}						
?>