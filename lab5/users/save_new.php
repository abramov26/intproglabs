<?php
require_once '/var/www/admin_check.php';
require_once '/var/www/dbconnect.php';
// Строка запроса на добавление записи в таблицу:
$password = md5($_POST['password']);
$sql_add = "INSERT INTO users SET username='" . $_POST['username']
."', password='".$password."', type='"
.$_POST['account_type']."'";

$result = mysqli_query($dbconnect, $sql_add); // Выполнение запроса
if (mysqli_affected_rows($dbconnect)>0) { 
	print "<p>Спасибо, зарегистрировано в базе данных.";
	print "<p><a href=\"index.php\"> Вернуться к списку пользователей</a>"; 
} else { 
	$error_msg = mysqli_error($dbconnect);
	echo 'Ошибка сохранения. ('.$error_msg.')<br><a href="index.php">
	Вернуться к списку пользователей</a>'; }
?>