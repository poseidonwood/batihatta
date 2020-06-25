<?php
session_start();

$email_session = $_SESSION['email'];
// cek apakah yang mengakses halaman ini sudah login
if ($_SESSION['email'] == "") {
  //kirim ke landing page
  // header("location:../new/home");
  //kirim ke login 
  header("location:../new/pages/auth/?m=denied");
}
