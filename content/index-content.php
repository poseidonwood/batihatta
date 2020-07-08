<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= $domain; ?>">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="jumbotron">
    <h2>SPK HYBRID AHP-TOPSIS Penentuan Pendirian Lokasi Stand</h2>
    <p>Sistem Pendukung Keputusan Metode HYBRID ini menggunakan metode komparasi antara AHP dan TOPSIS.
      <br>AHP digunakan untuk mencari nilai bobot dari setiap kriteria, TOPSIS digunakan untuk mencari ranking dari alternatif. </p></br>
  </div>
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3><?= analisa_kriteria(); ?></h3>

              <p>Analisa Kriteria</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="?page=analisa-kriteria" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-secondary">
            <div class="inner">
              <h3><?= ranking_kriteria(); ?></h3>

              <p>Ranking Keluar/Selesai</p>
            </div>
            <div class="icon">
              <i class="fa fa-star"></i>
            </div>
            <a href="?page=analisa-kriteria" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-md-6">
          <!-- small box -->
          <div class="small-box bg-dark">
            <div class="inner">
              <h3><?= user(); ?></h3>

              <p>User</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
        </div>
        <!-- ./col -->

        <!-- ./col -->
      </div>
      <!-- /.row -->

    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->