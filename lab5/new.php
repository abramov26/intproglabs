<? require_once '/var/www/login_check.php'; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Добавление нового банка</title>
</head>
<body>
	<h2>Регистрация:</h2>
	<form action="save_new.php" method="GET">
		Имя: <input name="name" size="50" type="text">
		<br>ИНН: <input name="itn_number" size="20" type="text">
		<br>Рейтинг: <input name="credit_rating" size="30" type="text">
		<br>Объём активов: <input name="asset_volume" size="30" type="text">
		<p><input name="add" type="submit" value="Добавить">
		<input name="b2" type="reset" value="Очистить"></p>
	</form>
	<p><a href="index.php"> Вернуться к списку банков </a></p>
</body>
</html>