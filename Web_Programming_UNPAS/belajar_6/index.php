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
echo "<br>";

// menetapkan nilai atau mengganti nilai array associative
$person1['name'] = 'Alice';
$person1['age'] = 25;
$person1['city'] = 'Los Angeles';
// hasilnya
echo $person1['name']; // Output: Alice
echo "<br>";
echo $person1['age'];  // Output: 25
echo "<br>";
echo $person1['city']; // Output: Los Angeles
echo "<br>";

// menambahkan elemen baru kedalam array associative
$person1['gender'] = 'Female';
// hasilnya
print_r($person1);
echo "<br>";

// mengahapus elemen dari array associative
unset($person1['age']);
// hasilnya
print_r($person1);
echo "<br>";

// iterasi pada array associative
foreach ($person1 as $key => $value) {
    echo $key . ': ' . $value . '<br>';
}
echo "<br>";

// penggunaan array associative dalam struktur data kompleks
$user = [
    'username' => 'john_doe',
    'email' => 'john@example.com',
    'profile' => [
        'name' => 'John Doe',
        'age' => 30,
        'city' => 'New York'
    ]
];
echo $user['profile']['name']; // Output: John Doe
echo "<br>";

// konversi data array associative kedalam format JSON
$json_data_user = json_encode($user);
echo $json_data_user;