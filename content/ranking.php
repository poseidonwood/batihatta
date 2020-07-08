 <?php
  if (isset($_GET['ranking'])) {
    $id_bobot = $_GET['ranking'];
    // echo "<script>alert('$id_bobot');</script>";
  } else {
    echo "<script>window.location.href='../new/pages/auth/?m=denied';</script>";
  } ?>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-6">
           <h1>Ranking Id Analisa #<?= $id_bobot; ?></h1>
         </div>
         <div class="col-sm-6">
           <ol class="breadcrumb float-sm-right">
             <li class="breadcrumb-item"><a href="#">Home</a></li>
             <li class="breadcrumb-item active">Ranking</li>
           </ol>
         </div>
       </div>
     </div><!-- /.container-fluid -->
   </section>

   <!-- Main content -->
   <section class="content">
     <div class="row">
       <div class="col-md-12">
         <div class="card card-dark">
           <div class="card-header">
             <a href="#" class="btn btn-info" onclick="hitung_ulang()">
               <h3 class="card-title"><i class="fas fa-angle-left"></i> Hitung Kembali</h3>
             </a>

             <div class="card-tools">
               <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                 <i class="fas fa-minus"></i></button>
             </div>
           </div>
           <div class="card-body">
             <?php
              $no = 1;
              $sql_ranking = mysqli_query($koneksi, "select *from tbl_ranking where id_bobot='$id_bobot' order by nilai_v desc");
              $rows = mysqli_num_rows($sql_ranking);
              if ($rows > 0) {
              ?>
               <table class="table table-bordered">
                 <thead>
                   <tr>
                     <th class="text-center align-middle">Ranking</th>
                     <th class="text-center align-middle">Nilai</th>
                     <!-- <th class="text-center align-middle">Status</th>
                     <th class="text-center align-middle">Aksi</th> -->
                   </tr>
                 </thead>
                 <tbody>
                   <?php
                    while ($f_ranking = mysqli_fetch_array($sql_ranking)) {
                      // $no1 = $no++;
                      $nilai_v = $f_ranking['nilai_v'];
                      // $status_bobot = $f_ranking['status_bobot'];
                    ?>
                     <tr>

                       <td class="text-center align-middle"><?= $no++; ?></td>
                       <td class="text-center align-middle"><?= $nilai_v; ?></td>
                       <!-- <td class="text-center align-middle"><?php
                                                                  if ($status_bobot == "PROSES HITUNG") {
                                                                    echo "<span class='badge bg-success'> $status_bobot</span>";
                                                                  } else {
                                                                    echo "<span class='badge bg-primary'> $status_bobot</span>";
                                                                  } ?></td>
                       <td class="text-center align-middle"> -->
                       <!-- <div class="btn-group btn-group-sm">
                         <a class='btn btn-success btn-sm' href="<?= $domain . "?page=analisa-kriteria-hitung&id_bobot=" . $id_bobot; ?>">
                           <i class='fas fa-eye'></i>
                         </a>
                         <a class='btn btn-danger btn-sm' href="<?= $domain . "proses/hapus-bobot.php?id_bobot=" . $id_bobot; ?>" onclick="return confirm(' Anda yakin ingin menghapus?');">
                           <i class='fas fa-trash'></i>
                         </a>
                       </div> -->
                       </td>
                     </tr>
                 <?php
                    }
                  } else {
                    echo "<center><span class='badge bg-danger'><marquee><h3> Data Masih Kosong , Silahkan Klik Mulai Hitung </h3></marquee></span></center>";
                  }
                  ?>
                 </tbody>
               </table>
           </div>
           <!-- /.card-body -->
         </div>
         <!-- /.card -->
       </div>
       <!-- <div class="col-md-6">
         <div class="card card-primary">
           <div class="card-header">
             <?php
              if (isset($_GET['id_bobot'])) {
                echo " <h3 class='card-title'>Edit Kriteria</h3>";
              } else {
                echo " <h3 class='card-title'>Form Kriteria</h3>";
              }
              ?>
             <div class="card-tools">
               <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                 <i class="fas fa-minus"></i></button>
             </div>
           </div>
           <div class="card-body">
             <?php
              if (isset($_GET['id_bobot'])) {
                $id_bobot = $_GET['id_bobot'];
                $s_edit_kriteria = mysqli_query($koneksi, "select *from tbl_kriteria where id_bobot = '$id_bobot'");
                while ($f_edit_kriteria = mysqli_fetch_array($s_edit_kriteria)) {
                  $nm_kriteria = $f_edit_kriteria['nama_kriteria'];
                  $id_bobot = $f_edit_kriteria['id_bobot'];
              ?>
                 <form action="#" method="post">
                   <div class="form-group">
                     <label for="inputEstimatedBudget">Id Kriteria</label>
                     <input type="text" id="inputEstimatedBudget" name="id_bobot" value="<?= $id_bobot; ?>" class=" form-control" readonly>
                   </div>
                   <div class="form-group">
                     <label for="inputSpentBudget">Nama Kriteria</label>
                     <input type="text" id="inputSpentBudget" name="nm_kriteria" value="<?= $nm_kriteria; ?>" class="form-control" autofocus>
                   </div>
                   <div class="form-group float-right">
                     <a href="<?= $domain . "?page=kriteria"; ?>" class="btn btn-secondary">Cancel</a>
                     <input type="submit" value="Update" class="btn btn-warning">
                   </div>
                 </form>
               <?php
                }
              } else {
                ?>
               <form action="<?= $domain . "proses/save-kriteria.php"; ?>" method="post">
                 <div class="form-group">
                   <label for="inputSpentBudget">Nama Kriteria</label>
                   <input type="text" id="inputSpentBudget" name="nm_kriteria" class="form-control" autofocus="">
                 </div>
                 <div class="form-group float-right">
                   <a href="#" class="btn btn-secondary">Cancel</a>
                   <input type="submit" value="Simpan" class="btn btn-primary">
                 </div>
               </form>
             <?php
              }

              ?>
           </div>
         </div> -->

     </div>
 </div>
 </section>
 <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->
 <br>
 <script>
   function alihkan() {
     let timerInterval
     Swal.fire({
       title: 'LOADING',
       html: 'Loading akan selasai dalam <b></b>.',
       timer: 5000,
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
       }
       window.location.href = "<?= $domain . "proses/save-id-bobot.php"; ?>";
     })
     // window.location.href = "<?= $domain . "proses/save-id-bobot.php"; ?>"

   }
 </script>