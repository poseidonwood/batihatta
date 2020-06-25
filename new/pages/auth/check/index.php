<?php
session_start();
include "../../../config/database.php";
$email = $_POST['email'];
$password = md5($_POST['password']);

$sql_cek = mysqli_query($koneksi, "select *from user where email='$email' and password='$password' and status='Y'");
$fetch_cek = mysqli_num_rows($sql_cek);

if ($fetch_cek > 0) {
  $fetch_array = mysqli_fetch_assoc($sql_cek);
  $email_tb = $fetch_array['email'];
  $nama_tb = $fetch_array['nama'];
  //ambil email

  $_SESSION['email'] = $email_tb;
  $_SESSION['nama'] = $nama_tb;
  // echo $_SESSION['email'];
  header("location:$domain?m=success");
} else {
  header("location:../?m=fail");
}



// echo "<script>alert('$email dan $password');</script>";
