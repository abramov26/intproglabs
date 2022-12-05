<?
require_once ('/var/www/dbconnect.php');

function xlsBOF() {
	echo pack("ssssss", 0x809, 0x8, 0x0, 0x10, 0x0, 0x0); 
	return;
}

function xlsEOF() {
	echo pack("ss", 0x0A, 0x00);
	return;
}

function xlsWriteNumber($Row, $Col, $Value) {
	echo pack("sssss", 0x203, 14, $Row, $Col, 0x0);
	echo pack("d", $Value);
	return;
}

function xlsWriteLabel($Row, $Col, $Value ) {
	$L = strlen($Value);
	echo iconv("cp1251", "utf-8", pack("ssssss", 0x204, 8 + $L, $Row, $Col, 0x0, $L));
	echo $Value;
	return;
}

header("Content-Type: application/force-download");
header("Content-Type: application/octet-stream");
header("Content-Type: application/download");
header("Content-type: application/vnd.ms-excel; charset=UTF-8");
header("Content-Disposition: attachment;filename=deposits_report.xls");
header("Pragma: no-cache");
header("Expires: 0");

xlsBOF();

xlsWriteLabel(0,0,iconv("utf-8","cp1251", "№ п/п")); 
xlsWriteLabel(0,1,iconv("utf-8","cp1251", "Банк"));
xlsWriteLabel(0,2,iconv("utf-8","cp1251", "Класс надёжности")); 
xlsWriteLabel(0,3,iconv("utf-8","cp1251", "Название программы")); 
xlsWriteLabel(0,4,iconv("utf-8","cp1251", "% годовых")); 
xlsWriteLabel(0,5,iconv("utf-8","cp1251", "Сумма всех вкладов")); 

$result = $dbconnect->query("SELECT deposit_offers.id, deposit_offers.name, deposit_offers.interest_rate, banks.bank_name, banks.credit_rating FROM deposit_offers INNER JOIN banks ON deposit_offers.bank_id=banks.id ORDER BY id;");
$i=1;
while($row=mysqli_fetch_array($result)){ 
	$id = $row['id'];
	$bank_name = $row['bank_name'];
	$credit_rating = $row['credit_rating'];
	$name = $row['name'];
	$interest = $row['interest_rate'];
	$sum = 0;

	$result2 = $dbconnect->query("SELECT SUM(initial_deposit_amout) AS sum FROM deposits WHERE offer_id = ".$row['id'].";");
	while ($row2=mysqli_fetch_array($result2)){
		if (!$row2['sum']) $row2['sum'] = 0;
		$sum = $row2['sum'];

	}

	xlsWriteLabel($i,0,$id);
	xlsWriteLabel($i,1,$bank_name); 
	xlsWriteLabel($i,2,$credit_rating);
	xlsWriteLabel($i,3,$name); 
	xlsWriteLabel($i,4,$interest);  
	xlsWriteLabel($i,5,$sum);
	$i++;
}


xlsEOF();

?>