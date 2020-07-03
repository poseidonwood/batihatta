<?php
include "../config/database.php";
$id_kriteria = $_POST['id_kriteria'];
$nm_kriteria = $_POST['nm_kriteria'];

//update kriteria
$update = mysqli_query($koneksi, "update tbl_kriteria set nm_kriteria = '$nm_kriteria' where id_kriteria ='$id_kriteria'");
if ($update) {
  echo "<script>window.location.href='$domain?page=kriteria&m=save';</script>";
} else {
  echo "<script>window.location.href='$domain?page=kriteria&m=fail';</script>";
}
