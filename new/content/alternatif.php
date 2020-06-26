 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-6">
           <h1>Tambah Kriteria</h1>
         </div>
         <div class="col-sm-6">
           <ol class="breadcrumb float-sm-right">
             <li class="breadcrumb-item"><a href="#">Home</a></li>
             <li class="breadcrumb-item active">Tambah Kriteria</li>
           </ol>
         </div>
       </div>
     </div><!-- /.container-fluid -->
   </section>

   <!-- Main content -->
   <section class="content">
     <div class="row">
       <div class="col-md-6">
         <div class="card card-secondary">
           <div class="card-header">
             <h3 class="card-title">Kriteria</h3>

             <div class="card-tools">
               <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                 <i class="fas fa-minus"></i></button>
             </div>
           </div>
           <div class="card-body">
             <table class="table table-bordered">
               <thead>
                 <tr>
                   <th class="text-center align-middle">#</th>
                   <th class="text-center align-middle">Nama Kriteria</th>
                   <th class="text-center align-middle">Aksi</th>
                 </tr>
               </thead>
               <tbody>
                 <?php
                  $no = 1;
                  $sql_alternatif = mysqli_query($koneksi, "select *from tbl_alternatif");
                  while ($f_alternatif = mysqli_fetch_array($sql_alternatif)) {
                    // $no1 = $no++;
                    $id_alternatif = $f_alternatif['id_alternatif'];
                    $nama_alternatif = $f_alternatif['nama_alternatif'];
                  ?>
                   <tr>

                     <td class="text-center align-middle"><?= $no++; ?></td>
                     <td class="text-center align-middle"><?= $nama_alternatif; ?></td>
                     <td class="text-center align-middle">
                       <div class="btn-group btn-group-sm">
                         <a class='btn btn-primary btn-sm' href="<?= $domain . "?page=kriteria&id_kriteria=" . $id_kriteria; ?>">
                           <i class='fas fa-edit'></i>
                         </a>
                         <a class='btn btn-danger btn-sm' href="proses-hapus.php?id=<?= $id_kriteria; ?>" onclick="return confirm(' Anda yakin ingin menghapus?');">
                           <i class='fas fa-trash'></i>
                         </a>
                       </div>
                     </td>
                   </tr>
                 <?php
                  }
                  ?>
               </tbody>
             </table>
           </div>
           <!-- /.card-body -->
         </div>
         <!-- /.card -->
       </div>
       <div class="col-md-6">
         <div class="card card-primary">
           <div class="card-header">
             <?php
              if (isset($_GET['id_kriteria'])) {
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
              if (isset($_GET['id_kriteria'])) {
                $id_kriteria = $_GET['id_kriteria'];
                $s_edit_kriteria = mysqli_query($koneksi, "select *from tbl_kriteria where id_kriteria = '$id_kriteria'");
                while ($f_edit_kriteria = mysqli_fetch_array($s_edit_kriteria)) {
                  $nm_kriteria = $f_edit_kriteria['nama_kriteria'];
                  $id_kriteria = $f_edit_kriteria['id_kriteria'];
              ?>
                 <center>
                   <!-- <h5><strong>Update </strong></h5> -->
                 </center>
                 <form action="#" method="post">
                   <div class="form-group">
                     <label for="inputEstimatedBudget">Id Kriteria</label>
                     <input type="text" id="inputEstimatedBudget" name="id_kriteria" value="<?= $id_kriteria; ?>" class=" form-control" readonly>
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
                 <!--  <div class="form-group">
                   <label for="inputEstimatedBudget">Id Kriteria</label>
                   <input type="text" id="inputEstimatedBudget" name="id_kriteria" class="form-control" autofocus>
                 </div> -->
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
           <!-- /.card-body -->
         </div>

       </div>
     </div>
   </section>
   <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->
 <br>