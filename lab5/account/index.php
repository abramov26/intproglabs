<? require_once '/var/www/login_check.php'; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Редактирование данных аккаунта</title>
</head>
<body>
	<?php
	require_once '/var/www/dbconnect.php';
	$rows = mysqli_query($dbconnect, "SELECT * FROM users WHERE username = '".$_SESSION['username']."'");
	while ($st = mysqli_fetch_array($rows)) {
		$id=$st['id'];
		$username = $st['username'];
		$type = $st['type'];
	}
	print "<form action='save_edit.php' method='POST'>";
	print "Новый никнейм: <input name='username' size='50' type='text'
	value='".$username."' required>";
	print "<br>Новый пароль: <input name='password' size='20' type='password'>";
	print "<input type='hidden' name='id' value='".$id."'> <br>";
	print "<input type='submit' name='' value='Сохранить'>";
	print "</form>";
	print "<p><a href=\"../index.php\"> Вернуться назад</a>";
	?>
</body>
</html>