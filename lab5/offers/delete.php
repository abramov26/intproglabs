<?php
require_once '/var/www/admin_check.php';
require_once '/var/www/dbconnect.php';
if (!isset($_GET['offer_id'])) exit("Требуется GET-параметр: id депозитного предложения");
$query = "DELETE FROM deposits WHERE offer_id =" . $_GET['offer_id'];
$result = mysqli_query($dbconnect, $query);
$query2 = "DELETE FROM deposit_offers WHERE id =" . $_GET['offer_id'];
$result2 = mysqli_query($dbconnect, $query2);
header("Location: index.php");
exit();
?>