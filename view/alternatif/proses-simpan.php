<?php
// Panggil koneksi database
require_once "../../config/database.php";

if (isset($_POST['simpan'])) {
	$id_alternatif          = mysql_real_escape_string(trim($_POST['id_alternatif']));
	$nama_alternatif          = mysql_real_escape_string(trim($_POST['nama_alternatif']));

	// perintah query untuk menyimpan data ke tabel batikhatta
	$query = mysql_query("INSERT INTO alternatif(	id_alternatif,
											 	nama_alternatif)	
										VALUES(	'$id_alternatif',
												'$nama_alternatif')");		

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