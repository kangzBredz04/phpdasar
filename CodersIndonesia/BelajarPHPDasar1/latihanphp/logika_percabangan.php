<?php
// LOGIKA PERCABANGAN
// IF ELSE
$age = 18;

if ($age >= 18) {
    echo "Anda boleh masuk.";
} else {
    echo "Anda tidak boleh masuk.";
}

echo "<br>";

// IF ELSE IF 
$grade = "A";

if ($grade === "A") {
    echo "Sangat Bagus!";
} else if ($grade === "B") {
    echo "Bagus!";
} else {
    echo "Cukup Baik.";
}

echo "<br>";

// SWITCH CASE
$day = "Minggu";

switch ($day) {
    case "Senin":
        echo "Hari ini adalah Senin.";
        break;
    case "Selasa":
        echo "Hari ini adalah Selasa.";
        break;
    default:
        echo "Hari ini bukan Senin atau Selasa.";
}