<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="dist/img/default-picture.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block"><?= $_SESSION['email']; ?></a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview menu-open">
          <a href="<?= $domain; ?>" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
              <!-- <i class="right fas fa-angle-left"></i> -->
            </p>
          </a>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
            <p>
              Data List
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <!-- <a href="pages/forms/general.html" class="nav-link"> -->
              <a href="<?= "$domain?page=kriteria"; ?>" class="nav-link">
                <i class="fas fa-edit nav-icon"></i>
                <p>Data Kriteria</p>
              </a>
            </li>
            <li class="nav-item">
              <!-- <a href="pages/forms/general.html" class="nav-link"> -->
              <a href="<?= "$domain?page=form-alternatif"; ?>" class="nav-link">
                <i class="fas fa-edit nav-icon"></i>
                <p>Data Alternatif</p>
              </a>
            </li>
            <!-- <li class="nav-item">
              <a href="<?= "$domain?page=alternatif"; ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Alternatif</p>
              </a>
            </li> -->
         
          </ul>
        </li>
        
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon ion ion-stats-bars"></i>
            <p>
              Analis Proses
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= $domain . "?page=analisa-kriteria"; ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Hitung Analisa Kriteria</p>
              </a>
            </li>
            
          </ul>

        </li>
        <!--<li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-database"></i>
            <p>
              Database Management
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <!-- <a href="pages/forms/general.html" class="nav-link"> -->
              <!--<a href="<?= $domain . "config/import/"; ?>" class="nav-link">
                <i class="fas fa-file-import nav-icon"></i>
                <p>Import</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= $domain . "config/import/export.php"; ?>" class="nav-link">
                <i class="fas fa-file-export nav-icon"></i>
                <p>Export</p>
              </a>
            </li>
          </ul>
        </li>
        
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>