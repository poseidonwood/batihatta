  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <!-- <h1>List Analisa Kriteria</h1> -->
                  </div>
                  <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="#">Home</a></li>
                          <li class="breadcrumb-item active">Analisa Kriteria</li>
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
                  <h3 class="card-title"><button type="button" class="btn btn-success"><i class="fas fa-plus"></i> Add New</button></h3>
                  <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                          <i class="fas fa-minus"></i></button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                          <i class="fas fa-times"></i></button>
                  </div>
              </div>
              <div class="card-body p-0">
                  <table class="table table-striped projects">
                      <thead>
                          <tr>
                              <th style="width: 1%">
                                  No
                              </th>
                              <th style="width: 20%">
                                  Id bobot
                              </th>
                              <th>
                                  Project Progress
                              </th>
                              <th style="width: 8%" class="text-center">
                                  Status
                              </th>
                              <th style="width: 20%">
                              </th>
                          </tr>
                      </thead>
                      <tbody>
                      <?php
                        $sql = "SELECT * FROM tbl_bobot";
                        $result = mysqli_query($koneksi, $sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                          <tr>
                              <td>
                              <?=$row['NO']?>
                              </td>
                              <td>
                              <?=$row['NO']?>
                              </td>
                              <td>
                                  <ul class="list-inline">
                                      <li class="list-inline-item">
                                          <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar.png">
                                      </li>
                                      <li class="list-inline-item">
                                          <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar2.png">
                                      </li>
                                      <li class="list-inline-item">
                                          <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar3.png">
                                      </li>
                                      <li class="list-inline-item">
                                          <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar4.png">
                                      </li>
                                  </ul>
                              </td>
                              <td class="project_progress">
                                  <div class="progress progress-sm">
                                      <div class="progress-bar bg-green" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%">
                                      </div>
                                  </div>
                                  <small>
                                      57% Complete
                                  </small>
                              </td>
                              <td class="project-state">
                                  <span class="badge badge-success">Success</span>
                              </td>
                              <td class="project-actions text-right">
                                  <a class="btn btn-primary btn-sm" href="#">
                                      <i class="fas fa-folder">
                                      </i>
                                      View
                                  </a>
                                  <a class="btn btn-info btn-sm" href="#">
                                      <i class="fas fa-pencil-alt">
                                      </i>
                                      Edit
                                  </a>
                                  <a class="btn btn-danger btn-sm" href="#">
                                      <i class="fas fa-trash">
                                      </i>
                                      Delete
                                  </a>
                              </td>
                          </tr>
                      </tbody>
                  </table>
              </div>
              <!-- /.card-body -->
          </div>
          <!-- /.card -->

      </section>
      <!-- /.content -->
  </div>  <!-- /.content-wrapper -->