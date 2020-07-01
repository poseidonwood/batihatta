<?php
include "../config/database.php";
//random string
function generateRandomString($length = 6)
{
	return substr(str_shuffle(str_repeat($x = '0123456789', ceil($length / strlen($x)))), 1, $length);
}
$id_alternatif = generateRandomString();
$nama_alternatif = $_POST['nm_alter'];

$query = mysqli_query($koneksi, "insert into tbl_alter values ('$id_alternatif','$nama_alternatif')");
if ($query) {

	echo "<script>window.location.href='" . $domain . "?page=form-alternatif&m=save';</script>";
}
