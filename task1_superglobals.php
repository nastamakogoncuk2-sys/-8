<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Суперглобальні змінні PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="page">
        <h1>Суперглобальні змінні PHP</h1>
        <table>
            <tr><th>Позначення змінної</th><th>Характеристика</th><th>Отримане значення</th></tr>
            <?php
                $rows = [
                    'SERVER_PROTOCOL' => 'Ім\'я і версія інформаційного протоколу, який був використаний для запиту',
                    'SERVER_NAME' => 'Ім\'я сервера, на якому виконується скрипт',
                    'SERVER_SOFTWARE' => 'Рядок ідентифікації веб-сервера',
                    'REQUEST_METHOD' => 'Метод запиту, який використано для доступу до сторінки',
                    'HTTP_USER_AGENT' => 'Ідентифікаційний рядок браузера користувача',
                    'REMOTE_ADDR' => 'IP-адреса користувача',
                    'SCRIPT_NAME' => 'Шлях до поточного скрипта',
                    'PHP_SELF' => 'Ім\'я поточного файлу скрипта'
                ];
                foreach ($rows as $key => $description) {
                    $value = $_SERVER[$key] ?? 'немає значення';
                    echo '<tr><td>' . $key . '</td><td>' . $description . '</td><td>' . htmlspecialchars($value) . '</td></tr>';
                }
            ?>
        </table>
    </div>
</body>
</html>
