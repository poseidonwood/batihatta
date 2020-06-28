<?php
include "../config/database.php";
$id_alternatif = $_POST['id_alternatif'];
$nama_alternatif = $_POST['nama_alternatif'];

$query = mysqli_query($koneksi,"insert into tbl_alternatif values ('id_alternatif','$nama_alternatif','')");
if($query){
	
	echo "<script>window.location.href='".$domain."?page=alternatif&m=save';</script>";
}

