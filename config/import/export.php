<?php
// // include "../database.php";
// // $export = exec("cmd /c C:/xampp/htdocs/batihatta/new/config/import/export.bat");
// // $export = // Opening a directory 
$export = exec("start C:/xampp/htdocs/batihatta/config/import/export.bat");

echo "<script>window.location.href='../../?m=export'</script>";
// if ($export) {
//   echo "<script>window.location.href='../new/?m=database'</script>";
// } else {
//   echo "<script>alert('Gagal')</script>";
// }
