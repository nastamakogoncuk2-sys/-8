<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Визначення типу клієнтської програми</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="page">
        <h1>Визначення типу клієнтської програми</h1>
        <?php
            $br = getenv('HTTP_USER_AGENT');
            if (strpos($br, 'MSIE') !== false) {
        ?>
            <p class="result"><b>Ви чомусь використовуєте Internet Explorer :-(</b></p>
        <?php
            } else {
        ?>
            <p class="result"><b>Ви правильно вчинили, що відмовились від Internet Explorer</b></p>
        <?php
            }
        ?>
    </div>
</body>
</html>
