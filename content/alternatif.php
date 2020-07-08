<?php
//query tbl perbandingan 
$query1 = mysqli_query($koneksi, "SELECT * FROM tb_perb_kriteria where id_kriteria='B01'");
$query2 = mysqli_query($koneksi, "SELECT * FROM tb_perb_kriteria where id_kriteria='B02'");
$query3 = mysqli_query($koneksi, "SELECT * FROM tb_perb_kriteria where id_kriteria='B03'");
$query4 = mysqli_query($koneksi, "SELECT * FROM tb_perb_kriteria where id_kriteria='B04'");
$query5 = mysqli_query($koneksi, "SELECT * FROM tb_perb_kriteria where id_kriteria='B05'");
$b1 = mysqli_fetch_array($query1);
$b2 = mysqli_fetch_array($query2);
$b3 = mysqli_fetch_array($query3);
$b4 = mysqli_fetch_array($query4);
$b5 = mysqli_fetch_array($query5);
// deklarasi utk menampilkan nama alternatif
$query6 = mysqli_query($koneksi, "SELECT * FROM tbl_alter where id_alter='47238'");
$query7 = mysqli_query($koneksi, "SELECT * FROM tbl_alter where id_alter='63789'");
$query8 = mysqli_query($koneksi, "SELECT * FROM tbl_alter where id_alter='253816'");
$query9 = mysqli_query($koneksi, "SELECT * FROM tbl_alter where id_alter='307249'");
$query10 = mysqli_query($koneksi, "SELECT * FROM tbl_alter where id_alter='452136'");
$a1 = mysqli_fetch_array($query6);
$a2 = mysqli_fetch_array($query7);
$a3 = mysqli_fetch_array($query8);
$a4 = mysqli_fetch_array($query9);
$a5 = mysqli_fetch_array($query10);
if (isset($_GET['id_bobot'])) {
  $id_bobot = $_GET['id_bobot'];
  $c_sql = mysqli_query($koneksi, "select*from tbl_bobot where id_bobot='$id_bobot'");
  $f_sql = mysqli_num_rows($c_sql);
  if ($f_sql > 0) {
  } else {
    echo "<script>window.location.href='../new/pages/auth/?m=denied';</script>";
  }
} else {
  echo "<script>window.location.href='../new/pages/auth/?m=denied';</script>";
  // header("location:../new/pages/auth/?m=denied");
}
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h3 class="card-tittle">Input Nilai Alternatif</h3>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Input Nilai Alternatif</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <!-- <h3 class="card-title"><button type="button" class="btn btn-success"><i class="fas fa-plus"></i> Add New</button></h3> -->
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i></button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i></button>
        </div>
      </div>
      <div class="card-body p-0">
        <form action="<?= $domain . "proses/proses-alternatif.php"; ?>" method="post">
          <table class="table table-bordered table-striped table-sm">
            <thead class="thead-light">
              <tr>
                <th class="text-center">Tabel Kepentingan</th>
                <th class="text-center"><?php echo $b1['kriteria1']; ?></th>
                <th class="text-center"><?php echo $b2['kriteria1']; ?></th>
                <th class="text-center"><?php echo $b3['kriteria1']; ?></th>
                <th class="text-center"><?php echo $b4['kriteria1']; ?></th>
                <th class="text-center"><?php echo $b5['kriteria1']; ?></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th><?php echo $a1['nm_alter']; ?></th> <!-- Baris Umur -->
                <td align="center">
                  <input type="number" 0="f3" class="form-control w-50 " name="f3" placeholder="0" required>
                </td>
                <td align="center">
                  <input type="number" 0="g3" class="form-control w-50 " name="g3" placeholder="0" required>
                </td>
                <td align="center">
                  <input type="number" 0="h3" class="form-control w-50 " name="h3" placeholder="0" required>
                </td>
                <td align="center">
                  <input type="number" 0="i3" class="form-control w-50 " name="i3" placeholder="0" required>
                </td>
                <td align="center">
                  <input type="number" 0="j3" class="form-control w-50 " name="j3" placeholder="0" required>
                </td>
              </tr>

              <tr>
                <th><?php echo $a2['nm_alter']; ?></th> <!-- Baris IPK -->
                <td align="center">
                  <input type="number" 0="f4" class="form-control w-50 " name="f4" placeholder="0" required>
                </td>
                <td align="center">
                  <input type="number" 0="g4" class="form-control w-50 " name="g4" placeholder="0" required>
                </td>
                <td align="center">
                  <input type="number" 0="h4" class="form-control w-50 " name="h4" placeholder="0" required>
                </td>
                <td align="center">
                  <input type="number" 0="i4" class="form-control w-50 " name="i4" placeholder="0" required>
                </td>
                <td align="center">
                  <input type="number" 0="j4" class="form-control w-50 " name="j4" placeholder="0" required>
                </td>

              </tr>

              <tr>
                <th><?php echo $a3['nm_alter']; ?></th> <!-- baris Penghasilan Orangtua -->
                <td align="center">
                  <input type="number" 0="f5" class="form-control w-50 " name="f5" placeholder="0" required>
                </td>
                <td align="center">
                  <input type="number" 0="g5" class="form-control w-50 " name="g5" placeholder="0" required>
                </td>
                <td align="center">
                  <input type="number" 0="h5" class="form-control w-50 " name="h5" placeholder="0" required>
                </td>
                <td align="center">
                  <input type="number" 0="i5" class="form-control w-50 " name="i5" placeholder="0" required>
                </td>
                <td align="center">
                  <input type="number" 0="j5" class="form-control w-50 " name="j5" placeholder="0" required>
                </td>
              </tr>

              <tr>
                <th><?php echo $a4['nm_alter']; ?></th> <!-- baris semester -->
                <td align="center">
                  <input type="number" 0="f6" class="form-control w-50 " name="f6" placeholder="0" required>
                </td>
                <td align="center">
                  <input type="number" 0="g6" class="form-control w-50 " name="g6" placeholder="0" required>
                </td>
                <td align="center">
                  <input type="number" 0="h6" class="form-control w-50 " name="h6" placeholder="0" required>
                </td>
                <td align="center">
                  <input type="number" 0="i6" class="form-control w-50 " name="i6" placeholder="0" required>
                </td>
                <td align="center">
                  <input type="number" 0="j6" class="form-control w-50 " name="j6" placeholder="0" required>
                </td>
              </tr>

              <tr>
                <th><?php echo $a5['nm_alter']; ?></th> <!-- baris semester -->
                <td align="center">
                  <input type="number" 0="f7" class="form-control w-50 " name="f7" placeholder="0" required>
                </td>
                <td align="center">
                  <input type="number" 0="g7" class="form-control w-50 " name="g7" placeholder="0" required>
                </td>
                <td align="center">
                  <input type="number" 0="h7" class="form-control w-50 " name="h7" placeholder="0" required>
                </td>
                <td align="center">
                  <input type="number" 0="i7" class="form-control w-50 " name="i7" placeholder="0" required>
                </td>
                <td align="center">
                  <input type="number" 0="j7" class="form-control w-50 " name="j7" placeholder="0" required>
                </td>
              </tr>

              <tr id="result_tr" style="display: none;" class="bg-primary">
                <td align="center">TOTAL</td>
                <td class="text-center" id="sumf3f7">0</td>
                <td class="text-center" id="sumg3g7">0</td>
                <td class="text-center" id="sumh3h7">0</td>
                <td class="text-center" id="sumi3i7">2</td>
                <td class="text-center" id="sumj3j7">2</td>
              </tr>
            </tbody>
          </table>
          <br>
          <div class="form-group">
            &nbsp;&nbsp;
            <input type="hidden" value="<?= $id_bobot; ?>" name="id_bobot">
            <!-- <button class="btn btn-success" id="reload_button" style="display: none;" type="button" onclick="reload()" name="reload"><i class="fa fa-spinner fa-spin"></i> Hitung Ulang</button> -->
            <button type="submit" class="btn btn-success" type="button" name="hitung"><i class="fa fa-calculator"></i> Proses</button>
            <!-- <button id="submit_button" class="btn btn-primary" style="display: none;" type="button" data-toggle="modal" data-target="#exampleModalCenter" name="simpan"><i class="fa fa-play"></i> Proses Berikutnya</button> -->
          </div>
        </form>

        <form method="post" action="" id="form-user" class="form-user">

          <input type="hidden" name="id_total" placeholder="id total" id="id_total">

          <input type="hidden" name="total_1" placeholder="total_1" id="total_1">

          <input type="hidden" name="total_2" placeholder="total_2" id="total_2">

          <input type="hidden" name="total_3" placeholder="total_3" id="total_3">

          <input type="hidden" name="total_4" placeholder="total_4" id="total_4">

          <input type="hidden" name="total_5" placeholder="total_5" id="total_5">


        </form>


      </div>

      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
</div> <!-- /.content-wrapper -->