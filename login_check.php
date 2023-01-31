<?php
session_start();
if (!isset($_SESSION['username'])) {
	echo 'Доступно только авторизованным пользователям';
	die();
}