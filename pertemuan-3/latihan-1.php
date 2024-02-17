<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>

<body>
    <h1>Table 1</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php
        for ($i = 0; $i < 5; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 5; $j++) {
                echo "<td> $i, $j </td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
    <h1>Table 2</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ($i = 0; $i < 5; $i++): ?>
            <tr>
                <?php for ($j = 0; $j < 5; $j++): ?>
                    <td>
                        <?= "$i, $j" ?>
                    </td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>

</html>