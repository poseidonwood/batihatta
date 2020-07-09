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

function analisa_kriteria()
{
  include "database.php";
  $sql_analisa = mysqli_query($koneksi, "select count(*) as total from tbl_bobot");
  $fetch_analisa = mysqli_fetch_array($sql_analisa);
  $total = $fetch_analisa['total'];
  echo $total;
}


function ranking_kriteria()
{
  include "database.php";
  $sql_analisa = mysqli_query($koneksi, "select count(*) as total from tbl_bobot where status_bobot ='SELESAI - RANKING KELUAR'");
  $fetch_analisa = mysqli_fetch_array($sql_analisa);
  $total = $fetch_analisa['total'];
  echo $total;
}

function user()
{
  include "database.php";
  $sql_user = mysqli_query($koneksi, "select count(*) as total from user where status='Y'");
  $fetch_user = mysqli_fetch_array($sql_user);
  $total = $fetch_user['total'];
  echo $total;
}
