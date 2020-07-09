<?php

// Name of the file
$filename = 'hybriddb.sql';
// MySQL host
$mysql_host = 'localhost';
// MySQL username
$mysql_username = 'root';
// MySQL password
$mysql_password = '';
// Database name
$mysql_database = 'hybriddb';

$file_pointer = $filename;


// Connect to MySQL server
$koneksi = mysqli_connect($mysql_host, $mysql_username, $mysql_password, $mysql_database) or die('Error connecting to MySQL server: ' . mysqli_error());

// Temporary variable, used to store current query
$templine = '';
// Read in entire file
$lines = file($filename);
// Loop through each line
foreach ($lines as $line) {
  // Skip it if it's a comment
  if (substr($line, 0, 2) == '--' || $line == '')
    continue;

  // Add this line to the current segment
  $templine .= $line;
  // If it has a semicolon at the end, it's the end of the query
  if (substr(trim($line), -1, 1) == ';') {
    // Perform the query
    mysqli_query($koneksi, $templine) or print('Error performing query \'<strong>' . $templine . '\': ' . mysqli_error() . '<br /><br />');
    // Reset temp variable to empty
    $templine = '';
  }
}
// Use unlink() function to delete a file  
if (!unlink($file_pointer)) {
  echo ("$file_pointer cannot be deleted due to an error");
} else {
  echo ("$file_pointer has been deleted");
}

echo "<script>window.location.href='../../?m=import'</script>";
