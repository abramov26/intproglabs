<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ПИ-323 ИП ЛР№4 Абрамов Владислав</title>
</head>
<body>
	<h1>Интернет-программирование, Лабораторная работа №4</h1>
	<h2>Абрамов Владислав, ФИРТ ПИ-323</h2>
	<a href="/">← Вернуться на главную</a>
	<h2>Вариант №3. Банки:</h2>
	<table border="1">
		<tr>
			<th> Название </th> <th> ИНН </th>
			<th> Кредитный рейтинг </th> <th> Объём активов </th>
			<th> Редактировать </th> <th> Уничтожить </th> </tr>
			<?php
			require_once '/var/www/dbconnect.php';
			$result = $dbconnect->query("SELECT * FROM banks"); // запрос на выборку сведений о пользователях
			while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса
				echo "<tr>";
				echo "<td>" . $row['bank_name'] . "</td>";
				echo "<td>" . $row['itn_number'] . "</td>";
				echo "<td>" . $row['credit_rating'] . "</td>";
				echo "<td>" . $row['asset_volume'] . "</td>";
				echo "<td><a href='edit.php?bank_id=" . $row['id']
				. "'>Редактировать</a></td>"; // запуск скрипта для редактирования
				echo "<td><a href='delete.php?bank_id=" . $row['id']
				. "'>Удалить</a></td>"; // запуск скрипта для удаления записи
				echo "</tr>";
			}
			print "</table>";
			$num_rows = mysqli_num_rows($result); // число записей в таблице БД
			print("<P>Всего банков: $num_rows </p>");
			?>
	<p><a href="new.php">Добавить банк</a></p>
	<p><a href="offers/">Задача 5.1. Программы депозитов</a></p>
	<p><a href="deposits/">Задача 5.1. Вклады</a></p>
	<p><a href="gen_pdf.php">Задача 5.2. Формирование отчёта по вкладам в формате PDF</a></p>
	<p><a href="gen_xls.php">Задача 5.2. Формирование отчёта по вкладам в формате XLS</a></p>
</body>
</html>
