<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ПИ-323 ИП ЛР№2 Абрамов Владислав</title>
</head>
<body>
	<a href="javascript:history.back()">← Назад</a><br>
	<p> Вариант №3 </p>
	<?php
	for ($i = 0; $i <= 9; $i++) {
		$arr[$i] = rand(-10, 10);
	}
	echo "<pre> Начальный массив: </pre>";
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
	$k = rand(1, 10);
	$l = 0;
	for ($j = 0; $j < $k; $j++) {
		if ($arr[$j] < $l) {
			$l = $arr[$j];
		}
	}
	for ($j = 0; $j < 10; $j++) {
		$arr[$j] = $l;
	}
	echo "<pre> Измененный массив: </pre>";
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
	?>
	<p> Вариант №8 </p>
	<?php
	$mass = array();
	$povMain = 0;
	$numPov = 0;

	for ($i = 0; $i < rand(10, 100); $i++) {
		$mass[] = rand(10, 20);
	}

	for ($i = 0; $i < count($mass); $i++) {
		$pov = 0;
		for ($k = 0; $k < count($mass); $k++) {
			if ($mass[$i] == $mass[$k]) {
				$pov += 1;
				if ($pov > $povMain) {
					$povMain = $pov;
					$numPov = $mass[$i];
				};
			}
		}
	}
	echo "Массив чисел </br>";
	foreach ($mass as $value) {
		echo "$value ";
	}
	echo "</br> Количество повторяющегося числа $numPov =  $povMain </br>";
	?>
</body>
</html>