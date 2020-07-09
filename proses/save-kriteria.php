<?php
include "../config/database.php";
$nm_kriteria = $_POST['nm_kriteria'];

$query = mysqli_query($koneksi, "insert into tbl_kriteria values ('','$nm_kriteria')");
if ($query) {
	echo "<script>window.location.href='" . $domain . "?page=kriteria&m=save';</script>";
}
