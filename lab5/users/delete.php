<?php
require_once '/var/www/admin_check.php';
require_once '/var/www/dbconnect.php';
if (!isset($_GET['user_id'])) exit("Требуется GET-параметр: id пользователя");
$query = "DELETE FROM users WHERE id=" . $_GET['user_id'];
$result = mysqli_query($dbconnect, $query);
header("Location: index.php");
exit();
?>