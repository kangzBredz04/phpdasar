<?php
/*
    Array asosiatif adalah jenis array di PHP di mana setiap elemen array memiliki kunci 
yang ditentukan oleh pengguna, bukan hanya indeks numerik seperti pada array biasa. 
Dalam array asosiatif, kunci tersebut dapat berupa string atau bilangan bulat.

    Cara penggunaan array asosiatif mirip dengan array biasa, kecuali bahwa Anda menggunakan kunci 
untuk mengakses dan menetapkan nilai, bukan menggunakan indeks numerik. 
*/

// Deklarasi array associative
$person1 = array(
    'name' => 'John',
    'age' => 30,
    'city' => 'New York'
);
// atau
$person2 = [
    'name' => 'John',
    'age' => 30,
    'city' => 'New York'
];

// Akses array associative
echo $person1['name']; // Output: John
echo "<br>";
echo $person1['age'];  // Output: 30
echo "<br>";
echo $person1['city']; // Output: New York
