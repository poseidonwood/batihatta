<?php
$id_bobot = round($_GET['id_bobot'], 3);
$matrixf3 = round($_GET['matrixf3'], 3);
$matrixf4 = round($_GET['matrixf4'], 3);
$matrixf5 = round($_GET['matrixf5'], 3);
$matrixf6 = round($_GET['matrixf6'], 3);
$matrixf7 = round($_GET['matrixf7'], 3);
$matrixg3 = round($_GET['matrixg3'], 3);
$matrixg4 = round($_GET['matrixg4'], 3);
$matrixg5 = round($_GET['matrixg5'], 3);
$matrixg6 = round($_GET['matrixg6'], 3);
$matrixg7 = round($_GET['matrixg7'], 3);
$matrixh3 = round($_GET['matrixh3'], 3);
$matrixh4 = round($_GET['matrixh4'], 3);
$matrixh5 = round($_GET['matrixh5'], 3);
$matrixh6 = round($_GET['matrixh6'], 3);
$matrixh7 = round($_GET['matrixh7'], 3);
$matrixi3 = round($_GET['matrixi3'], 3);
$matrixi4 = round($_GET['matrixi4'], 3);
$matrixi5 = round($_GET['matrixi5'], 3);
$matrixi6 = round($_GET['matrixi6'], 3);
$matrixi7 = round($_GET['matrixi7'], 3);
$matrixj3 = round($_GET['matrixj3'], 3);
$matrixj4 = round($_GET['matrixj4'], 3);
$matrixj5 = round($_GET['matrixj5'], 3);
$matrixj6 = round($_GET['matrixj6'], 3);
$matrixj7 = round($_GET['matrixj7'], 3);
$benefit1 = max($matrixf3, $matrixf4, $matrixf5, $matrixf6, $matrixf7);
$cost1 = min($matrixf3, $matrixf4, $matrixf5, $matrixf6, $matrixf7);
$benefit2 = max($matrixg3, $matrixg4, $matrixg5, $matrixg6, $matrixg7);
$cost2 = min($matrixg3, $matrixg4, $matrixg5, $matrixg6, $matrixg7);
$benefit3 = max($matrixh3, $matrixh4, $matrixh5, $matrixh6, $matrixh7);
$cost3 = min($matrixh3, $matrixh4, $matrixh5, $matrixh6, $matrixh7);
$benefit4 = max($matrixi3, $matrixi4, $matrixi5, $matrixi6, $matrixi7);
$cost4 = min($matrixi3, $matrixi4, $matrixi5, $matrixi6, $matrixi7);
$benefit5 = max($matrixj3, $matrixj4, $matrixj5, $matrixj6, $matrixj7);
$cost5 = min($matrixj3, $matrixj4, $matrixj5, $matrixj6, $matrixj7);

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
$v1 = $d1min / ($d1min + $d1plus);
$v2 = $d2min / ($d2min + $d2plus);
$v3 = $d3min / ($d3min + $d3plus);
$v4 = $d4min / ($d4min + $d4plus);
$v5 = $d5min / ($d5min + $d5plus);
// $test = pow(($benefit1 - $matrixf3), 2);
// $d1plus = $_POST['d1plus'];
// $d1plus = $_POST['d1plus'];
// $d1plus = $_POST['d1plus'];
// $d1plus = $_POST['d1plus'];
echo $v2, $v3, $v4, $v5;
