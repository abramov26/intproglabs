<? require_once '/var/www/admin_check.php'; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Редактирование данных о пользователе</title>
</head>
<body>
	<?php
	require_once '/var/www/dbconnect.php';
	$rows = mysqli_query($dbconnect, "SELECT * FROM users WHERE id = ".$_GET['user_id']);
	if (!isset($_GET['user_id'])) die("Требуется GET-параметр: id пользователя");
	while ($st = mysqli_fetch_array($rows)) {
		$id=$_GET['user_id'];
		$username = $st['username'];
		$type = $st['type'];
	}
	print "<form action='save_edit.php' method='POST'>";
	print "Новый никнейм: <input name='username' size='50' type='text'
	value='".$username."' required>";
	print "<br>Новый пароль: <input name='password' size='20' type='password'>";
	print "<br>Тип учётной записи (2 или 1): <input name='account_type' size='20' type='number'
	value='".$type."' required>";
	print "<input type='hidden' name='id' value='".$id."'> <br>";
	print "<input type='submit' name='' value='Сохранить'>";
	print "</form>";
	print "<p><a href=\"index.php\"> Вернуться к списку пользователей</a>";
	?>
</body>
</html>