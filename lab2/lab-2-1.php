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
	echo "Массив treug";
	echo "<br>";
	$treug = [];
	for ($i = 1; $i <= 10; $i++) {
		$treug[$i] = $i * ($i + 1) / 2;
		echo $treug[$i] . " ";
	}
	echo "<br>";
	echo "Массив kvd";
	echo "<br>";
	$kvd = [];
	for ($i = 1; $i <= 10; $i++) {
		$kvd[$i] = $i * $i;
		echo $kvd[$i] . " ";
	}
	echo "<br>";
	echo "Массив rez ";
	$rez = [];
	$rez = array_merge($treug, $kvd);
	print_r($rez);
	echo "<br>";
	echo "<br>";
	echo "Сортировка массива rez ";
	sort($rez);
	print_r($rez);
	echo "<br>";
	echo "Массив rez после удаления первого элемента";
	unset($rez[0]);
	print_r($rez);
	echo "<br>";
	$rez1 = [];
	echo "Массив rez1 без повторяющихся элементов ";
	$rez1 = array_unique($rez);
	print_r($rez1);
	?>

</body>
</html>