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
	<h2>Вариант №3. Вклады:</h2>
	<table border="1">
		<tr>
			<th> Дата открытия </th> <th> Название </th>
			<th> Начальная сумма вклада </th>
			<th> Редактировать </th> <th> Уничтожить </th> </tr>
			<?php
			require_once '/var/www/dbconnect.php';
			$result = $dbconnect->query("SELECT deposits.id, deposits.created_at, deposit_offers.name, deposits.initial_deposit_amout FROM deposits INNER JOIN deposit_offers ON deposits.offer_id=deposit_offers.id;");
			while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса
				echo "<tr>";
				$date = date("d-m-Y H:i:s", substr($row['created_at'], 0, 10));
				echo "<td>" . $date . "</td>";
				echo "<td>" . $row['name'] . "</td>";
				echo "<td>" . $row['initial_deposit_amout'] . "</td>";
				echo "<td><a href='edit.php?deposit_id=" . $row['id']
				. "'>Редактировать</a></td>"; // запуск скрипта для редактирования
				echo "<td><a href='delete.php?deposit_id=" . $row['id']
				. "'>Удалить</a></td>"; // запуск скрипта для удаления записи
				echo "</tr>";
			}
			print "</table>";
			$num_rows = mysqli_num_rows($result); // число записей в таблице БД
			print("<P>Всего депозитов: $num_rows </p>");
			?>
	<p><a href="new.php">Добавить депозит</a></p>
</body>
</html>
