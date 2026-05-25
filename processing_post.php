<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Обробка POST</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="page">
        <h1>Результат обробки форми POST</h1>
        <?php
            $firstName = $_POST['first_name'] ?? '';
            $lastName = $_POST['last_name'] ?? '';
            $plata = $_POST['plata'] ?? 'не вибрано';
            $str = 'Здрастуйте, ' . htmlspecialchars($firstName) . ' ' . htmlspecialchars($lastName) . '! <br>';
            $str .= 'Ви підписалися на журнал CHIP. Форма оплати - ' . htmlspecialchars($plata);
            echo '<p class="result">' . $str . '</p>';
        ?>
    </div>
</body>
</html>
