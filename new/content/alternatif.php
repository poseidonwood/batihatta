 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-6">
           <h1>Tambah Alternatif</h1>
            <a href="#" class="btn btn-success" data-toggle="modal" data-target="#staticBackdrop">Input Nilai</a><hr>
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
                         <a class='btn btn-primary btn-sm' href="<?= $domain . "?page=alternatif&id_alternatif=" . $id_alternatif; ?>">
                           <i class='fas fa-edit'></i>
                         </a>
                         <a class='btn btn-danger btn-sm' href="proses-hapus.php?id=<?= $id_alternatif; ?>" onclick="return confirm(' Anda yakin ingin menghapus?');">
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
              if (isset($_GET['id_alternatif'])) {
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
              if (isset($_GET['id_alternatif'])) {
                $id_alternatif = $_GET['id_alternatif'];
                $s_edit_alternatif = mysqli_query($koneksi, "select *from tbl_alternatif where id_alternatif = '$id_alternatif'");
                while ($f_edit_alternatif = mysqli_fetch_array($s_edit_alternatif)) {
                  $nama_alternatif = $f_edit_alternatif['nama_alternatif'];
                  $id_alternatif = $f_edit_alternatif['id_alternatif'];
              ?>
                 <center>
                   <!-- <h5><strong>Update </strong></h5> -->
                 </center>
                 <form action="#" method="post">
                   <div class="form-group">
                     <label for="inputEstimatedBudget">Id Alternatif</label>
                     <input type="text" id="inputEstimatedBudget" name="id_kriteria" value="<?= $id_alternatif; ?>" class=" form-control" readonly>
                   </div>
                   <div class="form-group">
                     <label for="inputSpentBudget">Nama Alternatif</label>
                     <input type="text" id="inputSpentBudget" name="nm_kriteria" value="<?= $nama_alternatif; ?>" class="form-control" autofocus>
                   </div>
                   <div class="form-group float-right">
                     <a href="<?= $domain . "?page=alternatif"; ?>" class="btn btn-secondary">Cancel</a>
                     <input type="submit" value="Update" class="btn btn-warning">
                   </div>
                 </form>
               <?php
                }
              } else {
                ?>
               <form action="<?= $domain . "proses/save-alternatif.php"; ?>" method="post">
                 <!--  <div class="form-group">
                   <label for="inputEstimatedBudget">Id Kriteria</label>
                   <input type="text" id="inputEstimatedBudget" name="id_kriteria" class="form-control" autofocus>
                 </div> -->
                 <div class="form-group">
                   <label for="inputSpentBudget">Nama Alternatif</label>
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
 <!-- Modal inputan -->
  <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">MASUKAN DATA ALTERNATIF</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
       <form action="view/alternatif/simpan_modal.php" method="post">
        <div class="form-group">
          <label for="inputEmail4">Nama Alternatif</label>
          <input type="text" name="nm_barang" class="form-control" placeholder="Nama Alternatif" autofocus required>
        </div>
       <div class="form-group">
          <label for="inputEmail4">Lokasi</label>
          <input type="text" name="nm_barang" class="form-control" placeholder="Masukan Nilai dari 1-100" autofocus required>
        </div>
       <div class="form-group">
          <label for="inputEmail4">Laba</label>
          <input type="text" name="nm_barang" class="form-control" placeholder="Masukan Nilai dari 1-100" autofocus required>
        </div>
       <div class="form-group">
          <label for="inputEmail4">Keamanan</label>
          <input type="text" name="nm_barang" class="form-control" placeholder="Masukan Nilai dari 1-100" autofocus required>
        </div>
        <div class="form-group">
          <label for="inputAddress2">Biaya Sewa </label>
          <input type="text" name="harga" class="form-control" placeholder="Masukan Nilai dari 1-100" required>
        </div>
        <div class="form-group">
          <label for="inputAddress2">Tata Letak</label>
          <input type="text" name="jarak" class="form-control" placeholder="Masukan Nilai dari 1-100" required>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
      </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>