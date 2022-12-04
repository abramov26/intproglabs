<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Редактирование данных о депозите</title>
</head>
<body>
	<?php
	require_once '/var/www/dbconnect.php';
	$rows = mysqli_query($dbconnect, "SELECT * FROM deposits WHERE id = ".$_GET['deposit_id']);
	if (!isset($_GET['deposit_id'])) die("Требуется GET-параметр: id депозита");
	while ($st = mysqli_fetch_array($rows)) {
		$id=$_GET['deposit_id'];
		$offer_id = $st['offer_id'];
		$initial_deposit_amout = $st['initial_deposit_amout'];
	}
	print "<form action='save_edit.php' metod='GET'>";
	print "id Депозитной программы:: <input name='offer_id' size='10' type='number'
	value='".$offer_id."'>";
	print "<br>Сумма начального вклада: <input name='initial_deposit_amout' size='30' type='number'
	value='".$initial_deposit_amout."'>";
	print "<input type='hidden' name='id' value='".$id."'> <br>";
	print "<input type='submit' name='' value='Сохранить'>";
	print "</form>";
	print "<p><a href=\"index.php\"> Вернуться к списку депозитов </a>";
	?>
</body>
</html>