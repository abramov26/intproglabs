<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ПИ-323 ИП ЛР№2 Абрамов Владислав</title>
</head>
<body>
	<a href="javascript:history.back()">← Назад</a><br>
	<?php
	$a = rand(3, 20);
	for ($i = 1; $i <= $a; $i++) {
		$rnd[$i] = rand(10, 99);
	}
	echo("Массив из " . $a . " элементов, заполненный случайными числами");
	echo "<br>";
	print_r($rnd);
	echo "<br>";
	echo("Массив сортированный по возрастанию");
	echo "<br>";
	sort($rnd);
	print_r($rnd);
	echo "<br>";
	echo "Массив сортированный по убыванию ";
	echo "<br>";
	rsort($rnd);
	print_r($rnd);
	echo "<br>";
	echo("Массив из  " . ($a - 1) . " элементов, где убрали последний элемент ");
	echo "<br>";
	array_pop($rnd);
	print_r($rnd);
	echo "<br>";
	echo("Среднее арифметическое для элементов массива");
	echo "<br>";
	$r = count($rnd);
	$s = array_sum($rnd);
	print "r = $r <br>";
	print "s= $s <br>";
	echo $s / $r;
	echo "<br>";
	if (in_array("50", $rnd)) {
		echo "Присутсвует 50";
	} else {
		echo "Не Присутсвует 50";
	}
	echo "<br>";
	echo("Удаление повторяющихся значений");
	echo "<br>";
	$result = array_unique($rnd);
	print_r($result);
	?>
</body>
</html>