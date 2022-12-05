<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Редактирование данных о депозитном предложении</title>
</head>
<body>
	<?php
	require_once '/var/www/dbconnect.php';
	if (!isset($_GET['offer_id'])) die("Требуется GET-параметр: id депозитного предложения");
	$rows = mysqli_query($dbconnect, "SELECT * FROM deposit_offers WHERE id = ".$_GET['offer_id']);
	while ($st = mysqli_fetch_array($rows)) {
		$id = $_GET['offer_id'];
		$name=$st['name'];
		$interest_rate = $st['interest_rate'];
		$bank_id = $st['bank_id'];
	}
	print "<form action='save_edit.php' metod='GET'>";
	print "Название: <input name='name' size='50' type='text'
	value='".$name."'>";
	print "<br>Годовая ставка: <input name='interest_rate' size='20' type='text'
	value='".$interest_rate."'>";
	print "<br>id Банка: <input name='bank_id' size='20' type='number'
	value='".$bank_id."'>";
	print "<input type='hidden' name='id' value='".$id."'> <br>";
	print "<input type='submit' name='' value='Сохранить'>";
	print "</form>";
	print "<p><a href=\"index.php\"> Вернуться к списку
	банков </a>";
	?>
</body>
</html>