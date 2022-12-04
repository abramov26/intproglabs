<?php
require_once '/var/www/dbconnect.php';
if (!isset($_GET['bank_id'])) exit("Требуется GET-параметр: id банка");
$query = "SELECT * FROM deposit_offers WHERE bank_id =" . $_GET['bank_id'];

$deposit_id = [];
$i = 0;

$result = mysqli_query($dbconnect, $query);
while ($st = mysqli_fetch_array($result)) {
	$deposit_id[$i]=$st['id'];
	$i++;
}

foreach ($deposit_id as $key) {
	$query2 = "DELETE FROM deposits WHERE offer_id = " . $key;
	$result2 = mysqli_query($dbconnect, $query2);
}

$query2 = "DELETE FROM deposit_offers WHERE bank_id =" . $_GET['bank_id'];
$result2 = mysqli_query($dbconnect, $query2);
$query3 = "DELETE FROM banks WHERE id=" . $_GET['bank_id'];
$result3 = mysqli_query($dbconnect, $query3);
header("Location: index.php");
exit();
?>