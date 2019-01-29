<?php
$i=1;

$amount; //сумма
$sqlhost="92.243.95.80"; //адрес базы
$sqluser="candyshop"; //логин
$sqlpass="dEpd66_5"; //пароль
$db="candyshop"; //база данных

function giveimage($ud){ //получаем изображение
 
    $sql="SELECT * from candys where id='".$ud."'" or die(mysql_error());
    $data = mysql_query($sql);


    $line=mysql_fetch_row($data);

    return "<img src='upload/". $line[3] ."' widht='25%' height='25%''/>";
}

function givename($ud){ //получаем название
mysql_query("set names 'utf8'");
    $sql="SELECT * from candys where id='".$ud."'" or die(mysql_error());
    $data = mysql_query($sql);


    $line=mysql_fetch_row($data);

    return $line[1];
}


function giveusername($ud){ //получаем GUID

    $sql="SELECT * from zakaz where id='".$userid."'" or die(mysql_error());
    $data = mysql_query($sql);


    $line=mysql_fetch_row($data);

    return $line[1];
}



function giveprice($ud){ //получаем стоимость

    $sql="SELECT * from candys where id='".$ud."'" or die(mysql_error());
    $data = mysql_query($sql);


    $line=mysql_fetch_row($data);

    return $line[2];
}


mysql_connect($sqlhost,$sqluser,$sqlpass) //подключаемся  кбазе
   or die("MySQL недоступна!".mysql_error());
mysql_select_db($db) or die("Нет соединения с БД!".mysql_error());

$sql="SELECT * from CORZINA";
$data = mysql_query($sql);

echo "<center>Заказ от Иванова Ивана Ивановича</center>";
echo "<center>Статус:<font color='red'>выполняется</font></center>";

echo "<table border=2 align='center'><tr><td>№</td><td>Название</td><td>Фото</td><td>Цена</td><td>Количество</td><td>Стоимость</td></tr>";



while($line=mysql_fetch_array($data, MYSQL_NUM)) //цикл получения из базы названия заказанной позиции, фото, цены, количества и стомости
    echo "<tr align='center'>
    ";
    echo "
    <td align='center'>
        ";
        echo $i;
        echo "
    </td>";
    echo "
    <td align='left'>
        ";
        echo givename($line[1]);
        echo "
    </td>";
    echo "
    <td align='center'>".giveimage($line[1])."</td>";
    echo "
    <td align='center'>
        ";
        echo giveprice($line[1])." &#8381;";
        echo "
    </td>";
    echo "
    <td align='center'>
        ";
        echo $line[3];
        echo "
    </td>
    <td align='center'>
        ";
        echo $line[3]*giveprice($line[1])." &#8381;";
        echo "
    </td></tr>";
    $amount =  $amount + $line[3]*giveprice($line[1]);
    $i++;
    }
echo "</table>";
?>