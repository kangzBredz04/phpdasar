<?php
// Variabel dalam PHP
// Variabel dalam PHP adalah tempat untuk menyimpan data. 
// Nama variabel harus dimulai dengan tanda $ dan diikuti dengan huruf, angka, atau garis bawah.

//  Mendeklarasikan variabel
$name = "Wahyu";
$age = 21;

// Mencetak nilai variabel
echo "Nama: $name\n";
echo "Usia: $age\n";

// Mengubah nilai variabel
$age = 22;

// Mencetak nilai variabel yang diubah
echo "Usia baru: $age\n";

// Gunakan nama yang deskriptif untuk variabel.
// Gunakan camelCase untuk nama variabel yang terdiri dari beberapa kata.
// Gunakan konstanta untuk nilai yang tidak berubah.

// Nama variabel yang deskriptif
$firstName = "John";
$lastName = "Doe";

// CamelCase
$userAge = 30;

// Konstanta
const PI = 3.14;

// VARIABEL GLOBAL
// Mendeklarasikan variabel global
$globalVariable = "Hello, World!";

// Mengakses variabel global di dalam fungsi
function myFunction()
{
    global $globalVariable;
    echo $globalVariable; // Output: Hello, World!
}

myFunction();

// VARIABEL SUPER GLOBAL
// $_SERVER: Menyimpan informasi tentang server dan lingkungan web.
// $_REQUEST: Menyimpan informasi tentang request HTTP, seperti data formulir dan parameter URL.
// $_GET: Menyimpan informasi tentang parameter URL.
// $_POST: Menyimpan informasi tentang data formulir yang dikirimkan dengan metode POST.
// $_SESSION: Menyimpan informasi tentang sesi pengguna.
// $_COOKIE: Menyimpan informasi tentang cookie yang disimpan di browser pengguna.

// Mendapatkan alamat IP pengguna
$ipAddress = $_SERVER['REMOTE_ADDR'];

// Mendapatkan nama file yang sedang diakses
$fileName = $_SERVER['SCRIPT_FILENAME'];

// Mendapatkan nilai dari formulir
$userName = $_POST['username'];

// Memulai sesi
session_start();

// Menyimpan nilai dalam sesi
$_SESSION['userId'] = 123;

// Mendapatkan nilai dari cookie
$cookieValue = $_COOKIE['myCookie'];
