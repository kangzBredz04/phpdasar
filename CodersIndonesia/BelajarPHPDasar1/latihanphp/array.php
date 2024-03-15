<?php
// Array adalah salah satu struktur data yang berisi sekumpulan data dan memiliki indeks. 
// Indeks digunakan untuk mengakses nilai array.

// Membuat array kosong 
$buah = array();
$sayuran = [];

// Membuat array sekaligus dengan isinya
$minuman = array("Kopi", "Teh", "Susu");
$makanan = ["Mie", "Nasi Goreng", "Martabak"];

// Membuat array melalui indeks tertentu
$anggota[0] = "Wahyu";
$anggota[1] = "Dimas";
$anggota[2] = "Wabredz";

// Menampilkan isi array
// Cara simpel (kurang efektif)
echo $anggota[0] . "<br>";
echo $anggota[1] . "<br>";
echo $anggota[2] . "<br>";

echo "<hr>";
// Menggunakan perulangan for
for ($i = 0; $i < count($makanan); $i++) {
    echo $makanan[$i] . "<br>";
}

echo "<hr>";
// Menggunakan perulangan foreach
foreach ($makanan as $m) {
    echo $m . "<br>";
}