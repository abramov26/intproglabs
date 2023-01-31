<?php 
session_start();
if (isset($_SESSION['username'])) {
	header('Location: index.php');
	die();
}
require_once ('/var/www/dbconnect.php');
$error_msg = '';

if (isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])) {

	$username = $_POST['username'];

	$result = $dbconnect->query("SELECT * FROM users WHERE username = '".$username."';");
	$row=mysqli_fetch_array($result);
		
	if ($row['password'] == md5($_POST['password'])) {
		$_SESSION['valid'] = true;
		$_SESSION['timeout'] = time();
		$_SESSION['username'] = $username;
		$row['type'] == 2 ? $_SESSION['admin'] = true : $_SESSION['admin'] = false;
		header('Refresh: 2; URL = index.php');
		echo 'Успешная авторизация. Вы будете перенаправлены на главную';
		die();
	} else {
		$error_msg = 'Неправильные данные. Проверьте правильность ввода';
	}
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ПИ-323 ИП ЛР№5 Абрамов Владислав</title>
</head>
<body>
	<h2>Введите Логин и Пароль</h2> 
	<form action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method = "POST">
		<h4><?php echo $error_msg; ?></h4>
		<input type = "text" name = "username" placeholder = "user: operator" required autofocus><br>
		<input type = "password" name = "password" placeholder = "pwd: operator" required> <br><br>
		<button type = "submit" name = "login">Войти</button>
	</form>
</body>
</html>