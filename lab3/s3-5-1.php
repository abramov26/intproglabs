<?
$a = 0;
if ($_POST['1'] == "нет") $a++;
if ($_POST['2'] == "нет") $a++;
if ($_POST['4'] == "нет") $a++;
if ($_POST['5'] == "нет") $a++;
if ($_POST['6'] == "нет") $a++;
if ($_POST['7'] == "нет") $a++;
if ($_POST['8'] == "нет") $a++;
if ($_POST['11'] == "нет") $a++;
if ($_POST['12'] == "нет") $a++;
if ($_POST['15'] == "нет") $a++;
if ($_POST['16'] == "нет") $a++;
if ($_POST['17'] == "нет") $a++;
if ($_POST['18'] == "нет") $a++;
if ($_POST['20'] == "нет") $a++;
if ($_POST['3'] == "да") $a++;
if ($_POST['9'] == "да") $a++;
if ($_POST['10'] == "да") $a++;
if ($_POST['13'] == "да") $a++;
if ($_POST['14'] == "да") $a++;
if ($_POST['19'] == "да") $a++;
echo ("<h2>Результат опроса</h2>");
echo $_POST['name'];
if ($a > 15) echo ", у вас покладистный характер";
if ($a >= 8 and $a <= 15) echo ", вы не лишены недостатков, но с вами можно ладить";
if ($a < 8) echo ", вашим друзьям можно посочувствовать";
?>