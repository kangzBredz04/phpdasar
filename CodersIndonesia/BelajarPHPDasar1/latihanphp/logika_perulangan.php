<?php
// LOGIKA PERULANGAN
// FOR
for ($i = 1; $i <= 10; $i++) {
    echo "$i ";
}

echo "<br>";

// WHILE
$j = 0;
while ($j < 10) {
    echo "$j ";
    $j++;
}

echo "<br>";

// DO WHILE
$k = 0;
do {
    echo "$k ";
    $k++;
} while ($k < 10);

echo "<br>";

// FOREACH
$fruits = ["apel", "pisang", "jeruk"];
foreach ($fruits as $fruit) {
    echo "$fruit ";
}
