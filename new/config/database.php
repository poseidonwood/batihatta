<?php

$koneksi = mysqli_connect("localhost", "root", "", "batikhatta");

// Check connection
if (mysqli_connect_errno()) {
  echo "Koneksi database gagal : " . mysqli_connect_error();
}


//panggil domain
$sql_domain = mysqli_query($koneksi, "select *from domain where status='Y'");
$fetch_domain = mysqli_fetch_array($sql_domain);
$domain = $fetch_domain['nm_domain'];
