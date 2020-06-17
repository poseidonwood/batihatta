
  <h5 class="card-header">Analisa Kriteria</h5>
  <div class="card-body">
  	<div class = "table-responsive">
  	<form action = "#" method="post">
    <table class="table">
  <caption>List of users</caption>
  <thead>
    <tr>
      <th scope="col">Kriteria Pertama</th>
      <th scope="col">Perbandingan</th>
      <th scope="col">Kriteria Kedua</th
    </tr>
  </thead>
  <tbody>
  	<?php
  	// include "../../config/database.php";

  	$query_perb_kriteria = mysqli_query($koneksi,"SELECT *from tb_perb_kriteria");
  	while($get_query_perb_kriteria = mysqli_fetch_array($query_perb_kriteria)){

// id_kriteria
$nilai_banding = $get_query_perb_kriteria['nilai_banding'];
$kriteria1 = $get_query_perb_kriteria['kriteria1'];
$nm_banding = $get_query_perb_kriteria['nm_banding'];
$kriteria2 = $get_query_perb_kriteria['kriteria2'];
?>
	<tr>
      <td><?=$kriteria1;?></td>
      <td>
      	<select name = "nilai_banding">
      		<?php
      		if($nilai_banding==1 || $nilai_banding <=10){
      			echo"<option value='$nilai_banding'>$nm_banding</option>
			<option value='1'>1. Sama penting dengan</option>
			<option value='2'>2. Mendekati sedikit lebih penting dari</option>
            <option value='3'>3. Sedikit lebih penting dari</option>
            <option value='4'>4. Mendekati lebih penting dari</option>
            <option value='5'>5. Lebih penting dari</option>
            <option value='6'>6. Mendekati sangat penting dari</option>
            <option value='7'>7. Sangat penting dari</option>
            <option value='8'>8. Mendekati mutlak dari</option>
            <option value='9'>9. Mutlak sangat penting dari</option>";
      		}else{
			echo"UNKNOWN";
      		}
            ?>
      	</select>
      </td>
      <td><?=$kriteria2;?></td>
    </tr>
    <?php
  	}
  	?>
    
  </tbody>
</table>
<input type ="submit" class="btn btn-primary" value="Proses">
</form>
</div>
  </div>

