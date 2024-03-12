<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Kondisi 1 jika $_POST['nama] belum ada -->
    <!-- <h1>
        Hai
        <?= isset($_POST['nama']) ? $_POST['nama'] : "Admin!" ?>
    </h1> -->

    <!-- Kondisi 2 jika $_POST['nama] belum ada -->
    <?php if (isset($_POST['submit'])): ?>
        <h1>Hallo selamat datang
            <?= $_POST['nama']; ?>
        </h1>
    <?php endif; ?>
    <form method="post">
        <label for="nama">
            Masukan nama :
            <input type="text" name="nama">
        </label>
        <button type="submit" name="submit">Kirim</button>
    </form>
</body>

</html>