<?php
// Data mahasiswa
$students = ["Wahyu", "Rika", "Wahya Maulana", "Ade Irma"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
    <style>
        .container {
            display: flex;
            border: 1px solid gray;
            border-radius: 4px;
            padding: 10px;
            gap: 10px;
            width: 50%;
            flex-wrap: wrap;
        }

        .box {
            padding: 6px;
            border: 1px solid black;
            border-radius: 6px;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php foreach ($students as $student): ?>
            <div class="box">
                <?= $student ?>
            </div>
        <?php endforeach; ?>
    </div>
</body>

</html>