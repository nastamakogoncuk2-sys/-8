<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Обробка рядків POST</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="page">
        <h1>Операції над рядками методом POST</h1>
        <?php
            $e = $_POST['e'] ?? '';
            $f = $_POST['f'] ?? '';
            echo '<p class="result">а) Перша, потім друга: ' . htmlspecialchars($e) . ' ' . htmlspecialchars($f) . '</p>';
            echo '<p class="result">б) Друга, потім перша: ' . htmlspecialchars($f) . ' ' . htmlspecialchars($e) . '</p>';
        ?>
    </div>
</body>
</html>
