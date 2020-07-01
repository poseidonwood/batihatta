<?php
include "../config/database.php";
//random string
function generateRandomString($length = 6)
{
  return substr(str_shuffle(str_repeat($x = '0123456789', ceil($length / strlen($x)))), 1, $length);
}
//random string2
function generateRandomString2($length = 6)
{
  return substr(str_shuffle(str_repeat($x = '0123456789', ceil($length / strlen($x)))), 1, $length);
}
//random string3
function generateRandomString3($length = 6)
{
  return substr(str_shuffle(str_repeat($x = '0123456789', ceil($length / strlen($x)))), 1, $length);
}
//random string4
function generateRandomString4($length = 6)
{
  return substr(str_shuffle(str_repeat($x = '0123456789', ceil($length / strlen($x)))), 1, $length);
}
//random string5
function generateRandomString5($length = 6)
{
  return substr(str_shuffle(str_repeat($x = '0123456789', ceil($length / strlen($x)))), 1, $length);
}
$id_alternatif = generateRandomString();
$id_ranking1 = generateRandomString();
$id_ranking2 = generateRandomString2();
$id_ranking3 = generateRandomString3();
$id_ranking4 = generateRandomString4();
$id_ranking5 = generateRandomString5();
$id_bobot = $_POST['id_bobot'];
//colom 1 f3-f7 (menurun untuk di sum)
$f3 = $_POST['f3'];
$f4 = $_POST['f4'];
$f5 = $_POST['f5'];
$f6 = $_POST['f6'];
$f7 = $_POST['f7'];
//colom 2 g4-g7 (menurun untuk di sum)
$g3 = $_POST['g3'];
$g4 = $_POST['g4'];
$g5 = $_POST['g5'];
$g6 = $_POST['g6'];
$g7 = $_POST['g7'];
//colom 3 h3-h7 (menurun untuk di sum)
$h3 = $_POST['h3'];
$h4 = $_POST['h4'];
$h5 = $_POST['h5'];
$h6 = $_POST['h6'];
$h7 = $_POST['h7'];
//colom 4 i3-i7 (menurun untuk di sum)
$i3 = $_POST['i3'];
$i4 = $_POST['i4'];
$i5 = $_POST['i5'];
$i6 = $_POST['i6'];
$i7 = $_POST['i7'];
//colom 5 j3-j7 (menurun untuk di sum)
$j3 = $_POST['j3'];
$j4 = $_POST['j4'];
$j5 = $_POST['j5'];
$j6 = $_POST['j6'];
$j7 = $_POST['j7'];


//pembagi 
$pembagi1 = (pow($f3, 2)) + (pow($f4, 2)) + (pow($f5, 2)) + (pow($f6, 2)) + (pow($f7, 2));
$sqrt_pembagi1 = sqrt($pembagi1);
//pembagi2
$pembagi2 = (pow($g3, 2)) + (pow($g4, 2)) + (pow($g5, 2)) + (pow($g6, 2)) + (pow($g7, 2));
$sqrt_pembagi2 = sqrt($pembagi2);
//pembagi3
$pembagi3 = (pow($h3, 2)) + (pow($h4, 2)) + (pow($h5, 2)) + (pow($h6, 2)) + (pow($h7, 2));
$sqrt_pembagi3 = sqrt($pembagi3);
//pembagi4
$pembagi4 = (pow($i3, 2)) + (pow($i4, 2)) + (pow($i5, 2)) + (pow($i6, 2)) + (pow($i7, 2));
$sqrt_pembagi4 = sqrt($pembagi4);
//pembagi5
$pembagi5 = (pow($j3, 2)) + (pow($j4, 2)) + (pow($j5, 2)) + (pow($j6, 2)) + (pow($j7, 2));
$sqrt_pembagi5 = sqrt($pembagi5);



$simpan = mysqli_query($koneksi, "insert into tbl_alternatif values ('$id_alternatif','$id_bobot','$sqrt_pembagi1','$sqrt_pembagi2','$sqrt_pembagi3',
'$sqrt_pembagi4','$sqrt_pembagi5',current_timestamp())");
if ($simpan) {
  //cari matrix ternormalisasi

  $update = mysqli_query($koneksi, "update tbl_bobot set status_bobot='NORMALISASI TERBOBOT' where id_bobot='$id_bobot'");
  if ($update) {
    //Panggil bobot 
    $tampil_bobot = mysqli_query($koneksi, "select * from tbl_bobot where id_bobot='$id_bobot'");
    $f_tampil_bobot = mysqli_fetch_array($tampil_bobot);
    $bobot = $f_tampil_bobot['bobot'];
    $bobot2 = $f_tampil_bobot['bobot2'];
    $bobot3 = $f_tampil_bobot['bobot3'];
    $bobot4 = $f_tampil_bobot['bobot4'];
    $bobot5 = $f_tampil_bobot['bobot5'];
    //hitung matrix dan dikali bobot
    //colom 1 f3-f7 (menurun untuk di sum)
    $h_f3 = ($f3 / $sqrt_pembagi1) * $bobot;
    $h_f4 = ($f4 / $sqrt_pembagi1) * $bobot;
    $h_f5 = ($f5 / $sqrt_pembagi1) * $bobot;
    $h_f6 = ($f6 / $sqrt_pembagi1) * $bobot;
    $h_f7 = ($f7 / $sqrt_pembagi1) * $bobot;
    //colom 2 g4-g7 (menurun untuk di sum)
    $h_g3 = ($g3 / $sqrt_pembagi2) * $bobot2;
    $h_g4 = ($g4 / $sqrt_pembagi2) * $bobot2;
    $h_g5 = ($g5 / $sqrt_pembagi2) * $bobot2;
    $h_g6 = ($g6 / $sqrt_pembagi2) * $bobot2;
    $h_g7 = ($g7 / $sqrt_pembagi2) * $bobot2;
    //colom 3 h3-h7 (menurun untuk di sum)
    $h_h3 = ($h3 / $sqrt_pembagi3) * $bobot3;
    $h_h4 = ($h4 / $sqrt_pembagi3) * $bobot3;
    $h_h5 = ($h5 / $sqrt_pembagi3) * $bobot3;
    $h_h6 = ($h6 / $sqrt_pembagi3) * $bobot3;
    $h_h7 = ($h7 / $sqrt_pembagi3) * $bobot3;
    //colom 4 i3-i7 (menurun untuk di sum)
    $h_i3 = ($i3 / $sqrt_pembagi4) * $bobot4;
    $h_i4 = ($i4 / $sqrt_pembagi4) * $bobot4;
    $h_i5 = ($i5 / $sqrt_pembagi4) * $bobot4;
    $h_i6 = ($i6 / $sqrt_pembagi4) * $bobot4;
    $h_i7 = ($i7 / $sqrt_pembagi4) * $bobot4;
    //colom 5 j3-j7 (menurun untuk di sum)
    $h_j3 = ($j3 / $sqrt_pembagi5) * $bobot5;
    $h_j4 = ($j4 / $sqrt_pembagi5) * $bobot5;
    $h_j5 = ($j5 / $sqrt_pembagi5) * $bobot5;
    $h_j6 = ($j6 / $sqrt_pembagi5) * $bobot5;
    $h_j7 = ($j7 / $sqrt_pembagi5) * $bobot5;

    //rounding desimal 3 digit
    $matrixf3 = round($h_f3, 3);
    $matrixf4 = round($h_f4, 3);
    $matrixf5 = round($h_f5, 3);
    $matrixf6 = round($h_f6, 3);
    $matrixf7 = round($h_f7, 3);
    $benefit1 = max($matrixf3, $matrixf4, $matrixf5, $matrixf6, $matrixf7);
    $cost1 = min($matrixf3, $matrixf4, $matrixf5, $matrixf6, $matrixf7);
    //colom 2 g4-g7 (menurun untuk di sum)
    $matrixg3 = round($h_g3, 3);
    $matrixg4 = round($h_g4, 3);
    $matrixg5 = round($h_g5, 3);
    $matrixg6 = round($h_g6, 3);
    $matrixg7 = round($h_g7, 3);
    $benefit2 = max($matrixg3, $matrixg4, $matrixg5, $matrixg6, $matrixg7);
    $cost2 = min($matrixg3, $matrixg4, $matrixg5, $matrixg6, $matrixg7);
    //colom 3 h3-h7 (menurun untuk di sum)
    $matrixh3 = round($h_h3, 3);
    $matrixh4 = round($h_h4, 3);
    $matrixh5 = round($h_h5, 3);
    $matrixh6 = round($h_h6, 3);
    $matrixh7 = round($h_h7, 3);
    $benefit3 = max($matrixh3, $matrixh4, $matrixh5, $matrixh6, $matrixh7);
    $cost3 = min($matrixh3, $matrixh4, $matrixh5, $matrixh6, $matrixh7);
    //colom 4 i3-i7 (menurun untuk di sum)
    $matrixi3 = round($h_i3, 3);
    $matrixi4 = round($h_i4, 3);
    $matrixi5 = round($h_i5, 3);
    $matrixi6 = round($h_i6, 3);
    $matrixi7 = round($h_i7, 3);
    $benefit4 = max($matrixi3, $matrixi4, $matrixi5, $matrixi6, $matrixi7);
    $cost4 = min($matrixi3, $matrixi4, $matrixi5, $matrixi6, $matrixi7);
    //colom 5 j3-j7 (menurun untuk di sum)
    $matrixj3 = round($h_j3, 3);
    $matrixj4 = round($h_j4, 3);
    $matrixj5 = round($h_j5, 3);
    $matrixj6 = round($h_j6, 3);
    $matrixj7 = round($h_j7, 3);
    $benefit5 = max($matrixj3, $matrixj4, $matrixj5, $matrixj6, $matrixj7);
    $cost5 = min($matrixj3, $matrixj4, $matrixj5, $matrixj6, $matrixj7);



    //dplus
    $h_d1plus = (pow(($benefit1 - $matrixf3), 2)) + (pow(($benefit2 - $matrixg3), 2)) + (pow(($benefit3 - $matrixh3), 2)) + (pow(($cost4 - $matrixi3), 2)) + (pow(($benefit5 - $matrixj3), 2));
    $d1plus = sqrt($h_d1plus);
    $h_d2plus = (pow(($benefit1 - $matrixf4), 2)) + (pow(($benefit2 - $matrixg4), 2)) + (pow(($benefit3 - $matrixh4), 2)) + (pow(($cost4 - $matrixi4), 2)) + (pow(($benefit5 - $matrixj4), 2));
    $d2plus = sqrt($h_d2plus);
    $h_d3plus = (pow(($benefit1 - $matrixf5), 2)) + (pow(($benefit2 - $matrixg5), 2)) + (pow(($benefit3 - $matrixh5), 2)) + (pow(($cost4 - $matrixi5), 2)) + (pow(($benefit5 - $matrixj5), 2));
    $d3plus = sqrt($h_d3plus);
    $h_d4plus = (pow(($benefit1 - $matrixf6), 2)) + (pow(($benefit2 - $matrixg6), 2)) + (pow(($benefit3 - $matrixh6), 2)) + (pow(($cost4 - $matrixi6), 2)) + (pow(($benefit5 - $matrixj6), 2));
    $d4plus = sqrt($h_d4plus);
    $h_d5plus = (pow(($benefit1 - $matrixf7), 2)) + (pow(($benefit2 - $matrixg7), 2)) + (pow(($benefit3 - $matrixh7), 2)) + (pow(($cost4 - $matrixi7), 2)) + (pow(($benefit5 - $matrixj7), 2));
    $d5plus = sqrt($h_d5plus);
    // dmin
    $h_d1min = (pow(($cost1 - $matrixf3), 2)) + (pow(($cost2 - $matrixg3), 2)) + (pow(($cost3 - $matrixh3), 2)) + (pow(($benefit4 - $matrixi3), 2)) + (pow(($cost5 - $matrixj3), 2));
    $d1min = sqrt($h_d1min);
    $h_d2min = (pow(($cost1 - $matrixf4), 2)) + (pow(($cost2 - $matrixg4), 2)) + (pow(($cost3 - $matrixh4), 2)) + (pow(($benefit4 - $matrixi4), 2)) + (pow(($cost5 - $matrixj4), 2));
    $d2min = sqrt($h_d2min);
    $h_d3min = (pow(($cost1 - $matrixf5), 2)) + (pow(($cost2 - $matrixg5), 2)) + (pow(($cost3 - $matrixh5), 2)) + (pow(($benefit4 - $matrixi5), 2)) + (pow(($cost5 - $matrixj5), 2));
    $d3min = sqrt($h_d3min);
    $h_d4min = (pow(($cost1 - $matrixf6), 2)) + (pow(($cost2 - $matrixg6), 2)) + (pow(($cost3 - $matrixh6), 2)) + (pow(($benefit4 - $matrixi6), 2)) + (pow(($cost5 - $matrixj6), 2));
    $d4min = sqrt($h_d4min);
    $h_d5min = (pow(($cost1 - $matrixf7), 2)) + (pow(($cost2 - $matrixg7), 2)) + (pow(($cost3 - $matrixh7), 2)) + (pow(($benefit4 - $matrixi7), 2)) + (pow(($cost5 - $matrixj7), 2));
    $d5min = sqrt($h_d5min);
    //rank
    $v1 = $d1min / ($d1min + $d1plus);
    $v2 = $d2min / ($d2min + $d2plus);
    $v3 = $d3min / ($d3min + $d3plus);
    $v4 = $d4min / ($d4min + $d4plus);
    $v5 = $d5min / ($d5min + $d5plus);
    //simpan db 
    $simpan_ranking1 = mysqli_query($koneksi, "insert into tbl_ranking values 
    ('$id_ranking1','$id_bobot','$id_alternatif','$v1',current_timestamp())");
    $simpan_ranking2 = mysqli_query($koneksi, "insert into tbl_ranking values 
    ('$id_ranking2','$id_bobot','$id_alternatif','$v2',current_timestamp())");
    $simpan_ranking3 = mysqli_query($koneksi, "insert into tbl_ranking values 
    ('$id_ranking3','$id_bobot','$id_alternatif','$v3',current_timestamp())");
    $simpan_ranking4 = mysqli_query($koneksi, "insert into tbl_ranking values 
    ('$id_ranking4','$id_bobot','$id_alternatif','$v4',current_timestamp())");
    $simpan_ranking5 = mysqli_query($koneksi, "insert into tbl_ranking values 
    ('$id_ranking5','$id_bobot','$id_alternatif','$v5',current_timestamp())");
    //update status bobot
    $update_r = mysqli_query($koneksi, "update tbl_bobot set status_bobot='SELESAI - RANKING KELUAR' where id_bobot='$id_bobot'");
    echo "<script>window.location.href='$domain?page=normalisasi-terbobot&id_bobot=$id_bobot&matrixf3=$matrixf3&matrixf4=$matrixf4&matrixf5=$matrixf5&matrixf6=$matrixf6&matrixf7=$matrixf7&matrixg3=$matrixg3&matrixg4=$matrixg4&matrixg5=$matrixg5&matrixg6=$matrixg6&matrixg7=$matrixg7&matrixh3=$matrixh3&matrixh4=$matrixh4&matrixh5=$matrixh5&matrixh6=$matrixh6&matrixh7=$matrixh7&matrixi3=$matrixi3&matrixi4=$matrixi4&matrixi5=$matrixi5&matrixi6=$matrixi6&matrixi7=$matrixi7&matrixj3=$matrixj3&matrixj4=$matrixj4&matrixj5=$matrixj5&matrixj6=$matrixj6&matrixj7=$matrixj7';</script>";
  } else {
    echo "gagal";
  }
}
