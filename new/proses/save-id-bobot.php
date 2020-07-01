<?php
include "../config/database.php";
//random string
function generateRandomString($length = 6)
{
  return substr(str_shuffle(str_repeat($x = '0123456789', ceil($length / strlen($x)))), 1, $length);
}

$id_bobot = generateRandomString();
$sql = "INSERT INTO `tbl_bobot`  VALUES ('$id_bobot',NULL,NULL, NULL, NULL, NULL, NULL, current_timestamp(), 'PROSES HITUNG', 'INPUT BOBOT')";
$save = mysqli_query($koneksi, $sql);
if ($save) {
  echo "<script>window.location.href='" . $domain . "?page=analisa-kriteria-hitung&id_bobot=$id_bobot';</script>";
} else {
  echo "error";
}
