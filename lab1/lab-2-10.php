<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Абрамов В., ПИ-323</title>
</head>
<body>
<table border="1">
    <?php
    $count = 0;
    for ($i = 1; $i <= 10; $i++) {
        echo("<tr>");
        for ($k = 1; $k <= 10; $k++) {
            $count++;
            echo("<td align=center>");
            if ($count % 2 == 0) {
                print "<font style=\"color:#FF0000\">$count</font>";
            } else {
                print "<font style=\"color:#000000\">$count</font>";
            }
            echo("</td>");
        }
        echo("</tr>");
    }
    ?>
</table>
</body>
</html>
