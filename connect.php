<?php
require_once 'd:/shop/access/conf_acc.php'

$mysqli = new mysqli($host, $db_user, $db_pass, $db_name);

if (mysqli_connect_errno()) {
    printf("ошибка подключения: %s\n", mysqli_connect_error());
    exit();
}

mysql_query("set names 'utf8'"); //создаем запрос, при котором задаем используемую кодировку при работе с базой
	mysql_real_escape_string($sqluser),
	mysql_real_escape_string($sqlpassword));
?>
