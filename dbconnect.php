<?php

define("DATABASE_HOST", "mysql");
define("DATABASE_USER", "intproglabsuser");
define("DATABASE_PASSWORD", "intproglabspassword");
define("DATABASE_NAME", "intproglabs");

$dbconnect = mysqli_connect(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD, DATABASE_NAME);

if($dbconnect === false) die("ERROR: Could not connect to DB." . $dbconnect->connect_error);

?>