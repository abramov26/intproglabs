<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Абрамов В., ПИ-323</title>
</head>
<body>
    <p>Задача №1-1, вариант 3</p>
    <p>Выражение (2*c+51*d)/(d-a-2)), случайные аргументы из интервала [-20, 20]</p>
</body>
</html>
<?php

$a = rand(-20, 20);
$c = rand(-20, 20);
$d = rand(-20, 20);

$result = (2 * $c + 51 * $d) / ($d - $a - 2);

echo("(2 * $c + 51 * $d) / ($d - $a - 2) = $result");


