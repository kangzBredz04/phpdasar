<?php
/*
ARRAY
Array adalah struktur data yang dapat digunakan untuk menyimpan sejumlah nilai di bawah satu variabel.
Array dalam PHP dapat menyimpan berbagai jenis nilai, seperti integer, string, objek, bahkan array lainnya. 
Array digunakan untuk mengorganisir dan mengakses data dengan cara yang terstruktur.
*/

// Array cara lama (disimpan dalam fungsi array)
$numbers = array(1, 2, 3, 4, 5);
var_dump($numbers);

echo "<br>";
// Array cara baru (disimpan dalam tanda siku)
$letters = ['A', 'B', 'C', 'D', 'E'];
$names = ["Wahyu", "Rika", "Wahya Maulana", "Ade Irma"];

// Cetak semua data array
var_dump($letters);
echo "<br>";
print_r($names);

// Cetak data berdasarkan index
echo "<br>";
echo $names[2];

// Tambah data array
$numbers[] = 6; // cara yang pertama
echo "<br>";
print_r($numbers);

array_push($letters, "F"); // cara yang kedua
echo "<br>";
print_r($letters);

// Perulangan pada array
// for
echo "<br>";
for ($i = 0; $i < count($numbers); $i++) {
    echo "$numbers[$i] ";
}
// foreach
echo "<br>";
foreach ($letters as $l) {
    echo $l;
}


echo "<br>";
// Fungsi dalam array
$fruits = ['apel', 'jeruk', 'pisang', 'mangga'];
// 1. count() ==> Mengembalikan jumlah elemen dalam array.
echo count($fruits); // Output 4
echo "<br>";

// 2. array_push() ==> Menambahkan satu atau lebih elemen ke akhir array.
array_push($fruits, 'mangga');
print_r($fruits); // Array ( [0] => apel [1] => jeruk [2] => pisang [3] => mangga [4] => mangga )
echo "<br>";

// 3. array_pop() ==> Menghapus dan mengembalikan elemen terakhir dari array.
$last_fruits = array_pop($fruits);
echo $last_fruits; // Output: mangga
echo "<br>";
print_r($fruits); // Array ( [0] => apel [1] => jeruk [2] => pisang [3] => mangga )
echo "<br>";

// 4. array_shift() ==> Menghapus dan mengembalikan elemen pertama dari array.
$first_fruits = array_shift($fruits);
echo $first_fruits; // Output: apel
echo "<br>";
print_r($fruits); // Array ( [0] => jeruk [1] => pisang [2] => mangga )

// dan masih banyak lagi