<? require_once '/var/www/admin_check.php'; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ПИ-323 ИП ЛР№5 Абрамов Владислав</title>
</head>
<body>
	<h1>Интернет-программирование, Лабораторная работа №5</h1>
	<h2>Абрамов Владислав, ФИРТ ПИ-323</h2>
	<a href="../">← Вернуться назад</a>
	<h2>Пользователи:</h2>
	<table border="1">
		<tr>
			<th> id </th> <th> Никнейм </th>
			<th> Статус </th>
			<th> Редактировать </th> <th> Уничтожить </th> </tr>
			<?php

			require_once '/var/www/dbconnect.php';
			$result = $dbconnect->query("SELECT * FROM users"); // запрос на выборку сведений о пользователях
			while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса
				echo "<tr>";
				echo "<td>" . $row['id'] . "</td>";
				echo "<td>" . $row['username'] . "</td>";
				$row['type'] == 2 ? $admin_status = "Администратор" : $admin_status = "Оператор";
				echo "<td>" . $admin_status . "</td>";
				echo "<td><a href='edit.php?user_id=" . $row['id']
				. "'>Редактировать</a></td>"; // запуск скрипта для редактирования
				echo "<td><a href='delete.php?user_id=" . $row['id']
				. "'>Удалить</a></td>"; // запуск скрипта для удаления записи
				echo "</tr>";
			}
			print "</table>";
			$num_rows = mysqli_num_rows($result); // число записей в таблице БД
			print("<P>Всего учётных записей: $num_rows </p>");
			?>
			<p><a href="new.php">Добавить пользователя</a></p>
</body>
</html>
