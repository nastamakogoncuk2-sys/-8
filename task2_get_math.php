<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Обчислення GET</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="page">
        <h1>Математичні обчислення методом GET</h1>
        <p class="code-note">Приклад адреси: task2_get_math.php?a=12&b=4</p>
        <?php
            $a = isset($_GET['a']) ? (int)$_GET['a'] : 12;
            $b = isset($_GET['b']) ? (int)$_GET['b'] : 4;
        ?>
        <table>
            <tr><th>Операція</th><th>Результат</th></tr>
            <tr><td>Сума <?php echo "$a + $b"; ?></td><td><?php echo $a + $b; ?></td></tr>
            <tr><td>Добуток <?php echo "$a * $b"; ?></td><td><?php echo $a * $b; ?></td></tr>
            <tr><td>Різниця <?php echo "$a - $b"; ?></td><td><?php echo $a - $b; ?></td></tr>
            <tr><td>Частка <?php echo "$a / $b"; ?></td><td><?php echo $b != 0 ? $a / $b : 'Ділення на нуль'; ?></td></tr>
        </table>
    </div>
</body>
</html>
