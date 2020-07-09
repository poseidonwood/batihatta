<?php
include "../config/database.php";
$id_alter = $_POST['id_alter'];
$nm_alter = $_POST['nm_alter'];

//update alter
$update = mysqli_query($koneksi, "update tbl_alter set nm_alter = '$nm_alter' where id_alter ='$id_alter'");
if ($update) {
  echo "<script>window.location.href='$domain?page=form-alternatif&m=save';</script>";
} else {
  echo "<script>window.location.href='$domain?page=form-alternatif&m=fail';</script>";
}
