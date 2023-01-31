<?php
require_once '/var/www/login_check.php';
require_once '/var/www/dbconnect.php';
$sql_add = "INSERT INTO deposits SET created_at='" . time()
."', offer_id ='".$_GET['offer_id']."', initial_deposit_amout='"
.$_GET['initial_deposit_amout']."'";

$result = mysqli_query($dbconnect, $sql_add); // Выполнение запроса
if (mysqli_affected_rows($dbconnect)>0) { 
	print "<p>Спасибо, зарегистрировано в базе данных.";
	print "<p><a href=\"index.php\"> Вернуться к списку депозитов </a>"; 
} else { 
	$error_msg = mysqli_error($dbconnect);
	echo 'Ошибка сохранения. ('.$error_msg.')<br>
	<a href="index.php"> Вернуться к списку депозитов</a>'; 
}
?>