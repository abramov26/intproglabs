<?
$a = "Здравствуйте, ";

switch ($_POST["b"]) {
	case "Ivan_php":
	$c = "Иванов Иван Иванович";
	break;
	case "petya":
	$c = "Пётр";
	break;
	case "vasya":
	$c = "Василий";
	break;
	case "kolya":
	$c = "Николай";
	break;
	default:
		$a = ""; // очищаем строку приветствия
		$c = "Вы не зарегистрированный пользователь!";

	}

echo($a . $c);
?>