<?php
// Contoh 1: Penggunaan Arrow Function sebagai argumen callback
$numbers = [1, 2, 3, 4, 5];

// Menggunakan fungsi array_map untuk mengalikan setiap elemen array dengan 2
$result = array_map(fn($num) => $num * 2, $numbers);

print_r($result); // Output: Array ( [0] => 2 [1] => 4 [2] => 6 [3] => 8 [4] => 10 )

// Contoh 2: Penugasan Arrow Function ke dalam variabel
$greet = fn($name) => "Hello, $name!";
echo "<br>";
echo $greet("John"); // Output: Hello, John!

// Contoh 3: Penggunaan Arrow Function dalam array
$operations = [
    "add" => fn($a, $b) => $a + $b,
    "subtract" => fn($a, $b) => $a - $b
];
echo "<br>";
echo $operations['add'](5, 3); // Output: 8
echo "<br>";
echo $operations['subtract'](10, 4); // Output: 6
