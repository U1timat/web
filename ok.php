<?php
session_start(); //запускаем сессию
$fio = $_GET['fio']; //заполнением ФИО запросом GET из базы
$phone = $_GET['phone']; //так же телефон
$userid = $_SESSION['userid']; //так же идентификатор пользователя

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

require_once 'd:/shop/access/conf_acc.php'
   
$mysqli = new mysqli($host, $db_user, $db_pass, $db_name);
if (mysqli_connect_errno()) {
    printf("ошибка подключения: %s\n", mysqli_connect_error());
    exit();
}

    $sql="insert into zakaz (fio,phone,userid) //вставляем запрос в базу на получение значений фамилии, телефона и идентификатора
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
