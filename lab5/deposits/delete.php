<?php
require_once '/var/www/dbconnect.php';
if (!isset($_GET['deposit_id'])) exit("Требуется GET-параметр: id депозита");
$query = "DELETE FROM deposits WHERE id=" . $_GET['deposit_id'];
$result = mysqli_query($dbconnect, $query);
header("Location: index.php");
exit();
?>