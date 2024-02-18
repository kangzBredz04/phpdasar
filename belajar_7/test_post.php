<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
</head>

<body>
    <h2>Input Data</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name">
        <label for="age">Umur:</label>
        <input type="number" id="age" name="age">
        <button type="submit">Submit</button>
    </form>

    <?php
    // Memproses data yang dikirimkan saat formulir dikirimkan
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $age = $_POST['age'];

        // Menampilkan data yang dimasukkan pengguna
        echo "<h2>Data yang dimasukkan:</h2>";
        echo "<p>Nama: " . htmlspecialchars($name) . "</p>";
        echo "<p>Umur: " . htmlspecialchars($age) . "</p>";
    }
    ?>
</body>

</html>