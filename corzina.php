<?php
session_start(); //начинаем сессию


if(!$_SESSION['userid'] ) //задаем сгенерированный GUID в качестве идентификатора пользователя
{
    $_SESSION['userid'] = GUID();
}


include('repository.php'); //подключаем генератор GUID

function giveimage($ud){ //функция получения изображения товара в соответствии с его ID
    mysql_query("set names 'utf8'");
    $sql="SELECT * from candys where id='".$ud."'" or die(mysql_error());
    $data = mysql_query($sql);


    $line=mysql_fetch_row($data);

    return "<img src='upload/". $line[3] ."' widht='25%' height='25%''/>";
}

function givename($ud){ //функция получения названия товара в соответствии с его ID
    mysql_query("set names 'utf8'");
    $sql="SELECT * from candys where id='".$ud."'" or die(mysql_error());
    $data = mysql_query($sql);


    $line=mysql_fetch_row($data);

    return $line[1];
}

function giveprice($ud){ //функция получения стоимости товара в соответствии с его ID
    mysql_query("set names 'utf8'");
    $sql="SELECT * from candys where id='".$ud."'" or die(mysql_error());
    $data = mysql_query($sql);


    $line=mysql_fetch_row($data);

    return $line[2];
}

function counter ($ud) //получаем количество товара 

{
    mysql_query("set names 'utf8'");
    $sql = "select count(*) from corzina where ((id_tovar='".$ud."')
                                  and (id_user='".$_SESSION['userid']."'))"
        or die(mysql_error());


    $data = mysql_query($sql);
    $line=mysql_fetch_row($data);
    return $line[0];

}

require_once 'd:/shop/access/conf_acc.php'
$tovar = $_GET['id'];

$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));
mysql_query("set names 'utf8'");
if(counter($tovar)==0)
{
$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));
    $sql="insert into corzina (id_tovar,id_user,quantyty)
values('".$tovar."','".$_SESSION['userid']."',1)"
        or die(mysql_error());
    mysql_query($sql);
}
else

{
    mysql_query("set names 'utf8'");
    $sql= "UPDATE corzina SET quantyty = quantyty + 1 where id_tovar='".$tovar."'";

    mysql_query($sql);
}


echo "<html><head>
<meta charset='utf-8'>
<title></title><style>
.b1 {background:pink; color: black; font-size: 16pt; font-family: monotype corsiva;}
</style>
</head><body background='images_catalog/3227.jpg'>
<form action='zakaz.php' method='POST'><center>";
echo "
<h1 align=center>
<font face='monotype corsiva'>
Корзина покупок

</font></h1>";

$userd =  $_SESSION['userid'];


echo "<table align='center' border='1'>
<tr align='center'><td align='center'>№</td><td>Наименование</td>
<td align='center'>Внешний вид</td>
<td align='center'>Цена</td>
<td align='center'>Количество</td>
<td align='center'>Сумма</td></tr>";
$i=1;

$amount;
require_once 'd:/shop/access/conf_acc.php'

$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));
mysql_query("set names 'utf8'");

$sql="SELECT * from CORZINA where id_user='".$userd."'" or die(mysql_error());
$data = mysql_query($sql);



while($line=mysql_fetch_array($data, MYSQL_NUM))
{
    echo "<tr align='center'>";
    echo "<td align='center'>";
    echo $i;
    echo "</td>";
    echo "<td align='center'>";
    echo givename($line[1]);
    echo "</td>";
    echo "<td align='center'>".giveimage($line[1])."</td>";
    echo "<td align='center'>";
    echo giveprice($line[1])." &#8381;";
    echo "</td>";
    echo "<td align='center'>";
    echo $line[3];
    echo "</td><td align='center'>";
    echo $line[3]*giveprice($line[1])." &#8381;";
    echo "</td>";
    $amount =  $amount + $line[3]*giveprice($line[1]);
    $i++;
}



echo "</tr><tr align='center'><td colspan='6' align='center'>";
echo "Итого:".$amount." &#8381;";

echo "</td></tr></table>";





echo "<br/><input type='submit' class='b1' value='Оформить заказ'></center></form></body></html>";
?>
