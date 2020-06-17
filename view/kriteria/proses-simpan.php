<?php
// Panggil koneksi database
require_once "../../config/database.php";

if (isset($_POST['simpan'])) {
	$id_kriteria          = mysql_real_escape_string(trim($_POST['id_kriteria']));
	$nama_kriteria          = mysql_real_escape_string(trim($_POST['nama_kriteria']));

	// perintah query untuk menyimpan data ke tabel batikhatta
	$query = mysql_query("INSERT INTO kriteria(	id_kriteria,
											 	nama_kriteria)	
										VALUES(	'$id_kriteria',
												'$nama_kriteria')");		

	// cek hasil query
	if ($query) {
		// jika berhasil tampilkan pesan berhasil insert data
		header('location: index.php?alert=2');
	} else {
		// jika gagal tampilkan pesan kesalahan
		header('location: index.php?alert=1');
	}						
}
?>