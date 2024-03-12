<?php
// Sandika Galih
// $_GET
// $_GET['name'] = "Wahyu saja";
// $_GET['age'] = 20;
// var_dump($_GET);


// Data barang
$datas = [
    [
        'kode' => 'B001',
        'nama' => 'Laptop',
        'harga' => 8000000,
        'stok' => 10
    ],
    [
        'kode' => 'B002',
        'nama' => 'Smartphone',
        'harga' => 5000000,
        'stok' => 20
    ],
    [
        'kode' => 'B003',
        'nama' => 'Mouse',
        'harga' => 200000,
        'stok' => 50
    ],
    [
        'kode' => 'B004',
        'nama' => 'Keyboard',
        'harga' => 300000,
        'stok' => 30
    ]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>

<body>
    <ul>
        <?php foreach ($datas as $b): ?>
            <a href="latihan2.php?
                kode=<?= $b['kode']; ?>
                &nama=<?= $b['nama']; ?>
                &harga=<?= $b['harga']; ?>
                &stok=<?= $b['stok']; ?>">
                <li>
                    <?= $b["kode"] . " - " . $b["nama"] ?>
                </li>
            </a>
        <?php endforeach; ?>
    </ul>
</body>

</html>