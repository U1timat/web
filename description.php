<?php


function giveimage($ud){ //получаем изображения категорий товара
    mysql_query("set names 'utf8'");
    $sql="SELECT * from candys where id='".$ud."'" or die(mysql_error());
    $data = mysql_query($sql);

    $line=mysql_fetch_row($data);
    return "<img src='/upload/". $line[3] ."' height='25%'    width='25%'/>";
}


session_start(); //запускаем сессию
include('repository.php'); //подключем генератор GUID
if(!$_SESSION['userid'] )
{
    $_SESSION['userid'] = GUID();
}
$sqlhost="92.243.95.80"; //подключаемся к базе
$sqluser="candyshop";
$sqlpass="dEpd66_5";
$db="candyshop";
$tovar = $_GET['id'];
echo "<html>
<center>
<font face='Monotype Corsiva' size='15px'>
<head>Кондитерская</head>
</font>
</center>
<link href='Style.css' rel='stylesheet' />
<body>
<form>
<center>
<table border='0' background='41.jpg'>
<tr>
<td width='250px' valign='top'>
<ul>
<li><font face='Monotype Corsiva' size='5px'><a href='index.php'>Главная</a></font></li>
<li><font face='Monotype Corsiva' size='5px'><a href='inet.php'>Интенет-магазин</a></font></li>
<li><font face='Monotype Corsiva' size='5px'><a href='corzina.php'>Корзина</a></font></li>
<li><font face='Monotype Corsiva' size='5px'><a href='shops.php'>Магазины в городе</a></font></li>
<li><font face='Monotype Corsiva' size='5px'><a href='about.php'>О компании</a></font></li>
</ul>
</font>
</td>
<td  width='800px' align='center'>
<font face='Monotype Corsiva' size='7px'>";

if ($_GET['type']== 'Pie') //заполнение по категориям "пирожки" и "тортики"
{
    echo "Пирожки";
}
else echo "Тортики";
echo "</font>";

$sqlhost="92.243.95.80";
$sqluser="candyshop";
$sqlpass="dEpd66_5";
$db="candyshop";
mysql_connect($sqlhost,$sqluser,$sqlpass)
     or die("MySQL недоступна!".mysql_error());
mysql_query("set names 'utf8'");
mysql_select_db($db) or die("Нет соединения с БД!".mysql_error());
$sql="SELECT * from candys where categ='".$_GET['type']."'"

       or die(mysql_error());


$data = mysql_query($sql);
echo "<table border='0'>";


while($line=mysql_fetch_array($data, MYSQL_NUM)) //цикл формирования ассортимента в виде таблицы	
{
    echo "<tr><td width='33%'>";
    echo $line[1];
    echo "</td><td width='33%'>";
    echo $line[2].' '.'&#8381';
    echo "<br/><a href='corzina.php?".'id='.$line[0]."'"."'>В корзину</a>";
    echo "</td><td width='33%'>";
    echo giveimage($line[0]);
    echo "</td></tr>";

}

echo "</table>";

echo "</tr></table>";


echo "</center></form></body></html>";
?>