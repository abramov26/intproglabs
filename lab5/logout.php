<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);

   header('Refresh: 2; URL = index.php');
   echo 'Вы вышли из аккаунта и будете перенаправлены на страницу авторизации';
?>