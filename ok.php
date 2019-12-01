<?php
session_start(); //запускаем сессию
$fio = ($_GET['fio']) ? $mysqli_real_escape_string($_get['fio']) : ''; //заполнением ФИО 
$phone = ($_GET['phone']) ? $mysqli_real_escape_string(trim($_get['phone'])) : ''; //так же телефон
$userid = ($_SESSION['userid']) ? $mysqli_real_escape_string(trim($_get['fio'])) : ''; //так же идентификатор пользователя

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
   
 $link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));
   
}

    $sql = $mysqli->prepare ("insert into 'zakaz' values(?,?,?)"
    $sql->bind_param("sss',$fio, $phone, $userid);
    $sql->execute();
  

echo
"</td>
</tr>
</table>
<center>
</form>
</body>
</html>";
?>
