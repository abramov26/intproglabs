<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Редактирование данных о депозитном предложении</title>
</head>
<body>
	<?php
	require_once '/var/www/login_check.php';
	require_once '/var/www/dbconnect.php';
	$query ="UPDATE deposit_offers SET name ='".$_GET['name'].
	"', interest_rate=".$_GET['interest_rate'].", bank_id='"
	.$_GET['bank_id']."' WHERE id ='".$_GET['id']."';";
	$result = mysqli_query($dbconnect, $query);

	if (mysqli_affected_rows($dbconnect)>0) {
		echo 'Всё сохранено. <a href="index.php"> Вернуться к списку
		депозитных предложений </a>'; 
	} else { 
		$error_msg = mysqli_error($dbconnect);
		echo 'Ошибка сохранения. ('.$error_msg.')<br>
		<a href="index.php"> Вернуться к списку депозитных предложений</a> '; 
	}
	?>
</body>
</html>