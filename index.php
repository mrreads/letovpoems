<?php
$path = __DIR__ . "/files/texts.txt";
$handle = fopen($path, "r");
$content = fread($handle, filesize($path)); 
fclose($handle);
$poems = explode('__РАЗДЕЛИТЕЛЬ__', $content);
$random = random_int(0, count($poems)-1);

$background = random_int(1,2);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Случайный стих Егора Летова</title>
    <meta name="discriction" content="Случайный стих из творчества Игоря Фёдоровича Летова, начиная с 1983 по 1993 года. Все стихотворения взяты из сборника стихов «Русское поле экспериментов».">
    <meta name="robots" content="index, nofollow">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <p class="header"> Случайный стих Егора Летова </p>

    <div class="poem"> <? echo $poems[$random]; ?> </div>

    <p class="footer"> Александр Попов </p>

    <script>
        let random = Math.floor(Math.random() * 3);
        var listBackgrounds = 
        ["url('../img/background-1.jpg')",
         "url('../img/background-2.jpg')",
         "url('../img/background-3.jpg')"];
        document.body.style.backgroundImage = listBackgrounds[random];
    </script>
</body>
</html>