<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Добавление нового депозита</title>
</head>
<body>
	<h2>Регистрация:</h2>
	<form action="save_new.php" method="GET">
		<br>id Депозитной программы: <input name="offer_id" size="10" type="number">
		<br>Сумма начального вклада: <input name="initial_deposit_amout" size="30" type="number">
		<p><input name="add" type="submit" value="Добавить">
		<input name="b2" type="reset" value="Очистить"></p>
	</form>
	<p><a href="index.php"> Вернуться к списку депозитов</a></p>
</body>
</html>