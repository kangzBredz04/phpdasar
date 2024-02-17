<?php
/*
FUNCTION DALAM PHP

- user defined functions
- function arguments
- returning values
- variable functions
- internal (built-in) functions
- anonymous functions
- arrow functions
*/

// User defined functions
function greeting()
{
    echo "Hello world !!";
}

greeting();
echo "<br>";
// function arguments
function greetingName($name)
{
    echo "Hai $name";
}
greetingName("Wahyu");
echo "<br>";
greetingName("Wabredz");

// Returning values
function tambah($bil1, $bil2)
{
    return $bil1 + $bil2;
}
echo "<br>";
echo "Hasil dari 3 + 4 = " . tambah(3, 4);

// variable functions
echo "<br>";
function fungsi1()
{
    echo "Hello dari fungsi hello";
}

$coba1 = "fungsi1"; // variable yang menyimpan nama fungsi
$coba1(); // memanggil fungsi menggunakan variable

// Internal (built-in) functions
echo "<br>";
echo strlen("Hello, world!"); // $panjang akan bernilai 13 (strlen)
echo "<br>";
echo strpos("Hello, world!", "world"); // $posisi akan bernilai 7 (strpos)
echo "<br>";
$teks = "HELLO, WORLD!";
echo strtolower($teks); // $teks_kecil akan bernilai "hello, world!" (strtolower)
echo "<br>";
$teks = "hello, world!";
echo strtoupper($teks); // $teks_besar akan bernilai "HELLO, WORLD!" (strtoupper)
echo "<br>";
echo date("Y-m-d"); // $tanggal akan berisi tanggal saat ini dalam format YYYY-MM-DD (date)
echo "<br>";
$array = array("apel", "pisang", "jeruk");
echo implode(", ", $array); // $gabung akan bernilai "apel, pisang, jeruk" (implode)
echo "<br>";
$teks = "apel|pisang|jeruk";
$data = explode("|", $teks); // $array akan berisi array("apel", "pisang", "jeruk") (explode)
var_dump($data);
echo "<br>";
$array = array(1, 2, 3, 4, 5);
echo count($array); // $jumlah akan bernilai 5 (count)
echo "<br>";
$array = array("apel", "pisang");
array_push($array, "jeruk"); // $array akan berisi array("apel", "pisang", "jeruk")
var_dump($array);
echo "<br>";
$array = array("apel", "pisang", "jeruk");
$buah_terakhir = array_pop($array); // $buah_terakhir akan bernilai "jeruk", dan $array akan berisi array("apel", "pisang")
var_dump($array);