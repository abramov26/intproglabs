<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ПИ-323 ИП ЛР№3 Абрамов Владислав</title>
</head>
<body>
	<form method="POST" action="">
		<h3>Калькулятор</h3>
		<input type="text" name="a" size="3">
		<input type="text" name="b" size="3"> <br>

		действие:
		<select name="z" size="1">
			<option value="1">сложить</option>
			<option value="2">умножить</option>
			<option value="3">вычесть</option>
			<option value="4">разделить</option>
		</select><br><br>
		<input type="submit" value="Вперёд!"><br><br>
	</form>

	<?
	$a = $b = 0;

	$a = $_POST["a"];
	$b = $_POST["b"];

	switch ($_POST["z"]) {
		case 1:
        // 1 — это сложить
		echo("Сумма чисел a=$a и b=$b равна" . ($a + $b));
		break;
		case 2:
        // 2 — это умножить
		echo("Умножение чисел a=$a и b=$b равно " . ($a * $b));
		break;
		case 3:
        // 3 — это вычесть
		echo("Разность чисел a=$a и b=$b равна " . ($a - $b));
		break;
		case 4:
        // 4 — это разделить
		if ($b == 0) echo("Делить нельзя");
		else echo("Деление чисел a=$a и b=$b равно " . ($a / $b));
		break;
	}
	?>
</body>
</html>