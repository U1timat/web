<?php
ini_set('display_errors','Off');
mysql_connect("92.243.95.80","candyshop","dEpd66_5") //устанавливаем соединение по указанному адресу, с указанным логином и паролем
       or die("MySQL недоступна!".mysql_error()); // в случае отрицательного исхода событий выдаем ошибку
mysql_select_db("candyshop") or die("Нет соединения с БД!".mysql_error()); //выбираем нужную базу, если не получается по какой-либо причине (нет базы или доступа) пишем ошибку

mysql_query("set names 'utf8'"); //создаем запрос, при котором задаем используемую кодировку при работе с базой
	mysql_real_escape_string($sqluser),
	mysql_real_escape_string($sqlpassword));
?>