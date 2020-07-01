<?php
include "../config/database.php";
$id_bobot = $_GET['id_bobot'];
$hapus = mysqli_query($koneksi, "delete from tbl_bobot where id_bobot ='$id_bobot'");
if ($hapus) {
  echo "<script>window.location.href='../?page=analisa-kriteria&m=hapus-sukses';</script>";
} else {
  echo "gagal hapus";
}
