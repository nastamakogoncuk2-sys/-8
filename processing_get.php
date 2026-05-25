<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Обробка GET</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="page">
        <h1>Результат обробки форми GET</h1>
        <?php
            $firstName = $_REQUEST['first_name'] ?? '';
            $lastName = $_REQUEST['last_name'] ?? '';
            $plata = $_REQUEST['plata'] ?? 'не вибрано';
            $str = 'Здрастуйте, ' . htmlspecialchars($firstName) . ' ' . htmlspecialchars($lastName) . '! <br>';
            $str .= 'Ви підписалися на журнал CHIP. Форма оплати - ' . htmlspecialchars($plata);
            echo '<p class="result">' . $str . '</p>';
        ?>
    </div>
</body>
</html>
