<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ПИ-323 ИП ЛР№2 Абрамов Владислав</title>
</head>
<body>
	<a href="javascript:history.back()">← Назад</a><br>
	<p>Вариант №3. В матрице A(m,n) все ненулевые элементы заменить обратными по величине и противоположными по знаку</p>
	<?php
	for ($y = 0; $y <= 3; $y++) {
		echo "<br>";
		for ($yx = 0; $yx <= 3; $yx++) {
			$tab[$y][$yx] = rand(-10, 10);
			echo($tab[$y][$yx] . ' ');
		}
	}
	echo "<br>";
	for ($yy = 0; $yy <= 3; $yy++) {
		echo "<br>";
		for ($yyx = 0; $yyx <= 3; $yyx++) {
			if ($tab[$yy][$yyx] != 0) {
				if ($tab[$yy][$yyx] > 0) {
					$tab[$yy][$yyx] -= $tab[$yy][$yyx] + $tab[$yy][$yyx];
				} elseif ($tab[$yy][$yyx] < 0) {
					$tab[$yy][$yyx] -= $tab[$yy][$yyx] + $tab[$yy][$yyx];
				}
			}
			echo($tab[$yy][$yyx] . ' ');
		}
	}
	?>

	<p>Вариант №8. В матрице К(n,n) присвоить каждому диагональному элементу разность между суммами элементов соответствующих строки и столбца.</p>
	
	<?php
	for ($y = 0; $y <= 3; $y++) {
		echo "<br>";
		for ($yx = 0; $yx <= 3; $yx++) {
			$tab[$y][$yx] = rand(-10, 10);
			echo($tab[$y][$yx] . ' ');
		}
	}

	for ($i = 0; $i < 4; $i++) {
		for ($l = 0; $l < 4; $l++) {
			if ($i == $l) {
				$stlb = array_sum(array_column($tab, $l));
				$str = array_sum($tab[$l]);
				$tab[$i][$l] = $str - $stlb;
			}
		}
	}

	echo "<br>";

	for ($y = 0; $y <= 3; $y++) {
		echo "<br>";
		for ($yx = 0; $yx <= 3; $yx++) {
			echo($tab[$y][$yx] . ' ');
		}
	}
	?>
</body>
</html>