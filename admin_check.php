<?php
session_start();
if (!$_SESSION['admin']) {
	echo 'Доступно только администраторам';
	die();
}