<?php
// Cek apakah ada data di $_GET
if (
    !isset($_GET["kode"]) ||
    !isset($_GET["nama"]) ||
    !isset($_GET["harga"]) ||
    !isset($_GET["stok"])
) {
    // kita redirect ke halaman data barang
    header("Location: latihan1.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Data Barang</title>
</head>

<body>
    <h1>Detail Data Barang</h1>
    <ul>
        <li>Kode :
            <?= $_GET['kode'] ?>
        </li>
        <li>Nama :
            <?= $_GET['nama'] ?>
        </li>
        <li>Harga : Rp.
            <?= $_GET['harga'] ?>
        </li>
        <li>Stok :
            <?= $_GET['stok'] ?> item
        </li>
    </ul>
    <a href="latihan1.php">Kembali ke daftar barang</a>
</body>

</html>