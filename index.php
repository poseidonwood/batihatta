<?php
require_once "config/database.php";
// require_once "header.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">


  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <style>
    #exampleModalCenter {}

    .modal-body {
      overflow-x: auto;
    }
  </style>

</head>

<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>AHP TOPSIS</title>

</head>

<body>
  <section id="container">
    <!--header start-->
    <header class="header" style="background-color: #5F9EA0">
      <div class="sidebar-toggle-box" style="background-color: #5F9EA0">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b style="color: #000000">SPK <span style="color: #000000">AHP-TOPSIS</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
        </ul>
        </li>
        <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" style="background-color: #000" href="login.html">Logout</a></li>
        </ul>
      </div>
    </header>

    <!--header end-->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse" style="background-color:#2F4F4F">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <!-- <p class="centered"><a href="profile.html"><img src="img/ui-sam.jpg" class="img-circle" width="80"></a></p>
          <h5 class="centered">Sam Soffes</h5> -->
          <li class="mt" style="padding-top: 30px">
            <a href="index.php?page=dashboard">
              <i class="fa fa-dashboard"></i>
              <span style="font-size: 18px">Dashboard</span>
            </a>
          </li>
          <li class="">
            <a class="" href="index.php?module=page">
              <i class="fa fa-calculator"></i>
              <span style="font-size: 18px">kriteria</span>
            </a>
          </li>
          <li class="">
            <a class="" href="index.php?page=tampil-data-alter">
              <i class="fa fa-calculator"></i>
              <span style="font-size: 18px">Alternatif</span>
            </a>
          </li>
          <li class="">
            <a class="" href="index.php?page=analisa-kriteria">
              <i class="fa fa-calculator"></i>
              <span style="font-size: 18px">Analisa Kriteria</span>
            </a>
          </li>
          <li class="">
            <a class="" href="index.php?page=hasil-kriteria">
              <i class="fa fa-calculator"></i>
              <span style="font-size: 18px">Hasil Kriteria</span>
            </a>
          </li>
          <li class="">
            <a class="" href="index.php?module=coba">
              <i class="fa fa-calculator"></i>
              <span style="font-size: 18px">Hasil</span>
            </a>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12 main-chart" style="padding-left: 50px;padding-right: 50px;">
            <!--CUSTOM CHART START -->
            <div class="border-head">

            </div>

            <div class="container-fluid">
              <?php
              if (empty($_GET["page"])) {
                include "view/kriteria/tampil-data.php";
              } elseif ($_GET['page'] == 'tambah') {
                include "view/kriteria/form-tambah.php";
              } elseif ($_GET['page'] == 'analisa-kriteria') {
                include "view/kriteria/analisa-kriteria.php";
              } elseif ($_GET['page'] == 'hasil-kriteria') {
                include "view/kriteria/hasil-kriteria.php";
              } elseif ($_GET['page'] == 'ubah') {
                include "view/kriteria/form-ubah.php";
              } elseif ($_GET['page'] == 'index') {
                include "index.php";
              } elseif ($_GET['page'] == 'proses-hapus') {
                include "view/kriteria/proses-hapus.php";
              } elseif ($_GET['page'] == 'dashboard') {
                include "view/dashboard/dashboard.php";
                // alter
              } elseif ($_GET['page'] == 'tampil-data-alter') {
                include "view/alternatif/tampil-data-alter.php";
              } elseif ($_GET['page'] == 'form-tambah-alter') {
                include "view/alternatif/form-tambah-alter.php";
              } elseif ($_GET['page'] == 'proses-hapus') {
                include "view/dashboard/proses-hapus.php";
              } elseif ($_GET['page'] == 'ubah-alter') {
                include "view/alternatif/form-ubah-alter.php";
              }


              ?>

      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    </div> <!-- /.container-fluid -->

    <footer class="footer">
      <div class="container-fluid">
        <p class="text-muted pull-left">&copy; 2020 Batik Hatta</p>
      </div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap-datepicker.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="lib/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="lib/jquery.ui.touch-punch.min.js"></script>
    <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
    <script src="lib/jquery.scrollTo.min.js"></script>
    <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
    <!--common script for all pages-->
    <script src="lib/common-scripts.js"></script>
    <!--script for this page-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>