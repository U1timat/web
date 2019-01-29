<?php

$sqlhost="92.243.95.80";
$sqluser="candyshop";
$sqlpass="dEpd66_5";
$db="candyshop";
mysql_connect($sqlhost,$sqluser,$sqlpass)
       or die("MySQL недоступна!".mysql_error());
mysql_select_db($db) or die("Нет соединения с БД!".mysql_error());
mysql_query("set names 'utf8'");

?>