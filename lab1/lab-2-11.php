<?php
$n = rand(0, 1000);
$m = rand(0, 1000);
$result = [];

if ($m > $n) {
    for ($k=1; $k < floor(pow($m, 1/3)) ; $k++) {
        if (pow($k, 3) > $m) {
            break;
        }
        for ($j=1; $j < floor(pow($m, 1/3)); $j++) {
            if (pow($j, 3)  > $m) {
                break;
            }
            for ($d=1; $d < floor(pow($m, 1/3)); $d++) {
                if (pow($d, 3) > $m) {
                    break;
                }
                $sum = pow($k, 3) + pow($j, 3) + pow($d, 3);
                if ($sum < $m and $sum > $n) {
                    $result[] += $sum;
                }
            }
        }
    }
} else {
    for ($k=1; $k < floor(pow($n, 1/3)) ; $k++) {
        if (pow($k, 3) > $n) {
            break;
        }
        for ($j=1; $j < floor(pow($n, 1/3)); $j++) {
            if (pow($j, 3) > $n) {
                break;
            }
            for ($d=1; $d < floor(pow($n, 1/3)); $d++) {
                if (pow($d, 3) > $n) {
                    break;
                }
                $sum = pow($k, 3) + pow($j, 3) + pow($d, 3);
                if ($sum > $m and $sum < $n) {
                    $result[] += $sum;
                }
            }
        }
    }
}
?>

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
<p>Задача № 1-3, Вариант 8. Найти все целые числа из интервала от N до М, которые можно представить в виде суммы
    кубов трех натуральных чисел. N и М – случайные числа. N = <?=$n ?>, M = <?=$m ?>.</p>
<p>Числа: <?= var_dump($result) ?></p>

</body>
</html>
