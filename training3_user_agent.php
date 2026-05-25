<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Версія браузера</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="page">
        <h1>Яка версія браузера?</h1>
        <p>Відповідь:</p>
        <p class="result"><b><?php $br = getenv('HTTP_USER_AGENT'); echo $br; ?></b></p>
        <p>Дякую за інформацію!</p>
    </div>
</body>
</html>
