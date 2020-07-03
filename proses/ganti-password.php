<?php
session_start();
include "../config/database.php";
$old = md5($_POST['old']);
$new = md5($_POST['new']);
$email = $_SESSION['email'];

//cari data user di db 
$s_user = mysqli_query($koneksi, "select *from user where email='$email'");
$rows = mysqli_num_rows($s_user);
if ($rows > 0) {
  //cek password 
  $fetch_pass = mysqli_fetch_array($s_user);
  $pass = $fetch_pass['password'];
  if ($old == $pass) {
    //update password baru
    $update = mysqli_query($koneksi, "update user set password='$new' where email='$email' ");
    if ($update) {
      echo "<script>window.location.href='$domain?m=ganti-sukses';</script>";
    }
  } else {
    echo "<script>window.location.href='$domain?m=password-salah';</script>";
  }
} else {
  echo "<script>window.location.href='$domain?m=ganti-gagal';</script>";
}
