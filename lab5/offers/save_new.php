<?php
require_once '/var/www/dbconnect.php';
// Строка запроса на добавление записи в таблицу:
$sql_add = "INSERT INTO deposit_offers SET name='" . $_GET['name']
."', interest_rate='".$_GET['interest_rate']."', bank_id='"
.$_GET['bank_id']."'";

$result = mysqli_query($dbconnect, $sql_add); // Выполнение запроса
if (mysqli_affected_rows($dbconnect)>0) { 
	print "<p>Спасибо, зарегистрировано в базе данных.";
	print "<p><a href=\"index.php\"> Вернуться к списку депозитных предложений </a>";
} else { 
	$error_msg = mysqli_error($dbconnect);
	echo 'Ошибка сохранения. ('.$error_msg.')<br> 
	<a href="index.php"> Вернуться к списку депозитных предложений</a>'; 
}
?>