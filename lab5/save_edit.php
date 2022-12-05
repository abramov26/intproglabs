<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
	require_once '/var/www/dbconnect.php';
	$query ="UPDATE banks SET bank_name ='".$_GET['name'].
	"', itn_number='".$_GET['itn_number']."', credit_rating='"
	.$_GET['credit_rating']."', asset_volume='".$_GET['asset_volume'].
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