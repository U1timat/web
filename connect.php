<?php
require_once 'd:/shop/access/conf_acc.php'

$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));

mysql_query("set names 'utf8'"); //создаем запрос, при котором задаем используемую кодировку при работе с базой
	mysql_real_escape_string($sqluser),
	mysql_real_escape_string($sqlpassword));
?>
