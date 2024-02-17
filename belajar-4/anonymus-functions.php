<?php
// Contoh 1: Penggunaan anonymous function sebagai argumen callback
$numbers = [1, 2, 3, 4, 5];

// Menggunakan fungsi array_map untuk mengalikan setiap elemen array dengan 2
$result = array_map(function ($num) {
    return $num * 2;
}, $numbers);

print_r($result); // Output: Array ( [0] => 2 [1] => 4 [2] => 6 [3] => 8 [4] => 10 )
echo "<br>";
// Contoh 2: Penugasan anonymous function ke dalam variabel
$greet = function ($name) {
    echo "Hello, $name!";
};

$greet("John"); // Output: Hello, John!

// Contoh 3: Penggunaan anonymous function dalam array
$operations = [
    "add" => function ($a, $b) {
        return $a + $b;
    },
    "subtract" => function ($a, $b) {
        return $a - $b;
    }
];
echo "<br>";
echo $operations['add'](5, 3); // Output: 8
echo "<br>";
echo $operations['subtract'](10, 4); // Output: 6
