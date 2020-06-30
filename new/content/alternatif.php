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
                <input type="number" value="f3" class="form-control w-50 " name="f3" placeholder="Masukan nilai">
              </td>
              <td align="center">
                <input type="number" value="g3" class="form-control w-50 " name="g3" placeholder="Masukan nilai">
              </td>
              <td align="center">
                <input type="number" value="h3" class="form-control w-50 " name="h3" placeholder="Masukan nilai">
              </td>
              <td align="center">
                <input type="number" value="i3" class="form-control w-50 " name="i3" placeholder="Masukan nilai">
              </td>
              <td align="center">
                <input type="number" value="j3" class="form-control w-50 " name="j3" placeholder="Masukan nilai">
              </td>
            </tr>

            <tr>
              <th><?php echo $b2['kriteria1']; ?></th> <!-- Baris IPK -->
              <td align="center">
                <input type="number" value="f4" class="form-control w-50 " name="f4" placeholder="Masukan nilai">
              </td>
              <td align="center">
                <input type="number" value="g4" class="form-control w-50 " name="g4" placeholder="Masukan nilai">
              </td>
              <td align="center">
                <input type="number" value="h4" class="form-control w-50 " name="h4" placeholder="Masukan nilai">
              </td>
              <td align="center">
                <input type="number" value="i4" class="form-control w-50 " name="i4" placeholder="Masukan nilai">
              </td>
              <td align="center">
                <input type="number" value="j4" class="form-control w-50 " name="j4" placeholder="Masukan nilai">
              </td>

            </tr>

            <tr>
              <th><?php echo $b3['kriteria1']; ?></th> <!-- baris Penghasilan Orangtua -->
              <td align="center">
                <input type="number" value="f5" class="form-control w-50 " name="f5" placeholder="Masukan nilai">
              </td>
              <td align="center">
                <input type="number" value="g5" class="form-control w-50 " name="g5" placeholder="Masukan nilai">
              </td>
              <td align="center">
                <input type="number" value="h5" class="form-control w-50 " name="h5" placeholder="Masukan nilai">
              </td>
              <td align="center">
                <input type="number" value="i5" class="form-control w-50 " name="i5" placeholder="Masukan nilai">
              </td>
              <td align="center">
                <input type="number" value="j5" class="form-control w-50 " name="j5" placeholder="Masukan nilai">
              </td>
            </tr>

            <tr>
              <th><?php echo $b4['kriteria1']; ?></th> <!-- baris semester -->
              <td align="center">
                <input type="number" value="f6" class="form-control w-50 " name="f6" placeholder="Masukan nilai">
              </td>
              <td align="center">
                <input type="number" value="g6" class="form-control w-50 " name="g6" placeholder="Masukan nilai">
              </td>
              <td align="center">
                <input type="number" value="h6" class="form-control w-50 " name="h6" placeholder="Masukan nilai">
              </td>
              <td align="center">
                <input type="number" value="i6" class="form-control w-50 " name="i6" placeholder="Masukan nilai">
              </td>
              <td align="center">
                <input type="number" value="j6" class="form-control w-50 " name="j6" placeholder="Masukan nilai">
              </td>
            </tr>

            <tr>
              <th><?php echo $b5['kriteria1']; ?></th> <!-- baris semester -->
              <td align="center">
                <input type="number" value="f7" class="form-control w-50 " name="f7" placeholder="Masukan nilai">
              </td>
              <td align="center">
                <input type="number" value="g7" class="form-control w-50 " name="g7" placeholder="Masukan nilai">
              </td>
              <td align="center">
                <input type="number" value="h7" class="form-control w-50 " name="h7" placeholder="Masukan nilai">
              </td>
              <td align="center">
                <input type="number" value="i7" class="form-control w-50 " name="i7" placeholder="Masukan nilai">
              </td>
              <td align="center">
                <input type="number" value="j7" class="form-control w-50 " name="j7" placeholder="Masukan nilai">
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
          <button class="btn btn-success" id="reload_button" style="display: none;" type="button" onclick="reload()" name="reload"><i class="fa fa-spinner fa-spin"></i> Hitung Ulang</button>
          <button class="btn btn-success" id="count_button" type="button" onclick="hitung_alternatif()" name="hitung"><i class="fa fa-calculator"></i> Proses</button> 
          <button id="submit_button" class="btn btn-primary" style="display: none;" type="button" data-toggle="modal" data-target="#exampleModalCenter" name="simpan"><i class="fa fa-play"></i> Proses Berikutnya</button>
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