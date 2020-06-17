<?php
include "../../config/database.php";
date_default_timezone_set("Asia/Jakarta");
$id_total = date("Y-m-d H:i:s");
$total_1 = round($_GET['total_1'], 3);
$total_2 = round($_GET['total_2'], 3);
$total_3 = round($_GET['total_3'], 3);
$total_4 = round($_GET['total_4'], 3);
$total_5 = round($_GET['total_5'], 3);
$save = mysqli_query($koneksi, "insert into tb_total values('$id_total','$total_1','$total_2','$total_3','$total_4','$total_5')");
if ($save) {
  echo "<script>alert('Berhasil')</script>";
} else {
  echo "<script>alert('$id_total,$total_1,$total_2,$total_3,$total_4,$total_5')</script>";
}
