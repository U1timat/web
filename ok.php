﻿<?php
session_start();
$fio = $_GET['fio'];
$phone = $_GET['phone'];
$userid = $_SESSION['userid'];

echo "<html>
<center>
<font face='Monotype Corsiva' size='15px'>
<head>Кондитерская</head>
</font>
</center>
<link href='Style.css' rel='stylesheet' />
<body>
<form action='ok.php'>
<center>
<table border='0' background='41.jpg'>
<tr>
<td width='250px'>
<ul>
<li><font face='Monotype Corsiva' size='5px'><a href='index.php'>Главная</a></font></li>
<li><font face='Monotype Corsiva' size='5px'><a href='inet.php'>Интенет-магазин</a></font></li>
<li><font face='Monotype Corsiva' size='5px'><a href='corzina.php'>Корзина</a></font></li>
<li><font face='Monotype Corsiva' size='5px'><a href='shops.php'>Магазины в городе</a></font></li>
<li><font face='Monotype Corsiva' size='5px'><a href='about.php'>О компании</a></font></li>
</ul>
</font>
</td>
<td  width='800px' align='center'><br/>
<font face='Monotype Corsiva' size='15px'>Спасибо за заказ!</font></li>";

$sqlhost="92.243.95.80";
$sqluser="candyshop";
$sqlpass="dEpd66_5";
$db="candyshop";
mysql_connect($sqlhost,$sqluser,$sqlpass)
   or die("MySQL недоступна!".mysql_error());
mysql_select_db($db) or die("Нет соединения с БД!".mysql_error());


    $sql="insert into zakaz (fio,phone,userid)
values('".$fio."','".$phone."','".$_SESSION['userid']."')"
        or die(mysql_error());
    mysql_query($sql);

echo
"</td>
</tr>
</table>
<center>
</form>
</body>
</html>";
?>