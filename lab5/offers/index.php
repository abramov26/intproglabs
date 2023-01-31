<? require_once '/var/www/login_check.php'; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ПИ-323 ИП ЛР№5 Абрамов Владислав</title>
</head>
<body>
	<h1>Интернет-программирование, Лабораторная работа №4</h1>
	<h2>Абрамов Владислав, ФИРТ ПИ-323</h2>
	<a href="/lab4/">← Вернуться в «Банки»</a>
	<h2>Вариант №3. Программы депозитов:</h2>
	<table border="1">
		<tr>
			<th> Название </th> <th> Годовая ставка </th>
			<th> Банк </th>
			<th> Редактировать </th> <th> Уничтожить </th> </tr>
			<?php
			require_once '/var/www/dbconnect.php';
			$result = $dbconnect->query("SELECT deposit_offers.id, deposit_offers.name, deposit_offers.interest_rate, banks.bank_name FROM deposit_offers INNER JOIN banks ON deposit_offers.bank_id=banks.id;");
			while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса
				echo "<tr>";
				echo "<td>" . $row['name'] . "</td>";
				echo "<td>" . $row['interest_rate'] . "</td>";
				echo "<td>" . $row['bank_name'] . "</td>";
				echo "<td><a href='edit.php?offer_id=" . $row['id']
				. "'>Редактировать</a></td>"; // запуск скрипта для редактирования
				echo "<td><a href='delete.php?offer_id=" . $row['id']
				. "'>Удалить</a></td>"; // запуск скрипта для удаления записи
				echo "</tr>";
			}
			print "</table>";
			$num_rows = mysqli_num_rows($result); // число записей в таблице БД
			print("<P>Всего депозитных программ: $num_rows </p>");
			?>
	<p><a href="new.php">Добавить депозитную программу</a></p>
</body>
</html>
