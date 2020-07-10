<?php
include "../config/database.php";
$nama_alternatif = $_POST['nm_alter'];
//cari id apakah lebih dari 5
$s_cari = mysqli_query($koneksi,"select * from tbl_alter where is_null = 'N'");
$rows_cari = mysqli_num_rows($s_cari);
if($rows_cari>=5){
	echo "<script>window.location.href='" . $domain . "?page=form-alternatif&m=fail-limit';</script>";
}else{

//cari id yang is_null = Y dan isi id yang kosong tersebut 
$s_cari_id = mysqli_query($koneksi,"select * from tbl_alter where is_null = 'Y' order by id_alter limit 1");
$fetch_id = mysqli_fetch_array($s_cari_id);
$id_alter_baru = $fetch_id['id_alter'];
// echo "$id_alter_baru";
$query = mysqli_query($koneksi, "update tbl_alter set nm_alter = '$nama_alternatif',is_null='N' where id_alter = '$id_alter_baru'");
if($query){
	echo "<script>window.location.href='" . $domain . "?page=form-alternatif&m=save';</script>";
}
}

