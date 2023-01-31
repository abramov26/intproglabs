<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Редактирование данных о депозите</title>
</head>
<body>
	<?php
	require_once '/var/www/login_check.php';
	require_once '/var/www/dbconnect.php';
	$query ="UPDATE deposits SET offer_id ='".$_GET['offer_id'].
	"', initial_deposit_amout='".$_GET['initial_deposit_amout'].
	"' WHERE id ='".$_GET['id']."'";
	$result = mysqli_query($dbconnect, $query);

	if (mysqli_affected_rows($dbconnect)>0) {
		echo 'Всё сохранено. <a href="index.php"> Вернуться к списку
		банков </a>'; 
	} else { 
		$error_msg = mysqli_error($dbconnect);
		echo 'Ошибка сохранения. '.$error_msg.'<br> <a href="index.php">
		Вернуться к списку банков</a> '; 
	}
	?>
</body>
</html>