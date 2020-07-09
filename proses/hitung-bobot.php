<?php
$id_total = $_GET['id_total'];
$sql = "SELECT * FROM tb_bobot WHERE id_total = '$id_total'";
$result = mysqli_query($koneksi, $sql);
while($row = mysqli_fetch_array($result)){}
