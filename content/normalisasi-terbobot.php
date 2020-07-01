<?php
// echo "<script>alert('http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]&ranking=true');</script>";
// $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
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
if (isset($_GET['id_bobot'])) {

  $id_bobot = $_GET['id_bobot'];
  $matrixf3 = $_GET['matrixf3'];
  $matrixf4 = $_GET['matrixf4'];
  $matrixf5 = $_GET['matrixf5'];
  $matrixf6 = $_GET['matrixf6'];
  $matrixf7 = $_GET['matrixf7'];
  $matrixg3 = $_GET['matrixg3'];
  $matrixg4 = $_GET['matrixg4'];
  $matrixg5 = $_GET['matrixg5'];
  $matrixg6 = $_GET['matrixg6'];
  $matrixg7 = $_GET['matrixg7'];
  $matrixh3 = $_GET['matrixh3'];
  $matrixh4 = $_GET['matrixh4'];
  $matrixh5 = $_GET['matrixh5'];
  $matrixh6 = $_GET['matrixh6'];
  $matrixh7 = $_GET['matrixh7'];
  $matrixi3 = $_GET['matrixi3'];
  $matrixi4 = $_GET['matrixi4'];
  $matrixi5 = $_GET['matrixi5'];
  $matrixi6 = $_GET['matrixi6'];
  $matrixi7 = $_GET['matrixi7'];
  $matrixj3 = $_GET['matrixj3'];
  $matrixj4 = $_GET['matrixj4'];
  $matrixj5 = $_GET['matrixj5'];
  $matrixj6 = $_GET['matrixj6'];
  $matrixj7 = $_GET['matrixj7'];
  // echo "<script>alert('Pilih Id BObot?');</script>";
  //   $c_sql = mysqli_query($koneksi, "select*from tbl_bobot where id_bobot='$id_bobot'");
  //   $f_sql = mysqli_num_rows($c_sql);
  //   if ($f_sql > 0) {
  //   } else {
  //     echo "<script>window.location.href='../new/pages/auth/?m=denied';</script>";
  //   }
} else {
  echo "<script>window.location.href='../new/pages/auth/?m=denied';</script>";
}
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h3 class="card-tittle">Normalisasi dan Tampilkan Hasil</h3>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Normalisasi dan Tampilkan Hasil</li>
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
        <!-- <form action="<?= $domain . "proses/proses-alternatif.php"; ?>" method="post"> -->
        <table class="table table-bordered table-striped table-sm">
          <thead class="thead-light">
            <tr>
              <th class="text-center">Kriteria</th>
              <th class="text-center"><?php echo $b1['kriteria1']; ?></th>
              <th class="text-center"><?php echo $b2['kriteria1']; ?></th>
              <th class="text-center"><?php echo $b3['kriteria1']; ?></th>
              <th class="text-center"><?php echo $b4['kriteria1']; ?></th>
              <th class="text-center"><?php echo $b5['kriteria1']; ?></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th><?php echo $b1['kriteria1']; ?></th> <!-- Baris Umur -->
              <td align="center">
                <input type="number" value="<?= $matrixf3; ?>" class="form-control" readonly name="f3">
              </td>
              <td align="center">
                <input type="number" value="<?= $matrixg3; ?>" class="form-control" readonly name="g3">
              </td>
              <td align="center">
                <input type="number" value="<?= $matrixh3; ?>" class="form-control" readonly name="h3">
              </td>
              <td align="center">
                <input type="number" value="<?= $matrixi3; ?>" class="form-control" readonly name="i3">
              </td>
              <td align="center">
                <input type="number" value="<?= $matrixj3; ?>" class="form-control" readonly name="j3">
              </td>
            </tr>

            <tr>
              <th><?php echo $b2['kriteria1']; ?></th> <!-- Baris IPK -->
              <td align="center">
                <input type="number" value="<?= $matrixf4; ?>" class="form-control" readonly name="f4">
              </td>
              <td align="center">
                <input type="number" value="<?= $matrixg4; ?>" class="form-control" readonly name="g4">
              </td>
              <td align="center">
                <input type="number" value="<?= $matrixh4; ?>" class="form-control" readonly name="h4">
              </td>
              <td align="center">
                <input type="number" value="<?= $matrixi4; ?>" class="form-control" readonly name="i4">
              </td>
              <td align="center">
                <input type="number" value="<?= $matrixj4; ?>" class="form-control" readonly name="j4">
              </td>

            </tr>

            <tr>
              <th><?php echo $b3['kriteria1']; ?></th> <!-- baris Penghasilan Orangtua -->
              <td align="center">
                <input type="number" value="<?= $matrixf5; ?>" class="form-control" readonly name="f5">
              </td>
              <td align="center">
                <input type="number" value="<?= $matrixg5; ?>" class="form-control" readonly name="g5">
              </td>
              <td align="center">
                <input type="number" value="<?= $matrixh5; ?>" class="form-control" readonly name="h5">
              </td>
              <td align="center">
                <input type="number" value="<?= $matrixi5; ?>" class="form-control" readonly name="i5">
              </td>
              <td align="center">
                <input type="number" value="<?= $matrixj5; ?>" class="form-control" readonly name="j5">
              </td>
            </tr>

            <tr>
              <th><?php echo $b4['kriteria1']; ?></th> <!-- baris semester -->
              <td align="center">
                <input type="number" value="<?= $matrixf6; ?>" class="form-control" readonly name="f6">
              </td>
              <td align="center">
                <input type="number" value="<?= $matrixg6; ?>" class="form-control" readonly name="g6">
              </td>
              <td align="center">
                <input type="number" value="<?= $matrixh6; ?>" class="form-control" readonly name="h6">
              </td>
              <td align="center">
                <input type="number" value="<?= $matrixi6; ?>" class="form-control" readonly name="i6">
              </td>
              <td align="center">
                <input type="number" value="<?= $matrixj6; ?>" class="form-control" readonly name="j6">
              </td>
            </tr>

            <tr>
              <th><?php echo $b5['kriteria1']; ?></th> <!-- baris semester -->
              <td align="center">
                <input type="number" value="<?= $matrixf7; ?>" class="form-control" readonly name="f7">
              </td>
              <td align="center">
                <input type="number" value="<?= $matrixg7; ?>" class="form-control" readonly name="g7">
              </td>
              <td align="center">
                <input type="number" value="<?= $matrixh7; ?>" class="form-control" readonly name="h7">
              </td>
              <td align="center">
                <input type="number" value="<?= $matrixi7; ?>" class="form-control" readonly name="i7">
              </td>
              <td align="center">
                <input type="number" value="<?= $matrixj7; ?>" class="form-control" readonly name="j7">
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
          <button class="btn btn-success" type="button" name="hitung" onclick="ranking()"><i class="fa fa-star"></i> Tampilkan Ranking</button>
          <!-- <button id="submit_button" class="btn btn-primary" style="display: none;" type="button" data-toggle="modal" data-target="#exampleModalCenter" name="simpan"><i class="fa fa-play"></i> Proses Berikutnya</button> -->
        </div>

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
<script>
  function ranking() {
    let timerInterval
    Swal.fire({
      title: 'Menghitung Ranking',
      html: 'Tunggu sebentar <b></b>.',
      timer: 2000,
      timerProgressBar: true,
      onBeforeOpen: () => {
        Swal.showLoading()
        timerInterval = setInterval(() => {
          const content = Swal.getContent()
          if (content) {
            const b = content.querySelector('b')
            if (b) {
              b.textContent = Swal.getTimerLeft()
            }
          }
        }, 100)
      },
      onClose: () => {
        clearInterval(timerInterval)
      }
    }).then((result) => {
      /* Read more about handling dismissals below */
      if (result.dismiss === Swal.DismissReason.timer) {
        console.log('I was closed by the timer')
        window.location.href = '<?= $domain . "?page=ranking&ranking=$id_bobot"; ?>';
      }
    })
  }
</script>