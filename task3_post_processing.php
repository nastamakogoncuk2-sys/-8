<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Обчислення POST</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="page">
        <h1>Математичні обчислення методом POST</h1>
        <?php
            $c = isset($_POST['c']) ? (int)$_POST['c'] : 0;
            $d = isset($_POST['d']) ? (int)$_POST['d'] : 0;
        ?>
        <table>
            <tr><th>Операція</th><th>Результат</th></tr>
            <tr><td>Сума <?php echo "$c + $d"; ?></td><td><?php echo $c + $d; ?></td></tr>
            <tr><td>Добуток <?php echo "$c * $d"; ?></td><td><?php echo $c * $d; ?></td></tr>
            <tr><td>Різниця <?php echo "$c - $d"; ?></td><td><?php echo $c - $d; ?></td></tr>
            <tr><td>Частка <?php echo "$c / $d"; ?></td><td><?php echo $d != 0 ? $c / $d : 'Ділення на нуль'; ?></td></tr>
        </table>
    </div>
</body>
</html>
