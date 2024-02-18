<?php
// Definisikan sebuah fungsi biasa
function tambah($a, $b)
{
    return $a + $b;
}

// Definisikan s ebuah fungsi anonim
$kali = function ($a, $b) {
    return $a * $b;
};

// Definisika sebuah class
class Operasi
{
    public static function kurang($a, $b)
    {
        return $a - $b;

    }

    public function bagi($a, $b)
    {
        return $a / $b;
    }
}

// Menggunakan fungsi biasa
$fungsi_biasa = 'tambah';
echo $fungsi_biasa(3, 4); // Output: 7

// Menggunakan fungsi anonim
echo $kali(3, 4); // Output: 12

// Menggunakan metode statis dari sebuah class
$metode_statis = ['Operasi', 'kurang'];
echo $metode_statis(5, 2); // Output: 3

// Menggunakan metode objek dari sebuah class
$objek = new Operasi();
$metode_objek = [$objek, 'bagi'];
echo $metode_objek(10, 2); // Output: 5
