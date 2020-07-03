<?php
session_start();
include "database.php";
if(isset($_SESSION['email'])){
	$email_session = $_SESSION['email'];
// cek apakah yang mengakses halaman ini sudah login
if ($_SESSION['email'] == "") {
  //kirim ke landing page
  // header("location:../new/home");
  //kirim ke login 
echo "<script>window.location.href='" . $domain . "pages/auth/'</script>";
    }

}else{
	echo "<script>window.location.href='" . $domain . "pages/auth/'</script>";

}
