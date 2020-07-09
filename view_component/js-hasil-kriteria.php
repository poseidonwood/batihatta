<script>
  function reload() {
    window.location.href = "<?= $domain; ?>?page=analisa-kriteria-hitung";
  }

  function hitung_ulang() {
    window.location.href = "<?= $domain; ?>?page=analisa-kriteria";
  }

  function alert() {
    Swal.fire({
      title: '',
      text: "Button is working",
      icon: 'success',
      showCancelButton: false

    })
  }

  function excel_f4() {
    var f4 = document.getElementById("f4").value;
    var g3 = 1 / f4;
    document.getElementById("g3").innerHTML = g3.toFixed(2);

  }

  function excel_f5() {
    var f5 = document.getElementById("f5").value;
    var h3 = 1 / f5;
    var f5_sumf3f7 = parseFloat(f3) + parseFloat(f4) + parseFloat(f5);
    document.getElementById("h3").innerHTML = h3.toFixed(2);
    //  document.getElementById("sumf3f7").innerHTML = f5_sumf3f7;
  }

  function excel_f6() {
    var f6 = document.getElementById("f6").value;
    var i3 = 1 / f6;
    document.getElementById("i3").innerHTML = i3.toFixed(2);
  }

  function excel_f7() {
    var f7 = document.getElementById("f7").value;
    var j3 = 1 / f7;
    document.getElementById("j3").innerHTML = j3.toFixed(2);
  }

  function excel_g5() {
    var g5 = document.getElementById("g5").value;
    var h4 = 1 / g5;
    document.getElementById("h4").innerHTML = h4.toFixed(2);
  }

  function excel_g6() {
    var g6 = document.getElementById("g6").value;
    var i4 = 1 / g6;
    document.getElementById("i4").innerHTML = i4.toFixed(2);
  }

  function excel_g7() {
    var g7 = document.getElementById("g7").value;
    var j4 = 1 / g7;
    document.getElementById("j4").innerHTML = j4.toFixed(2);
  }

  function excel_h6() {
    var h6 = document.getElementById("h6").value;
    var i5 = 1 / h6;
    document.getElementById("i5").innerHTML = i5.toFixed(2);
  }

  function excel_h7() {
    var h7 = document.getElementById("h7").value;
    var j5 = 1 / h7;
    document.getElementById("j5").innerHTML = j5.toFixed(2);
  }

  function excel_i7() {
    var i7 = document.getElementById("i7").value;
    var j6 = 1 / i7;
    document.getElementById("j6").innerHTML = j6.toFixed(2);
  }

  function tampil_total() {
    Swal.fire({
      title: 'Apakah data sudah diisi semua ?',
      text: "Jika sudah, tekan tombol YES.",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'YES'
    }).then((result) => {
      if (result.value) {

        var id_bobot = $("#id_total").val();
        var x = document.getElementById('result_tr').style;
        // var y = document.getElementById('submit_button').style;
        // var z = document.getElementById('tampil_normalisasi').style;
        var a = document.getElementById('count_button').style;
        if (x.display === "none") {
          // x.display = 'table-row';
          // z.display = '';
          // y.display = '';
          a.display = 'none';
          // document.getElementById("id_total").value = "<?= uniqid(); ?>";
          //tampilan sub total f3:f7
          var f3 = document.getElementById("f3").innerHTML;
          var f4 = document.getElementById("f4").value;
          var f5 = document.getElementById("f5").value;
          var f6 = document.getElementById("f6").value;
          var f7 = document.getElementById("f7").value;
          var hasil_sumf3f7 = parseFloat(f3) + parseFloat(f4) + parseFloat(f5) + parseFloat(f6) + parseFloat(f7);
          document.getElementById("sumf3f7").innerHTML = hasil_sumf3f7.toFixed(2);
          document.getElementById("total_1").value = hasil_sumf3f7.toFixed(2);
          //menampikan f3:f7/total tampilan di modal f3:f7 
          document.getElementById("m_f3").innerHTML = (parseFloat(f3) / hasil_sumf3f7).toFixed(2);
          document.getElementById("m_f4").innerHTML = (parseFloat(f4) / hasil_sumf3f7).toFixed(2);
          document.getElementById("m_f5").innerHTML = (parseFloat(f5) / hasil_sumf3f7).toFixed(2);
          document.getElementById("m_f6").innerHTML = (parseFloat(f6) / hasil_sumf3f7).toFixed(2);
          document.getElementById("m_f7").innerHTML = (parseFloat(f7) / hasil_sumf3f7).toFixed(2);
          //tampilan sub total g3:g7
          var g3 = document.getElementById("g3").innerHTML;
          var g4 = document.getElementById("g4").innerHTML;
          var g5 = document.getElementById("g5").value;
          var g6 = document.getElementById("g6").value;
          var g7 = document.getElementById("g7").value;
          var hasil_sumg3g7 = parseFloat(g3) + parseFloat(g4) + parseFloat(g5) + parseFloat(g6) + parseFloat(g7);
          document.getElementById("sumg3g7").innerHTML = hasil_sumg3g7.toFixed(2);
          document.getElementById("total_2").value = hasil_sumg3g7.toFixed(2);
          //menampikan g3:g7/total tampilan di modal g3:g7 
          document.getElementById("m_g3").innerHTML = (parseFloat(g3) / hasil_sumg3g7).toFixed(2);
          document.getElementById("m_g4").innerHTML = (parseFloat(g4) / hasil_sumg3g7).toFixed(2);
          document.getElementById("m_g5").innerHTML = (parseFloat(g5) / hasil_sumg3g7).toFixed(2);
          document.getElementById("m_g6").innerHTML = (parseFloat(g6) / hasil_sumg3g7).toFixed(2);
          document.getElementById("m_g7").innerHTML = (parseFloat(g7) / hasil_sumg3g7).toFixed(2);
          //tampilan sub total h3:h7
          var h3 = document.getElementById("h3").innerHTML;
          var h4 = document.getElementById("h4").innerHTML;
          var h5 = document.getElementById("h5").innerHTML;
          var h6 = document.getElementById("h6").value;
          var h7 = document.getElementById("h7").value;
          var hasil_sumh3h7 = parseFloat(h3) + parseFloat(h4) + parseFloat(h5) + parseFloat(h6) + parseFloat(h7);
          document.getElementById("sumh3h7").innerHTML = hasil_sumh3h7.toFixed(2);
          document.getElementById("total_3").value = hasil_sumh3h7.toFixed(2);
          //menampikan h3:h7/total tampilan di modal h3:h7
          document.getElementById("m_h3").innerHTML = (parseFloat(h3) / hasil_sumh3h7).toFixed(2);
          document.getElementById("m_h4").innerHTML = (parseFloat(h4) / hasil_sumh3h7).toFixed(2);
          document.getElementById("m_h5").innerHTML = (parseFloat(h5) / hasil_sumh3h7).toFixed(2);
          document.getElementById("m_h6").innerHTML = (parseFloat(h6) / hasil_sumh3h7).toFixed(2);
          document.getElementById("m_h7").innerHTML = (parseFloat(h7) / hasil_sumh3h7).toFixed(2);
          //tampilan sub total i3:i7
          var i3 = document.getElementById("i3").innerHTML;
          var i4 = document.getElementById("i4").innerHTML;
          var i5 = document.getElementById("i5").innerHTML;
          var i6 = document.getElementById("i6").innerHTML;
          var i7 = document.getElementById("i7").value;
          var hasil_sumi3i7 = parseFloat(i3) + parseFloat(i4) + parseFloat(i5) + parseFloat(i6) + parseFloat(i7);
          document.getElementById("sumi3i7").innerHTML = hasil_sumi3i7.toFixed(2);
          document.getElementById("total_4").value = hasil_sumi3i7.toFixed(2);
          //menampikan i3:i7/total tampilan di modal i3:i7
          document.getElementById("m_i3").innerHTML = (parseFloat(i3) / hasil_sumi3i7).toFixed(2);
          document.getElementById("m_i4").innerHTML = (parseFloat(i4) / hasil_sumi3i7).toFixed(2);
          document.getElementById("m_i5").innerHTML = (parseFloat(i5) / hasil_sumi3i7).toFixed(2);
          document.getElementById("m_i6").innerHTML = (parseFloat(i6) / hasil_sumi3i7).toFixed(2);
          document.getElementById("m_i7").innerHTML = (parseFloat(i7) / hasil_sumi3i7).toFixed(2);
          //tampilan sub total j3:j7
          var j3 = document.getElementById("j3").innerHTML;
          var j4 = document.getElementById("j4").innerHTML;
          var j5 = document.getElementById("j5").innerHTML;
          var j6 = document.getElementById("j6").innerHTML;
          var j7 = document.getElementById("j7").innerHTML;
          var hasil_sumj3j7 = parseFloat(j3) + parseFloat(j4) + parseFloat(j5) + parseFloat(j6) + parseFloat(j7);
          document.getElementById("sumj3j7").innerHTML = hasil_sumj3j7.toFixed(2);
          document.getElementById("total_5").value = hasil_sumj3j7.toFixed(2);
          //menampikan j3:j7/total tampilan di modal j3:j7
          document.getElementById("m_j3").innerHTML = (parseFloat(j3) / hasil_sumj3j7).toFixed(2);
          document.getElementById("m_j4").innerHTML = (parseFloat(j4) / hasil_sumj3j7).toFixed(2);
          document.getElementById("m_j5").innerHTML = (parseFloat(j5) / hasil_sumj3j7).toFixed(2);
          document.getElementById("m_j6").innerHTML = (parseFloat(j6) / hasil_sumj3j7).toFixed(2);
          document.getElementById("m_j7").innerHTML = (parseFloat(j7) / hasil_sumj3j7).toFixed(2);

          //cari bobot
          //bobot1
          var b_m_f3 = document.getElementById("m_f3").innerHTML;
          var b_m_g3 = document.getElementById("m_g3").innerHTML;
          var b_m_h3 = document.getElementById("m_h3").innerHTML;
          var b_m_i3 = document.getElementById("m_i3").innerHTML;
          var b_m_j3 = document.getElementById("m_j3").innerHTML;
          var bobot1 = (parseFloat(b_m_f3) + parseFloat(b_m_g3) + parseFloat(b_m_h3) + parseFloat(b_m_i3) + parseFloat(b_m_j3)) / 5;
          //bobot2
          var b_m_f4 = document.getElementById("m_f4").innerHTML;
          var b_m_g4 = document.getElementById("m_g4").innerHTML;
          var b_m_h4 = document.getElementById("m_h4").innerHTML;
          var b_m_i4 = document.getElementById("m_i4").innerHTML;
          var b_m_j4 = document.getElementById("m_j4").innerHTML;
          var bobot2 = (parseFloat(b_m_f4) + parseFloat(b_m_g4) + parseFloat(b_m_h4) + parseFloat(b_m_i4) + parseFloat(b_m_j4)) / 5;

          //bobot3
          var b_m_f5 = document.getElementById("m_f5").innerHTML;
          var b_m_g5 = document.getElementById("m_g5").innerHTML;
          var b_m_h5 = document.getElementById("m_h5").innerHTML;
          var b_m_i5 = document.getElementById("m_i5").innerHTML;
          var b_m_j5 = document.getElementById("m_j5").innerHTML;
          var bobot3 = (parseFloat(b_m_f5) + parseFloat(b_m_g5) + parseFloat(b_m_h5) + parseFloat(b_m_i5) + parseFloat(b_m_j5)) / 5;

          //bobot4
          var b_m_f6 = document.getElementById("m_f6").innerHTML;
          var b_m_g6 = document.getElementById("m_g6").innerHTML;
          var b_m_h6 = document.getElementById("m_h6").innerHTML;
          var b_m_i6 = document.getElementById("m_i6").innerHTML;
          var b_m_j6 = document.getElementById("m_j6").innerHTML;
          var bobot4 = (parseFloat(b_m_f6) + parseFloat(b_m_g6) + parseFloat(b_m_h6) + parseFloat(b_m_i6) + parseFloat(b_m_j6)) / 5;
          //bobot5
          var b_m_f7 = document.getElementById("m_f7").innerHTML;
          var b_m_g7 = document.getElementById("m_g7").innerHTML;
          var b_m_h7 = document.getElementById("m_h7").innerHTML;
          var b_m_i7 = document.getElementById("m_i7").innerHTML;
          var b_m_j7 = document.getElementById("m_j7").innerHTML;
          // proses p vector
          var bobot5 = (parseFloat(b_m_f7) + parseFloat(b_m_g7) + parseFloat(b_m_h7) + parseFloat(b_m_i7) + parseFloat(b_m_j7)) / 5;
          //akhir cari bobot


          //simpen total di tbl_total
          var total_1 = $("#total_1").val();
          var total_2 = $("#total_2").val();
          var total_3 = $("#total_3").val();
          var total_4 = $("#total_4").val();
          var total_5 = $("#total_5").val();
          $.ajax({
            url: '<?= $domain; ?>proses/simpan-hasil.php',
            data: 'id_bobot=' + id_bobot + '&total_1=' + total_1 + '&total_2=' + total_2 + '&total_3=' + total_3 + '&total_4=' + total_4 + '&total_5=' + total_5 + '&bobot=' + bobot1 + '&bobot2=' + bobot2 + '&bobot3=' + bobot3 + '&bobot4=' + bobot4 + '&bobot5=' + bobot5,

            success: function() {
              Swal.fire({
                title: '',
                text: "Lanjut Ke Proses Berikutnya",
                icon: 'success',
                showCancelButton: false,
                showConfirmButton: false


              })
              window.location.href = '<?= $domain . "?page=analisa-kriteria-hitung&id_bobot=" . $id_bobot; ?>';
            }
          });


        } else {
          x.display = 'none';
          z.display = 'none';
        }

      }
    })

  }

  function hitung_alternatif() {
    Swal.fire({
      title: 'Apakah data sudah diisi semua ?',
      text: "Jika sudah, tekan tombol Yes.",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, Cek Total'
    }).then((result) => {
      if (result.value) {
        Swal.fire(
          'Deleted!',
          'Your file has been deleted.',
          'success'
        )
      }
    })
  }
</script>
<!-- Button trigger modal -->
<!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
   Launch demo modal
 </button>-->

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-light">
        <h5 class="modal-title" id="exampleModalLongTitle">
          <!-- Nav tabs -->
          <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="pill" href="#table">Result Normalisasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#menu1">Menu 1</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#menu2">Menu 2</a>
            </li>
          </ul>
        </h5>

      </div>
      <div class="modal-body">
        <!--isi modal -->


        <!-- Tab panes -->
        <div class="tab-content">
          <div class="tab-pane container active" id="table">
            <!--Start Panes table-->
            <h3>Result Table</h3>
            <div class="table-responsive">
              <table class="table table-bordered table-striped table-sm" style="table-layout: fixed">
                <thead class="thead-light">
                  <tr>
                    <th>Kriteria</th>
                    <th style="width:20%"><?php echo $b1['kriteria1']; ?></th>
                    <th style="width:20%"><?php echo $b2['kriteria1']; ?></th>
                    <th style="width:20%"><?php echo $b3['kriteria1']; ?></th>
                    <th style="width:20%"><?php echo $b4['kriteria1']; ?></th>
                    <th style="width:10%"><?php echo $b5['kriteria1']; ?></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th><?php echo $b1['kriteria1']; ?></th> <!-- Baris Umur -->
                    <td align="center" id="m_f3">f3-</td>
                    <td align="center">
                      <font color="red">
                        <p id="m_g3">g3-</p>
                      </font>
                    </td>
                    <td align="center">
                      <font color="red">
                        <p id="m_h3">h3-</p>
                      </font>
                    </td>
                    <td align="center">
                      <font color="red" id="m_i3">i3</font>
                    </td>
                    <td align="center">
                      <font color="red" id="m_j3">j3</font>
                    </td>
                  </tr>

                  <tr>
                    <th><?php echo $b2['kriteria1']; ?></th> <!-- Baris IPK -->
                    <td align="center">
                      <font color="red" id="m_f4">f4</font>
                    </td>
                    <td align="center">
                      <font color="red" id="m_g4">g4</font>
                    </td>
                    <td align="center">
                      <font color="red" id="m_h4">h4</font>
                    </td>
                    <td align="center">
                      <font color="red" id="m_i4">i4</font>
                    </td>
                    <td align="center">
                      <font color="red" id="m_j4">j4</font>
                    </td>

                  </tr>

                  <tr>
                    <th><?php echo $b3['kriteria1']; ?></th> <!-- baris Penghasilan Orangtua -->
                    <td align="center">
                      <font color="red" id="m_f5">f5</font>
                    </td>
                    <td align="center">
                      <font color="red" id="m_g5">g5</font>
                    </td>
                    <td align="center">
                      <font color="red" id="m_h5">h5</font>
                    </td>
                    <td align="center">
                      <font color="red" id="m_i5">i5</font>
                    </td>
                    <td align="center">
                      <font color="red" id="m_j5">j5</font>
                    </td>
                  </tr>

                  <tr>
                    <th><?php echo $b4['kriteria1']; ?></th> <!-- baris semester -->
                    <td align="center">
                      <font color="red" id="m_f6">f6</font>
                    </td>
                    <td align="center">
                      <font color="red" id="m_g6">g6</font>
                    </td>
                    <td align="center">
                      <font color="red" id="m_h6">h6</font>
                    </td>
                    <td align="center">
                      <font color="red" id="m_i6">i6</font>
                    </td>
                    <td align="center">
                      <font color="red" id="m_j6">j6</font>
                    </td>
                  </tr>

                  <tr>
                    <th><?php echo $b5['kriteria1']; ?></th> <!-- baris semester -->
                    <td align="center">
                      <font color="red" id="m_f7">f7</font>
                    </td>
                    <td align="center">
                      <font color="red" id="m_g7">g7</font>
                    </td>
                    <td align="center">
                      <font color="red" id="m_h7">h7</font>
                    </td>
                    <td align="center">
                      <font color="red" id="m_i7">i7</font>
                    </td>
                    <td align="center">
                      <font color="red" id="m_j7">j7</font>
                    </td>
                  </tr>

                  <tr id="m_result_tr" style="display: none;" class="bg-primary">
                    <td align="center">TOTAL</td>
                    <td class="text-center" id="m_sumf3f7">0</td>
                    <td class="text-center" id="m_sumg3g7">0</td>
                    <td class="text-center" id="m_sumh3h7">0</td>
                    <td class="text-center" id="m_sumi3i7">2</td>
                    <td class="text-center" id="m_sumj3j7">2</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!--End Panes Table-->
          </div>
          <div class="tab-pane container fade" id="menu1">...</div>
          <div class="tab-pane container fade" id="menu2">...</div>
        </div>


        <!-- Akhir isi modal -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- modal tambah hitung -->
<div class="modal fade" id="mulaihitung" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="d-flex justify-content-center">
        <div class="spinner-border -5" role="status">
          <span class="sr-only">Loading...</span>
        </div>
        &nbsp;&nbsp; <h3>Generate Code...</h3>
      </div>
    </div>
  </div>
</div>

<!-- akhir modal tambah hitung-->