<?php
include "../config/database.php";
$id_alter = $_GET['id_alter'];
$hapus = mysqli_query($koneksi, "update tbl_alter set nm_alter = '',is_null ='Y' where id_alter ='$id_alter'");
if ($hapus) {
  echo "<script>window.location.href='../?page=form-alternatif&m=hapus-sukses';</script>";
} else {
  echo "gagal hapus";
}
