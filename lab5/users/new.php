<? require_once '/var/www/admin_check.php'; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Добавление нового пользователя</title>
</head>
<body>
	<h2>Регистрация пользователя:</h2>
	<form action="save_new.php" method="POST">
		Никнейм: <input name="username" size="50" type="text" required>
		<br>Пароль: <input name="password" size="20" type="password" required>
		<br>Тип аккаунта (2 — админ, 1 — пользователь): <input name="account_type" size="10" type="number" value="1" required>
		<p><input name="add" type="submit" value="Добавить">
		<input name="b2" type="reset" value="Очистить"></p>
	</form>
	<p><a href="index.php"> Вернуться к списку пользователей</a></p>
</body>
</html>