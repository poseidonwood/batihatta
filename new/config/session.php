<?php
session_start();

$email_session = $_SESSION['email'];
// cek apakah yang mengakses halaman ini sudah login
if ($_SESSION['email'] == "") {
  header("location:../new/home");
}
