

<div class="row">
    <div class="col-md-12">
      <div class="page-header">
        <h4>
          <i class="glyphicon glyphicon-edit"></i> 
          Ubah Data Kriteria
        </h4>
      </div> <!-- /.page-header -->


      <?php
      if (isset($_GET['id'])) {
        $id_kriteria = $_GET['id'];
        // echo "<pre>";
        // echo var_dump($id_kriteria);
        // echo "</pre>";
        $sql  = "SELECT * FROM kriteria WHERE id_kriteria='$id_kriteria'";
        $result = mysqli_query($koneksi,$sql); 
        $row = mysqli_fetch_array($result);
      }
      ?>

      <!--  -->
      <div class="panel panel-default">
        <div class="panel-body">
          <form class="form-horizontal" method="POST" action="proses-ubah.php">
            <div class="form-group">
              <label class="col-sm-2 control-label">ID KRITERIA</label>
              <div class="col-sm-2">
                <input type="text" class="form-control" name="id_kriteria" value="<?php echo $row['id_kriteria']; ?>" readonly>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Nama Kriteria</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="nama_kriteria" autocomplete="off" value="<?php echo $row['nama_kriteria']; ?>" required>
              </div>
            </div>
            <hr/>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" class="btn btn-primary btn-submit" name="simpan" value="Simpan">
                <a href="index.php" class="btn btn-default btn-reset">Batal</a>
              </div>
            </div>
          </form>
        </div> <!-- /.panel-body -->
      </div> <!-- /.panel -->
    </div> <!-- /.col -->
  </div> <!-- /.row -->
