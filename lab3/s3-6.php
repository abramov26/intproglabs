<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ПИ-323 ИП ЛР№3 Абрамов Владислав</title>
</head>
<body>
	<?	
	if (isset($_GET["firstTaskButton"])) firstTask();
	if (isset($_GET["secondTaskButton"])) secondTask();
	if (isset($_GET["thirdTaskButton"])) thirdTask();

	// Assignment #1
	function firstTask() {
		$sentence = $_GET["sentence"];

		$word_to_delete = $_GET["word"];
		if (isset($sentence) and isset($word_to_delete)) {
			$text = str_replace($word_to_delete, "", $sentence);
			echo $text;
		}
	}

	// Assignment #3
	function secondTask() {
		$sentence = $_GET["sentence"];
		$character = $_GET["character"];

		$words = explode(" ", $sentence);
		$acronym = "";

		foreach ($words as $w) {
			$acronym .= mb_substr($w, 0, 1);
		}

		$words_count = substr_count($acronym, $character);
		echo $words_count;
	}

	// Assignment #8
	function thirdTask() {
		$sentence = $_GET["sentence"];

		$buffer = [];
		$chars = preg_split('//u', $sentence, -1, PREG_SPLIT_NO_EMPTY);

		foreach ($chars as $index => $char) {
			if (isset($buffer[$char])) {
				unset($chars[$index]);
			}
			$buffer[$char] = true;
		}

		$result = implode('', $chars);
		echo $result;
	}
	?>
</body>
</html>