 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-6">
           <h1>Tambah Alternatif</h1>
         </div>
         <div class="col-sm-6">
           <ol class="breadcrumb float-sm-right">
             <li class="breadcrumb-item"><a href="#">Home</a></li>
             <li class="breadcrumb-item active">Tambah Alternatif</li>
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
             <h3 class="card-title">Alternatif</h3>

             <div class="card-tools">
               <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                 <i class="fas fa-minus"></i></button>
             </div>
           </div>
           <div class="card-body">
             <table class="table table-bordered">
               <thead>
                 <tr>
                   <th class="text-center align-middle">No</th>
                   <th class="text-center align-middle">Nama Alternatif</th>
                   <th class="text-center align-middle">Aksi</th>
                 </tr>
               </thead>
               <tbody>
                 <?php
                  $no = 1;
                  $sql_alter = mysqli_query($koneksi, "select *from tbl_alter");
                  while ($f_alter = mysqli_fetch_array($sql_alter)) {
                    // $no1 = $no++;
                    $id_alter = $f_alter['id_alter'];
                    $nm_alter = $f_alter['nm_alter'];
                  ?>
                   <tr>

                     <td class="text-center align-middle"><?= $no++; ?></td>
                     <td class="text-center align-middle"><?= $nm_alter; ?></td>
                     <td class="text-center align-middle">
                       <div class="btn-group btn-group-sm">
                         <a class='btn btn-primary btn-sm' href="<?= $domain . "?page=form-alternatif&id_alter=" . $id_alter; ?>">
                           <i class='fas fa-edit'></i>
                         </a>
                        <a class='btn btn-danger btn-sm' href="<?= $domain; ?>proses/hapus-alternatif.php?id_alter=<?= $id_alter; ?>" onclick="return confirm(' Anda yakin ingin menghapus?');">
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
              if (isset($_GET['id_alter'])) {
                echo " <h3 class='card-title'>Edit alternatif</h3>";
              } else {
                echo " <h3 class='card-title'>Form alternatif</h3>";
              }
              ?>
             <div class="card-tools">
               <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                 <i class="fas fa-minus"></i></button>
             </div>
           </div>
           <div class="card-body">
             <?php
              if (isset($_GET['id_alter'])) {
                $id_alter = $_GET['id_alter'];
                $s_edit_alter = mysqli_query($koneksi, "select *from tbl_alter where id_alter = '$id_alter'");
                while ($f_edit_alter = mysqli_fetch_array($s_edit_alter)) {
                  $nm_alter = $f_edit_alter['nm_alter'];
                  $id_alter = $f_edit_alter['id_alter'];
              ?>
                 <center>
                   <!-- <h5><strong>Update </strong></h5> -->
                 </center>
                 <form action="<?= $domain . "proses/edit-alternatif.php"; ?>" method="post">
                   <div class="form-group">
                     <label for="inputEstimatedBudget">Id Alternatif</label>
                     <input type="text" id="inputEstimatedBudget" name="id_alter" value="<?= $id_alter; ?>" class=" form-control" readonly>
                   </div>
                   <div class="form-group">
                     <label for="inputSpentBudget">Nama Alternatif</label>
                     <input type="text" id="inputSpentBudget" name="nm_alter" value="<?= $nm_alter; ?>" class="form-control" autofocus>
                   </div>
                   <div class="form-group float-right">
                     <a href="<?= $domain . "?page=form-alternatif"; ?>" class="btn btn-secondary">Cancel</a>
                     <input type="submit" value="Update" class="btn btn-warning">
                   </div>
                 </form>
               <?php
                }
              } else {
                ?>
               <form action="<?= $domain . "proses/save-alter.php"; ?>" method="post">
                 <!--  <div class="form-group">
                   <label for="inputEstimatedBudget">Id alternatif</label>
                   <input type="text" id="inputEstimatedBudget" name="id_alternatif" class="form-control" autofocus>
                 </div> -->
                 <div class="form-group">
                   <label for="inputSpentBudget">Nama Alternatif</label>
                   <input type="text" id="inputSpentBudget" name="nm_alter" class="form-control" autofocus="">
                 </div>
                 <div class="form-group float-right">
                   <a href="#" class="btn btn-secondary">Cancel</a>
                   <input type="submit" value="Save" class="btn btn-primary">
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