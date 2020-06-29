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
                    <h3 class="card-tittle">Hitung Perbandingan</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Hitung Analisa Kriteria</li>
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
                            <th>Kriteria</th>
                            <th><?php echo $b1['kriteria1']; ?></th>
                            <th><?php echo $b2['kriteria1']; ?></th>
                            <th><?php echo $b3['kriteria1']; ?></th>
                            <th><?php echo $b4['kriteria1']; ?></th>

                            <th><?php echo $b5['kriteria1']; ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th><?php echo $b1['kriteria1']; ?></th> <!-- Baris Umur -->
                            <td align="center" id="f3"><?php echo $b1['nilai_banding']; ?></td>
                            <td align="center">
                                <font color="red">
                                    <p id="g3">0</p>
                                </font>
                            </td>
                            <td align="center">
                                <font color="red">
                                    <p id="h3">0</p>
                                </font>
                            </td>
                            <td align="center">
                                <font color="red" id="i3">0</font>
                            </td>
                            <td align="center">
                                <font color="red" id="j3">0</font>
                            </td>
                        </tr>

                        <tr>
                            <th><?php echo $b2['kriteria1']; ?></th> <!-- Baris IPK -->
                            <td align="center">
                                <select onchange="excel_f4()" class="custom-select mr-sm-2" id="f4" name="nm_banding1">
                                    <option value="0">Input Value</option>
                                    <option value="1">1. Sama penting dengan</option>
                                    <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                    <option value="3">3. Sedikit lebih penting dari</option>
                                    <option value="4">4. Mendekati lebih penting dari</option>
                                    <option value="5">5. Lebih penting dari</option>
                                    <option value="6">6. Mendekati sangat penting dari</option>
                                    <option value="7">7. Sangat penting dari</option>
                                    <option value="8">8. Mendekati mutlak dari</option>
                                    <option value="9">9. Mutlak sangat penting dari</option>
                                </select>
                            </td>
                            <td align="center">
                                <font color="red" id="g4"><?php echo $b2['nilai_banding']; ?></font>
                            </td>
                            <td align="center">
                                <font color="red" id="h4">0</font>
                            </td>
                            <td align="center">
                                <font color="red" id="i4">0</font>
                            </td>
                            <td align="center">
                                <font color="red" id="j4">0</font>
                            </td>

                        </tr>

                        <tr>
                            <th><?php echo $b3['kriteria1']; ?></th> <!-- baris Penghasilan Orangtua -->
                            <td align="center">
                                <select onchange="excel_f5()" class="custom-select mr-sm-2" id="f5" class="form-control" name="nm_banding2">
                                    <option value="0">Input Value</option>
                                    <option value="1">1. Sama penting dengan</option>
                                    <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                    <option value="3">3. Sedikit lebih penting dari</option>
                                    <option value="4">4. Mendekati lebih penting dari</option>
                                    <option value="5">5. Lebih penting dari</option>
                                    <option value="6">6. Mendekati sangat penting dari</option>
                                    <option value="7">7. Sangat penting dari</option>
                                    <option value="8">8. Mendekati mutlak dari</option>
                                    <option value="9">9. Mutlak sangat penting dari</option>
                                </select>
                            </td>
                            <td align="center">
                                <select onchange="excel_g5()" class="custom-select mr-sm-2" id="g5" class="form-control" name="nm_banding3">
                                    <option value="0">Input Value</option>
                                    <option value="1">1. Sama penting dengan</option>
                                    <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                    <option value="3">3. Sedikit lebih penting dari</option>
                                    <option value="4">4. Mendekati lebih penting dari</option>
                                    <option value="5">5. Lebih penting dari</option>
                                    <option value="6">6. Mendekati sangat penting dari</option>
                                    <option value="7">7. Sangat penting dari</option>
                                    <option value="8">8. Mendekati mutlak dari</option>
                                    <option value="9">9. Mutlak sangat penting dari</option>
                                </select>
                            </td>
                            <td align="center">
                                <font color="red" id="h5"><?php echo $b3['nilai_banding']; ?></font>
                            </td>
                            <td align="center">
                                <font color="red" id="i5">0</font>
                            </td>
                            <td align="center">
                                <font color="red" id="j5">0</font>
                            </td>
                        </tr>

                        <tr>
                            <th><?php echo $b4['kriteria1']; ?></th> <!-- baris semester -->
                            <td align="center">
                                <select onchange="excel_f6()" class="custom-select mr-sm-2" id="f6" class="form-control" name="nm_banding4">
                                    <option value="0">Input Value</option>
                                    <option value="1">1. Sama penting dengan</option>
                                    <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                    <option value="3">3. Sedikit lebih penting dari</option>
                                    <option value="4">4. Mendekati lebih penting dari</option>
                                    <option value="5">5. Lebih penting dari</option>
                                    <option value="6">6. Mendekati sangat penting dari</option>
                                    <option value="7">7. Sangat penting dari</option>
                                    <option value="8">8. Mendekati mutlak dari</option>
                                    <option value="9">9. Mutlak sangat penting dari</option>
                                </select>
                            </td>
                            <td align="center">
                                <select onchange="excel_g6()" class="custom-select mr-sm-2" id="g6" class="form-control" name="nm_banding5">
                                    <option value="0">Input Value</option>
                                    <option value="1">1. Sama penting dengan</option>
                                    <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                    <option value="3">3. Sedikit lebih penting dari</option>
                                    <option value="4">4. Mendekati lebih penting dari</option>
                                    <option value="5">5. Lebih penting dari</option>
                                    <option value="6">6. Mendekati sangat penting dari</option>
                                    <option value="7">7. Sangat penting dari</option>
                                    <option value="8">8. Mendekati mutlak dari</option>
                                    <option value="9">9. Mutlak sangat penting dari</option>
                                </select>
                            </td>
                            <td align="center">
                                <select onchange="excel_h6()" class="custom-select mr-sm-2" id="h6" class="form-control" name="nm_banding6">
                                    <option value="0">Input Value</option>
                                    <option value="1">1. Sama penting dengan</option>
                                    <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                    <option value="3">3. Sedikit lebih penting dari</option>
                                    <option value="4">4. Mendekati lebih penting dari</option>
                                    <option value="5">5. Lebih penting dari</option>
                                    <option value="6">6. Mendekati sangat penting dari</option>
                                    <option value="7">7. Sangat penting dari</option>
                                    <option value="8">8. Mendekati mutlak dari</option>
                                    <option value="9">9. Mutlak sangat penting dari</option>
                                </select>
                            </td>
                            <td align="center">
                                <font color="red" id="i6"><?php echo $b4['nilai_banding']; ?></font>
                            </td>
                            <td align="center">
                                <font color="red" id="j6">0</font>
                            </td>
                        </tr>

                        <tr>
                            <th><?php echo $b5['kriteria1']; ?></th> <!-- baris semester -->
                            <td align="center">
                                <select onchange="excel_f7()" class="custom-select mr-sm-2" id="f7" class="form-control" name="nm_banding7">
                                    <option value="0">Input Value</option>
                                    <option value="1">1. Sama penting dengan</option>
                                    <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                    <option value="3">3. Sedikit lebih penting dari</option>
                                    <option value="4">4. Mendekati lebih penting dari</option>
                                    <option value="5">5. Lebih penting dari</option>
                                    <option value="6">6. Mendekati sangat penting dari</option>
                                    <option value="7">7. Sangat penting dari</option>
                                    <option value="8">8. Mendekati mutlak dari</option>
                                    <option value="9">9. Mutlak sangat penting dari</option>
                                </select>
                            </td>
                            <td align="center">
                                <select onchange="excel_g7()" class="custom-select mr-sm-2" id="g7" class="form-control" name="nm_banding8">
                                    <option value="0">Input Value</option>
                                    <option value="1">1. Sama penting dengan</option>
                                    <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                    <option value="3">3. Sedikit lebih penting dari</option>
                                    <option value="4">4. Mendekati lebih penting dari</option>
                                    <option value="5">5. Lebih penting dari</option>
                                    <option value="6">6. Mendekati sangat penting dari</option>
                                    <option value="7">7. Sangat penting dari</option>
                                    <option value="8">8. Mendekati mutlak dari</option>
                                    <option value="9">9. Mutlak sangat penting dari</option>
                                </select>
                            </td>
                            <td align="center">
                                <select onchange="excel_h7()" class="custom-select mr-sm-2" id="h7" class="form-control" name="nm_banding9">
                                    <option value="0">Input Value</option>
                                    <option value="1">1. Sama penting dengan</option>
                                    <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                    <option value="3">3. Sedikit lebih penting dari</option>
                                    <option value="4">4. Mendekati lebih penting dari</option>
                                    <option value="5">5. Lebih penting dari</option>
                                    <option value="6">6. Mendekati sangat penting dari</option>
                                    <option value="7">7. Sangat penting dari</option>
                                    <option value="8">8. Mendekati mutlak dari</option>
                                    <option value="9">9. Mutlak sangat penting dari</option>
                                </select>
                            </td>
                            <td align="center">
                                <select onchange="excel_i7()" class="custom-select mr-sm-2" id="i7" class="form-control" name="nm_banding10">
                                    <option value="0">Input Value</option>
                                    <option value="1">1. Sama penting dengan</option>
                                    <option value="2">2. Mendekati sedikit lebih penting dari</option>
                                    <option value="3">3. Sedikit lebih penting dari</option>
                                    <option value="4">4. Mendekati lebih penting dari</option>
                                    <option value="5">5. Lebih penting dari</option>
                                    <option value="6">6. Mendekati sangat penting dari</option>
                                    <option value="7">7. Sangat penting dari</option>
                                    <option value="8">8. Mendekati mutlak dari</option>
                                    <option value="9">9. Mutlak sangat penting dari</option>
                                </select>
                            </td>
                            <td colspan="3" align="center">
                                <font color="red" id="j7"><?php echo $b5['nilai_banding']; ?></font>
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
                    <button class="btn btn-success" id="count_button" type="button" onclick="tampil_total()" name="hitung"><i class="fa fa-calculator"></i> Hitung Total</button>
                    <button id="submit_button" class="btn btn-primary" style="display: none;" type="button" data-toggle="modal" data-target="#exampleModalCenter" name="simpan"><i class="fa fa-play"></i> Proses Berikutnya</button>
                </div>
                <form method="post" action="" id="form-user" class="form-user">

                    <input type="hidden" name="id_total" placeholder="id total" value=<?= $_GET['id_bobot']; ?> id="id_total">

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