<?php
// Include nessesary libraries
require_once('tcpdf/tcpdf.php');
require_once ('/var/www/dbconnect.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH);
$pdf->setFooterData(array(0,64,0), array(0,64,128));

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// ---------------------------------------------------------

// set default font subsetting mode
$pdf->setFontSubsetting(true);

// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
$pdf->SetFont('dejavusans', '', 10, '', true);

// Add a page
// This method has several options, check the source code documentation for more information.
$pdf->AddPage();


// Set some content to print
$html = <<<EOD
<h1>Вклады (ИП ЛР№4 Абрамов)</h1>
<table cellspacing="0" cellpadding="1" border="1" style="border-color:gray;">
<tr style="background-color:green;color:white;">
<td>№ п/п</td>
<td>Банк</td>
<td>Класс надёжности</td>
<td>Название программы</td>
<td>% годовых</td>
<td>Сумма всех вкладов</td>
</tr>
EOD;


$result = $dbconnect->query("SELECT deposit_offers.id, deposit_offers.name, deposit_offers.interest_rate, banks.bank_name, banks.credit_rating FROM deposit_offers INNER JOIN banks ON deposit_offers.bank_id=banks.id ORDER BY id;");


while ($row=mysqli_fetch_array($result)){
	$id = $row['id'];
	$bank_name = $row['bank_name'];
	$credit_rating = $row['credit_rating'];
	$name = $row['name'];
	$interest = $row['interest_rate'];
	$sum = 0;

	$result2 = $dbconnect->query("SELECT SUM(initial_deposit_amout) AS sum FROM deposits WHERE offer_id = ".$row['id'].";");
	while ($row2=mysqli_fetch_array($result2)){
		if (!$row2['sum']) $row2['sum'] = "0";
		$sum = $row2['sum'];

	}

	$html .= <<<EOD
	<tr>
	<td>$id</td>
	<td>$bank_name</td>
	<td>$credit_rating</td>
	<td>$name</td>
	<td>$interest</td>
	<td>$sum</td>
	</tr>
	EOD;
}           

$html .= <<<EOD
</table>
EOD;

// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

// ---------------------------------------------------------

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('deposits_report.pdf', 'I');