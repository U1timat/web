<?php
session_start();
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
Фамилия имя, отчество<input type='text' id='fio' name='fio'/><br/>
Контактный телефон<input type='text' id='phone' name ='phone'/><br/>
<input type='submit'/>
</td>
</tr>
</table>
<center>
</form>
</body>
</html>";
?>