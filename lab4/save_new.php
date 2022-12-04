<?php
require_once '/var/www/dbconnect.php';
// Строка запроса на добавление записи в таблицу:
$sql_add = "INSERT INTO banks SET bank_name='" . $_GET['name']
."', itn_number='".$_GET['itn_number']."', credit_rating='"
.$_GET['credit_rating']."', asset_volume='".$_GET['asset_volume']. "'";

$result = mysqli_query($dbconnect, $sql_add); // Выполнение запроса
if (mysqli_affected_rows($dbconnect)>0) // если нет ошибок при выполнении запроса
{ print "<p>Спасибо, зарегистрировано в базе данных.";
print "<p><a href=\"index.php\"> Вернуться к списку банков </a>"; }
else { print "Ошибка сохранения. <a href=\"index.php\">
Вернуться к списку банков </a>"; }
?>