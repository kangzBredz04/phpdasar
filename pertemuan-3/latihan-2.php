<?php
/* 
Pengkondisian
if else
if else if else
ternary
switch
*/

// if else
$age = 20;
if ($age >= 17) {
    echo "Dewasa";
} else {
    echo "Anak-anak";
}

echo "<br>";

// if else if else
$result = 75;
if ($result >= 80) {
    echo "Nilai anda A";
} elseif ($result >= 70) {
    echo "Nilai anda B";
} else {
    echo "Nilai anda C";
}

echo "<br>";

// siwtch
$day = "Sabtu";

switch ($day) {
    case "Senin":
        echo "Hari ini Senin.";
        break;
    case "Selasa":
        echo "Hari ini Selasa.";
        break;
    case "Rabu":
        echo "Hari ini Rabu.";
        break;
    case "Kamis":
        echo "Hari ini Kamis.";
        break;
    case "Jumat":
        echo "Hari ini Jumat.";
        break;
    default:
        echo "Hari ini adalah hari libur.";
}

