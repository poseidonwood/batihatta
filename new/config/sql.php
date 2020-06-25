<?php


function judul()
{
  include "database.php";
  $sql_judul = mysqli_query($koneksi, "select *from domain where status='Y'");
  $fetch_judul = mysqli_fetch_array($sql_judul);
  $judul = $fetch_judul['title'];
  echo $judul;
}

function domain()
{
  include "database.php";
  $sql_domain = mysqli_query($koneksi, "select *from domain where status='Y'");
  $fetch_domain = mysqli_fetch_array($sql_domain);
  $domain = $fetch_domain['nm_domain'];
  echo $domain;
}
