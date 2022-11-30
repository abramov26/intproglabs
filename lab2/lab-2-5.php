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
	$a = rand(-10, 10);
	$b = rand(-10, 10);
	print "a = $a <br>";
	print "b= $b <br>";
	$z = fun($a, $b) + fun($a * $a, $b * $b) - fun($a - 1, $b);
	echo("Значение z = " . $z . "<br>");
	function fun($u, $t)
	{

		if ($u > 0 && $t > 0)
			$r = $u * $u + $t * $t;
		elseif ($u <= 0 && $t <= 0)
			$r = $u + $t * $t;
		elseif ($u > 0 && t <= 0)
			$r = $u - $t;
		elseif ($u <= 0 && $t > 0)
			$r = $u + $t;

		return $r;
	}
	?>

	<p> Вариант №8 </p>
	
	<?php

	$a = rand(-10, 10);
	$b = rand(-10, 10);
	print "a = $a <br>";
	print "b= $b <br>";

	if (($b == 0) or (pow($a, 6)) == 0) {
		echo "Нельзя делить на 0";
	} else {
		$z = func($a + (1 / $b), pow($b, 8) / pow($a, 6)) + func(pow($a, 3 / 4) - pow($b, 5 / 6), $b - $a);
		echo("Значение z = " . round($z, 2) . "<br>");
	}
	echo "<br>";

	function func($u, $t)
	{
		if ($u >= 0 && $t >= 0) {
			return $u + 2 * $t;
		} elseif ($u < 0 && $t >= 0) {
			return $u + $t;
		} elseif ($u >= 0 && $t < 0) {
			return $u * $u - 2 * $t;
		} elseif ($u < 0 && $t < 0) {
			return $u * 3 + $t;
		}
	}

	?>

</body>
</html>