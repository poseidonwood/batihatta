<?php

//query tbl perbandingan
$query1 = mysqli_query($koneksi, "SELECT * FROM tbl_kriteria  where id_kriteria='1'");
$query2 = mysqli_query($koneksi, "SELECT * FROM tbl_kriteria  where id_kriteria='2'");
$query3 = mysqli_query($koneksi, "SELECT * FROM tbl_kriteria  where id_kriteria='3'");
$query4 = mysqli_query($koneksi, "SELECT * FROM tbl_kriteria  where id_kriteria='4'");
$query5 = mysqli_query($koneksi, "SELECT * FROM tbl_kriteria  where id_kriteria='5'");
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
                    <h3 class="card-tittle">Input Kriteria</h3>
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
                <h3 class="card-title"><a href="<?= $domain . "?page=analisa-kriteria"; ?>" type=" button" class="btn btn-success"><i class="fa fa-angle-left"></i> Kembali</a></h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fas fa-times"></i></button>
                </div>
            </div>
            <div class="card-body p-0">
                <?php
                //cek apakah id bobot ini sudah punya total ? 
                if (isset($_GET['id_bobot'])) {
                    $id_bobot = $_GET['id_bobot'];
                    //cari di db 
                    $sql_bobot = mysqli_query($koneksi, "select *from tbl_bobot where id_bobot='$id_bobot'");
                    $f_bobot = mysqli_fetch_array($sql_bobot);
                    $id_total = $f_bobot['id_total'];
                    if (isset($id_total)) {
                        // echo "<script>alert('$id_total');</script>";



                ?>
                        <!-- Isian untuk tampil table bobot dll -->

                        <table class="table table-bordered table-striped table-sm">
                            <thead class="thead-light">
                                <tr class="bg-success">
                                    <th class="text-center">Hasil Bobot >></th>
                                    <th class="text-center">Bobot 1</th>
                                    <th class="text-center">Bobot 2</th>
                                    <th class="text-center">Bobot 3</th>
                                    <th class="text-center">Bobot 4</th>
                                    <th class="text-center">Bobot 5</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                //tampil kan bobot
                                $s_bobot = mysqli_query($koneksi, "select *from tbl_bobot where id_bobot ='$id_bobot'");
                                $f_tbobot = mysqli_fetch_array($s_bobot);
                                $bobot1 = $f_tbobot['bobot'];
                                $bobot2 = $f_tbobot['bobot2'];
                                $bobot3 = $f_tbobot['bobot3'];
                                $bobot4 = $f_tbobot['bobot4'];
                                $bobot5 = $f_tbobot['bobot5'];

                                //tampil total
                                $s_total = mysqli_query($koneksi, "select *from tb_total where id_total ='$id_total'");
                                $f_ttotal = mysqli_fetch_array($s_total);
                                $total1 = $f_ttotal['total_1'];
                                $total2 = $f_ttotal['total_2'];
                                $total3 = $f_ttotal['total_3'];
                                $total4 = $f_ttotal['total_4'];
                                $total5 = $f_ttotal['total_5'];
                                ?>

                                <tr>
                                    <td></td>
                                    <td align="center"> <?= $bobot1; ?></td>
                                    <td align="center"> <?= $bobot2; ?></td>
                                    <td align="center"> <?= $bobot3; ?></td>
                                    <td align="center"> <?= $bobot4; ?></td>
                                    <td align="center"> <?= $bobot5; ?></td>
                                </tr>
                                <tr class="bg-primary">
                                    <td align="center">TOTAL</td>
                                    <td class="text-center" id="sumf3f7"> <?= $total1; ?></td>
                                    <td class="text-center" id="sumg3g7"><?= $total2; ?></td>
                                    <td class="text-center" id="sumh3h7"><?= $total3; ?></td>
                                    <td class="text-center" id="sumi3i7"><?= $total4; ?></td>
                                    <td class="text-center" id="sumj3j7"><?= $total5; ?></td>
                                </tr>

                            </tbody>
                        </table>
                        <br>
                        <div class="form-group">
                            &nbsp;&nbsp;
                            <center> <a href="<?= $domain . "?page=alternatif&id_bobot=$id_bobot"; ?>" id="submit_button" class="btn btn-primary" type="button" name="simpan"><i class="fa fa-play"></i> Proses Berikutnya | Hitung Alternatif</a></center>
                        </div>
                        <!-- akhir isisian -->

                    <?php
                    } else {
                    ?>

                        <table class="table table-bordered table-striped table-sm">
                            <thead class="thead-light">
                                <tr>
                                    <th>KRITERIA </th>
                                    <th><?php echo $b1['nama_kriteria']; ?></th>
                                    <th><?php echo $b2['nama_kriteria']; ?></th>
                                    <th><?php echo $b3['nama_kriteria']; ?></th>
                                    <th><?php echo $b4['nama_kriteria']; ?></th>

                                    <th><?php echo $b5['nama_kriteria']; ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th><?php echo $b1['nama_kriteria']; ?></th> <!-- Baris Umur -->
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
                                    <th><?php echo $b2['nama_kriteria']; ?></th> <!-- Baris IPK -->
                                    <td align="center">
                                        <select onchange="excel_f4()" class="custom-select mr-sm-2" id="f4" name="nm_banding1">
                                            <option value="0">Input Value</option>
                                            <option value="1">1. EQUAL</option>
                                            <option value="2">2. INTERMEDIATE</option>
                                            <option value="3">3. MODERATE</option>
                                            <option value="4">4. INTERMEDIATE</option>
                                            <option value="5">5. STRONG</option>
                                            <option value="6">6. INTERMEDIATE</option>
                                            <option value="7">7. VERY STRONG</option>
                                            <option value="8">8. INTERMEDIATE</option>
                                            <option value="9">9. ABSOLUTE</option>
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
                                    <th><?php echo $b3['nama_kriteria']; ?></th> <!-- baris Penghasilan Orangtua -->
                                    <td align="center">
                                        <select onchange="excel_f5()" class="custom-select mr-sm-2" id="f5" class="form-control" name="nm_banding2">
                                            <option value="0">Input Value</option>
                                            <option value="1">1. EQUAL</option>
                                            <option value="2">2. INTERMEDIATE</option>
                                            <option value="3">3. MODERATE</option>
                                            <option value="4">4. INTERMEDIATE</option>
                                            <option value="5">5. STRONG</option>
                                            <option value="6">6. INTERMEDIATE</option>
                                            <option value="7">7. VERY STRONG</option>
                                            <option value="8">8. INTERMEDIATE</option>
                                            <option value="9">9. ABSOLUTE</option>
                                        </select>
                                    </td>
                                    <td align="center">
                                        <select onchange="excel_g5()" class="custom-select mr-sm-2" id="g5" class="form-control" name="nm_banding3">
                                            <option value="0">Input Value</option>
                                            <option value="1">1. EQUAL</option>
                                            <option value="2">2. INTERMEDIATE</option>
                                            <option value="3">3. MODERATE</option>
                                            <option value="4">4. INTERMEDIATE</option>
                                            <option value="5">5. STRONG</option>
                                            <option value="6">6. INTERMEDIATE</option>
                                            <option value="7">7. VERY STRONG</option>
                                            <option value="8">8. INTERMEDIATE</option>
                                            <option value="9">9. ABSOLUTE</option>
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
                                    <th><?php echo $b4['nama_kriteria']; ?></th> <!-- baris semester -->
                                    <td align="center">
                                        <select onchange="excel_f6()" class="custom-select mr-sm-2" id="f6" class="form-control" name="nm_banding4">
                                            <option value="0">Input Value</option>
                                            <option value="1">1. EQUAL</option>
                                            <option value="2">2. INTERMEDIATE</option>
                                            <option value="3">3. MODERATE</option>
                                            <option value="4">4. INTERMEDIATE</option>
                                            <option value="5">5. STRONG</option>
                                            <option value="6">6. INTERMEDIATE</option>
                                            <option value="7">7. VERY STRONG</option>
                                            <option value="8">8. INTERMEDIATE</option>
                                            <option value="9">9. ABSOLUTE</option>
                                        </select>
                                    </td>
                                    <td align="center">
                                        <select onchange="excel_g6()" class="custom-select mr-sm-2" id="g6" class="form-control" name="nm_banding5">
                                            <option value="0">Input Value</option>
                                            <option value="1">1. EQUAL</option>
                                            <option value="2">2. INTERMEDIATE</option>
                                            <option value="3">3. MODERATE</option>
                                            <option value="4">4. INTERMEDIATE</option>
                                            <option value="5">5. STRONG</option>
                                            <option value="6">6. INTERMEDIATE</option>
                                            <option value="7">7. VERY STRONG</option>
                                            <option value="8">8. INTERMEDIATE</option>
                                            <option value="9">9. ABSOLUTE</option>
                                        </select>
                                    </td>
                                    <td align="center">
                                        <select onchange="excel_h6()" class="custom-select mr-sm-2" id="h6" class="form-control" name="nm_banding6">
                                            <option value="0">Input Value</option>
                                            <option value="1">1. EQUAL</option>
                                            <option value="2">2. INTERMEDIATE</option>
                                            <option value="3">3. MODERATE</option>
                                            <option value="4">4. INTERMEDIATE</option>
                                            <option value="5">5. STRONG</option>
                                            <option value="6">6. INTERMEDIATE</option>
                                            <option value="7">7. VERY STRONG</option>
                                            <option value="8">8. INTERMEDIATE</option>
                                            <option value="9">9. ABSOLUTE</option>
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
                                    <th><?php echo $b5['nama_kriteria']; ?></th> <!-- baris semester -->
                                    <td align="center">
                                        <select onchange="excel_f7()" class="custom-select mr-sm-2" id="f7" class="form-control" name="nm_banding7">
                                            <option value="0">Input Value</option>
                                            <option value="1">1. EQUAL</option>
                                            <option value="2">2. INTERMEDIATE</option>
                                            <option value="3">3. MODERATE</option>
                                            <option value="4">4. INTERMEDIATE</option>
                                            <option value="5">5. STRONG</option>
                                            <option value="6">6. INTERMEDIATE</option>
                                            <option value="7">7. VERY STRONG</option>
                                            <option value="8">8. INTERMEDIATE</option>
                                            <option value="9">9. ABSOLUTE</option>
                                        </select>
                                    </td>
                                    <td align="center">
                                        <select onchange="excel_g7()" class="custom-select mr-sm-2" id="g7" class="form-control" name="nm_banding8">
                                            <option value="0">Input Value</option>
                                            <option value="1">1. EQUAL</option>
                                            <option value="2">2. INTERMEDIATE</option>
                                            <option value="3">3. MODERATE</option>
                                            <option value="4">4. INTERMEDIATE</option>
                                            <option value="5">5. STRONG</option>
                                            <option value="6">6. INTERMEDIATE</option>
                                            <option value="7">7. VERY STRONG</option>
                                            <option value="8">8. INTERMEDIATE</option>
                                            <option value="9">9. ABSOLUTE</option>
                                        </select>
                                    </td>
                                    <td align="center">
                                        <select onchange="excel_h7()" class="custom-select mr-sm-2" id="h7" class="form-control" name="nm_banding9">
                                            <option value="0">Input Value</option>
                                            <option value="1">1. EQUAL</option>
                                            <option value="2">2. INTERMEDIATE</option>
                                            <option value="3">3. MODERATE</option>
                                            <option value="4">4. INTERMEDIATE</option>
                                            <option value="5">5. STRONG</option>
                                            <option value="6">6. INTERMEDIATE</option>
                                            <option value="7">7. VERY STRONG</option>
                                            <option value="8">8. INTERMEDIATE</option>
                                            <option value="9">9. ABSOLUTE</option>
                                        </select>
                                    </td>
                                    <td align="center">
                                        <select onchange="excel_i7()" class="custom-select mr-sm-2" id="i7" class="form-control" name="nm_banding10">
                                            <option value="0">Input Value</option>
                                            <option value="1">1. EQUAL</option>
                                            <option value="2">2. INTERMEDIATE</option>
                                            <option value="3">3. MODERATE</option>
                                            <option value="4">4. INTERMEDIATE</option>
                                            <option value="5">5. STRONG</option>
                                            <option value="6">6. INTERMEDIATE</option>
                                            <option value="7">7. VERY STRONG</option>
                                            <option value="8">8. INTERMEDIATE</option>
                                            <option value="9">9. ABSOLUTE</option>
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
                            <button class="btn btn-success" id="tampil_normalisasi" style="display: none;" type="button" onclick="#" name="tampil_normalisasi" data-toggle="modal" data-target="#exampleModalCenter"><i class="fas fa-table"></i> Table Normalisasi</button>
                            <button class="btn btn-success" id="count_button" type="button" onclick="tampil_total()" name="hitung"><i class="fa fa-calculator"></i> Hitung Total</button>
                            <button id="submit_button" class="btn btn-primary" style="display: none;" type="button" name="simpan"><i class="fa fa-play"></i> Proses Berikutnya</button>
                        </div>
                <?php
                    }
                }
                ?>
                <br>

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