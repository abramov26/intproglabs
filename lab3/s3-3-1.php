<p>Результат:<p>
<?
$c = array();
$a=($_POST['a']);
$b= ($_POST['b']);

printf ("Диапазон значений [1,$a]: <br>");

function usl ($a)
{
    for($x=2; $x <= sqrt($a); $x++) {
        if($a % $x == 0) {
            return false;
        }
    }
    return true;
}
switch ($b) {
    // смотрим, чему равна переменная $z
    case 1:
        for ($i=1;$i<=$a;$i++) {
            if (( $i % 2) == 0)  echo $i."<br>"; ;
        }
        break;
    case 2:
        for ($i=1;$i<=$a;$i=$i+2) {
            if (usl( $i% 2) == 1)  echo $i."<br>";;
        }
        break;
    case 3:
        for ($i=1;$i<=$a;$i=$i+1) {
            if (usl($i))  echo $i."<br>";;
        }
        break;
    case 4:
        for ($i=2;$i<=$a;$i=$i+1) {
            if (!usl($i)) echo $i."<br>"; ;
        } break;
}
?>