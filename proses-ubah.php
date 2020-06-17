<?php
// Panggil koneksi database
require_once "config/database.php";

if (isset($_POST['simpan'])) {
	if (isset($_POST['id_kriteria'])) {
		$id_kriteria         = mysql_real_escape_string(trim($_POST['id_kriteria']));
		$nama_kriteria         = mysql_real_escape_string(trim($_POST['nama_kriteria']));

		// perintah query untuk mengubah data pada tabel kriteria
		$query = mysql_query("UPDATE kriteria SET nama_kriteria 		= '$nama_kriteria'
										    WHERE id_kriteria 			= '$id_kriteria'");		

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