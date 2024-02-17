<?php
// Pertemuan 2 - PHP DASAR
// Sintaks PHP

/* 
Standar Output
echo => perintah yang paling umum digunakan untuk menampilkan teks atau variabel ke dalam halaman web
print => fungsi yang mirip dengan echo, tetapi print mengembalikan nilai 1 setiap kali dijalankan (sementara echo tidak mengembalikan nilai)
print_r => fungsi yang digunakan untuk mencetak informasi yang terstruktur, seperti array atau objek, ke dalam output
var_dump => ungsi yang sering digunakan untuk debugging karena mencetak informasi rinci tentang struktur dan nilai dari satu atau lebih variabe
*/

// echo
echo "Hello World !!!<br>";
$name = "Wabredz";
echo "Hello " . $name;

// print
print "<br>Hai World !!!<br>";
print "Hai " . $name;

// print_r
$fruits = ["Apel", "Anggur", "Mangga", "Jeruk"];
echo "<br>";
print_r($fruits);

// var_dum
echo "<br>";
var_dump($fruits);

?>

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Selamat Datang
        <?php echo $name; ?>
    </h1>
</body>

</html> -->

<?php
// Operator
// Aritmatika
echo "<br>";
$bil1 = 4;
$bil2 = 2;
echo $bil1 . " + " . $bil2 . " = " . ($bil1 + $bil2) . "<br>"; // Penambahan
echo $bil1 . " - " . $bil2 . " = " . ($bil1 - $bil2) . "<br>"; // Pengurangan
echo $bil1 . " * " . $bil2 . " = " . ($bil1 * $bil2) . "<br>"; // Perkalian
echo $bil1 . " / " . $bil2 . " = " . ($bil1 / $bil2) . "<br>"; // Pembagian
echo $bil1 . " % " . $bil2 . " = " . ($bil1 % $bil2) . "<br>"; // Modulus

// Penugasan
echo $bil1 . " += " . $bil2 . " ==> " . ($bil1 += $bil2) . "<br>"; // sama dengan $bil1 = $bil1 + $bil2;
echo $bil1 . " -= " . $bil2 . " ==> " . ($bil1 -= $bil2) . "<br>"; // sama dengan $bil1 = $bil1 - $bil2;

// Perbandingan
echo $bil1 . " == " . $bil2 . " ==> " . ($bil1 === $bil2) . "<br>"; // false
echo $bil1 . " != " . $bil2 . " ==> " . ($bil1 != $bil2) . "<br>"; // True
echo $bil1 . " > " . $bil2 . " ==> " . ($bil1 > $bil2) . "<br>"; // True
echo $bil1 . " < " . $bil2 . " ==> " . ($bil1 < $bil2) . "<br>"; // false
echo $bil1 . " >= " . $bil2 . " ==> " . ($bil1 >= $bil2) . "<br>"; // True
echo $bil1 . " <= " . $bil2 . " ==> " . ($bil1 <= $bil2) . "<br>"; // false

// Logika
$true = true;
$false = false;
echo $true . " && " . $false . " ==> " . ($true && $false) . "<br>"; // fale
echo $true . " || " . $false . " ==> " . ($true || $false) . "<br>"; // true

// Ternary
$age = 20;
echo ($age >= 17) ? "Dewasa" : "Anak-anak"; // Jika age >= 17 maka mencetak Dewasa jika tidak maka mencetak Anak-anak

// Penggabungan string
echo "<br>";
$first_name = "Wahyu";
$last_name = "Saja";
$full_name = $first_name . " " . $last_name;
echo $full_name;

// Identitas
echo "<br>";
$angka = 1;
$huruf = "1";
echo $angka . " === " . $huruf . " ==> " . ($angka === $huruf); // false karena 1 sama dengan "1" itu beda tipe data
echo "<br>";
echo $angka . " !== " . $huruf . " ==> " . ($angka !== $huruf); // true karena 1 tidak sama dengan "1"

?>