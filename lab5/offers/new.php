<? require_once '/var/www/login_check.php'; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Добавление нового депозитного предложения</title>
</head>
<body>
	<h2>Регистрация:</h2>
	<form action="save_new.php" method="GET">
		Название: <input name="name" size="50" type="text">
		<br>Годовая ставка: <input name="interest_rate" size="20" type="text">
		<br>id Банка: <input name="bank_id" size="30" type="number">
		<p><input name="add" type="submit" value="Добавить">
		<input name="b2" type="reset" value="Очистить"></p>
	</form>
	<p><a href="index.php">Вернуться к списку депозитных предложений</a></p>
</body>
</html>