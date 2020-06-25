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
    //
    if (isset($_GET['page'])) {
      if ($_GET['page'] == 'kriteria') {
        include "content/kriteria.php";
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