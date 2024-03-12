<?php
// variable scope
$x = 10;
function show()
{
    global $x;
    echo $x;
}
show();

/*
Variabel superglobal adalah variabel bawaan dalam PHP yang tersedia di seluruh skrip PHP.
Mereka memiliki ruang lingkup global dan dapat diakses dari mana saja dalam skrip PHP.
*/

// $_SERVER ==> Variabel ini berisi informasi tentang server dan lingkungan eksekusi PHP.
echo "<br>";
echo $_SERVER['PHP_SELF']; // Output: Nama file skrip yang sedang dieksekusi
echo "<br>";
echo $_SERVER['SERVER_NAME']; // Output: Nama host server

// $_GET ==> Variabel ini digunakan untuk mengumpulkan data yang dikirimkan dalam URL dengan metode HTTP GET.
echo "<br>";
echo $_GET['parameter']; // Output: Nilai dari parameter yang dikirim melalui URL

// $_POST ==> Variabel ini digunakan untuk mengumpulkan data yang dikirimkan melalui metode HTTP POST.
echo $_POST['username']; // Output: Nilai dari input dengan name="username" yang dikirimkan melalui POST

// $_FILES ==> Variabel ini digunakan untuk mengakses file yang diunggah oleh pengguna melalui formulir file.
echo $_FILES['file']['name']; // Output: Nama file yang diunggah

// $_COOKIE ==> Variabel ini digunakan untuk mengakses data cookie yang dikirimkan oleh klien ke server.
echo $_COOKIE['cookie_name']; // Output: Nilai dari cookie dengan nama 'cookie_name'

// $_SESSION ==> Variabel ini digunakan untuk menyimpan data sesi pengguna di seluruh halaman.
session_start();
$_SESSION['user_id'] = 101; // Menyimpan user_id dalam sesi

// $_REQUEST ==> Variabel ini menggabungkan nilai dari $_GET, $_POST, dan $_COOKIE.
echo $_REQUEST['parameter']; // Output: Nilai dari parameter yang dikirim, bisa dari GET, POST, atau COOKIE

// $_ENV ==> Variabel ini berisi variabel lingkungan yang tersedia di server.
echo $_ENV['VAR_NAME']; // Output: Nilai dari variabel lingkungan dengan nama 'VAR_NAME'
