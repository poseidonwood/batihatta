<?php
include "../config/database.php";
$nama_alternatif = $_POST['nama_alternatif'];

$query = mysqli_query($koneksi,"insert into tbl_alternatif values ('','$nama_alternatif','')");
if($query){
	
	echo "<script>window.location.href='".$domain."?page=alternatif&m=save';</script>";
}

