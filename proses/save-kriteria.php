<?php
include "../config/database.php";
$nama_kriteria = $_POST['nm_kriteria'];
//cari id apakah lebih dari 5
$s_cari = mysqli_query($koneksi,"select * from tbl_kriteria where is_null = 'N'");
$rows_cari = mysqli_num_rows($s_cari);
if($rows_cari>=5){
	echo "<script>window.location.href='" . $domain . "?page=kriteria&m=fail-limit';</script>";
}else{

//cari id yang is_null = Y dan isi id yang kosong tersebut 
$s_cari_id = mysqli_query($koneksi,"select * from tbl_kriteria where is_null = 'Y' order by id_kriteria limit 1");
$fetch_id = mysqli_fetch_array($s_cari_id);
$id_kriteria_baru = $fetch_id['id_kriteria'];
// echo "$id_kriteria_baru";
$query = mysqli_query($koneksi, "update tbl_kriteria set nama_kriteria = '$nama_kriteria',is_null='N' where id_kriteria = '$id_kriteria_baru'");
if($query){
	echo "<script>window.location.href='" . $domain . "?page=kriteria&m=save';</script>";
}
}

