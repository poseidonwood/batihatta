<?php
include "config/session.php";
include "config/database.php";
include "config/sql.php";
include "view_component/src_asset.php";
?>

<body class="hold-transition sidebar-mini layout-fixed">

  <div class="wrapper">
    <?php
    include "config/notif.php";
    include "view_component/navbar.php";
    include "view_component/aside.php";
    //page isset 
    if (isset($_GET['page'])) {
      if ($_GET['page'] == 'kriteria') {
        include "content/kriteria.php";
      } elseif ($_GET['page'] == 'form-alternatif') {
        include "content/alternatif-form.php";
      } elseif ($_GET['page'] == 'analisa-kriteria') {
        include "content/hitung-status.php";
        include "view_component/js-hasil-kriteria.php";
      } elseif ($_GET['page'] == 'analisa-kriteria-hitung') {
        include "content/analisa-kriteria.php";
        include "view_component/js-hasil-kriteria.php";
      } elseif ($_GET['page'] == 'alternatif') {
        include "content/alternatif.php";
        include "view_component/js-hasil-kriteria.php";
      } elseif ($_GET['page'] == 'normalisasi-terbobot') {
        include "content/normalisasi-terbobot.php";
        include "view_component/js-hasil-kriteria.php";
      } elseif ($_GET['page'] == 'ranking') {
        include "content/ranking.php";
        include "view_component/js-hasil-kriteria.php";
      } else {
        //jika halaman di akses salah di pindah ke login page dan hapus season
        // mengaktifkan session php
        // menghapus semua session
        echo "<script>window.alert('Access Denied!!');
        window.location.href='" . $domain . "pages/auth/?m=denied'</script>";
        // header("location:../new/pages/auth/?m=denied");
      }
    } else {
      include "content/index-content.php";
    }
    include "view_component/footer_src.php";
    ?>