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
	echo("Ассоциативный массив");
	$cust = array("cnum" => " 2001", "cname" => "Hoffman", "city" => " London", "snum" => " 1001");
	echo "<br>";
	echo "<pre>";
	print_r($cust);
	echo "</pre>";
	echo "<br>";
	echo("Добавление ключа ");
	$cust += ["rating" => "100"];
	echo "<pre>";
	print_r($cust);
	echo "</pre>";
	echo "<br>";
	echo("Сортировка  по значениям");
	arsort($cust);
	echo "<pre>";
	print_r($cust);
	echo "</pre>";
	echo "<br>";
	echo("Сортировка  по ключам");
	ksort($cust);
	echo "<pre>";
	print_r($cust);
	echo "</pre>";
	echo "<br>";
	echo("Сортировка   массива с помощью функции sort()");
	sort($cust);
	echo "<pre>";
	print_r($cust);
	echo "</pre>";
	?>  
</body>
</html>
