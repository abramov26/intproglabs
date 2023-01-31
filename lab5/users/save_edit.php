<? require_once '/var/www/admin_check.php'; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ПИ-323 ИП ЛР№5 Абрамов Владислав</title>
</head>
<body>
	<?php
	require_once '/var/www/dbconnect.php';
	$password_update = true;
	if ($_POST['password'] == "") $password_update = false;

	if($password_update) {
		$password = md5($_POST['password']);
		$query = "UPDATE users SET username ='".$_POST['username'].
		"', password='".$password."', type='"
		.$_POST['account_type']."' WHERE id ='".$_POST['id']."'";
	} else {
		$query = "UPDATE users SET username ='".$_POST['username'].
		"', type='".$_POST['account_type'].
		"' WHERE id ='".$_POST['id']."'";
	}

	$result = mysqli_query($dbconnect, $query);

	if (mysqli_affected_rows($dbconnect)>0) {
		echo 'Всё сохранено. <a href="index.php"> Вернуться к списку пользователей</a>'; 
	} else { 
		$error_msg = mysqli_error($dbconnect);
		echo 'Ошибка сохранения. ('.$error_msg.')<br> <a href="index.php">
		Вернуться к списку пользователей</a> '; 
	}
	?>
</body>
</html>