<?php
$path = __DIR__ . "/files/texts.txt";
$handle = fopen($path, "r");
$content = fread($handle, filesize($path)); 
fclose($handle);

$stihi = explode('__РАЗДЕЛИТЕЛЬ__', $content);

$random = random_int(0, count($stihi));
echo $stihi[$random];
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>