<?php
include "../config/database.php";
$id_kriteria = $_GET['id_kriteria'];
$hapus = mysqli_query($koneksi, "update tbl_kriteria set nama_kriteria = '',is_null ='Y' where id_kriteria ='$id_kriteria'");
if ($hapus) {
  echo "<script>window.location.href='../?page=kriteria&m=hapus-sukses';</script>";
} else {
  echo "gagal hapus";
}
