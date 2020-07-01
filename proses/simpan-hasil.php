<?php
include "../config/database.php";
//random string
function generateRandomString($length = 6)
{
  return substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length / strlen($x)))), 1, $length);
}

$id_total = generateRandomString();
date_default_timezone_set("Asia/Jakarta");
$id_bobot = $_GET['id_bobot'];
$created_time = date("Y-m-d H:i:s");
$total_1 = round($_GET['total_1'], 3);
$total_2 = round($_GET['total_2'], 3);
$total_3 = round($_GET['total_3'], 3);
$total_4 = round($_GET['total_4'], 3);
$total_5 = round($_GET['total_5'], 3);
$bobot = round($_GET['bobot'], 3);
$bobot2 = round($_GET['bobot2'], 3);
$bobot3 = round($_GET['bobot3'], 3);
$bobot4 = round($_GET['bobot4'], 3);
$bobot5 = round($_GET['bobot5'], 3);
// echo generateRandomString();
$save = mysqli_query($koneksi, "insert into tb_total values('$id_total','$total_1','$total_2','$total_3','$total_4','$total_5','$created_time')");
if ($save) {
  //update bobot ke tbl_bobot
  $update_statushitung = mysqli_query($koneksi, "update tbl_bobot set status_bobot='HITUNG ALTERNATIF', id_total='$id_total',bobot='$bobot',bobot2='$bobot2',bobot3='$bobot3',bobot4='$bobot4',bobot5='$bobot5' where id_bobot='$id_bobot'");
  if ($update_statushitung) {
    echo "<script>alert('UPDATE SUKSES')</script>";
  } else {
    echo "<script>alert('GAGAL UPDATE')</script>";
  }
} else {
  echo "<script>alert('$id_total,$total_1,$total_2,$total_3,$total_4,$total_5')</script>";
}
