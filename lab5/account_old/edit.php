<? require_once '/var/www/admin_check.php'; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Редактирование данных о банке</title>
</head>
<body>
	<?php
	require_once '/var/www/dbconnect.php';
	$rows = mysqli_query($dbconnect, "SELECT * FROM banks WHERE id = ".$_GET['bank_id']);
	if (!isset($_GET['bank_id'])) die("Требуется GET-параметр: id банка");
	while ($st = mysqli_fetch_array($rows)) {
		$id=$_GET['bank_id'];
		$name = $st['bank_name'];
		$itn_number = $st['itn_number'];
		$credit_rating = $st['credit_rating'];
		$asset_volume = $st['asset_volume'];
	}
	print "<form action='save_edit.php' metod='GET'>";
	print "Имя: <input name='name' size='50' type='text'
	value='".$name."'>";
	print "<br>Логин: <input name='itn_number' size='20' type='text'
	value='".$itn_number."'>";
	print "<br>Пароль: <input name='credit_rating' size='20' type='text'
	value='".$credit_rating."'>";
	print "<br>Е-mail: <input name='asset_volume' size='30' type='text'
	value='".$asset_volume."'>";
	print "<input type='hidden' name='id' value='".$id."'> <br>";
	print "<input type='submit' name='' value='Сохранить'>";
	print "</form>";
	print "<p><a href=\"index.php\"> Вернуться к списку
	банков </a>";
	?>
</body>
</html>