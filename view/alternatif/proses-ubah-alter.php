<?php
// Panggil koneksi database
require_once "config/database.php";

if (isset($_POST['simpan'])) {
	if (isset($_POST['id_alternatif'])) {
		$id_alternatif         = mysql_real_escape_string(trim($_POST['id_alternatif']));
		$nama_alternatif         = mysql_real_escape_string(trim($_POST['nama_alternatif']));

		// perintah query untuk mengubah data pada tabel kriteria
		$query = mysql_query("UPDATE alternatif SET nama_alternatif 		= '$nama_alternatif'
										    WHERE id_alternatif 			= '$id_alternatif'");		

		// cek query
		if ($query) {
			// jika berhasil tampilkan pesan berhasil update data
			header('location: index.php?alert=3');
		} else {
			// jika gagal tampilkan pesan kesalahan
			header('location: index.php?alert=1');
		}				
	}
}		
?>