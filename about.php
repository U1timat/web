<?php
echo "<html> // собственно вывод строк
<center> //выравнивает содержимое по центру
<font face='Monotype Corsiva' size='15px'> //задание используемого шрифта и его размера
<head>Кондитерская</head> //собственно заголовок окна страницы
</font> //закрытие тега шрифта
</center> //закрытие тега выравнивания по середине
<link href='Style.css' rel='stylesheet' /> //установка связи с таблицей стилей
<body> //открытие тега заполнения самой веб страницы
<form> //открывем форму т.к. будет использоваться "табличный дизайн" (слева меню, справа основная информация страницы)
<center>
<table border='0' background='41.jpg'> //заполняем фон  указанным файлом
<tr align='center'>
<td width='250px'> //размер в пикселях левой колонки (т.н. меню)
<ul> //открываем маркированный список
<li><font face='Monotype Corsiva' size='5px'><a href='index.php'>Главная</a></font></li> //задаем шрифт, размер шрифта, ссылку на страницу и название страницы
<li><font face='Monotype Corsiva' size='5px'><a href='inet.php'>Интенет-магазин</a></font></li>
<li><font face='Monotype Corsiva' size='5px'><a href='corzina.php'>Корзина</a></font></li>
<li><font face='Monotype Corsiva' size='5px'><a href='shops.php'>Магазины в городе</a></font></li>
<li><font face='Monotype Corsiva' size='5px'><a href='about.php'>О компании</a></font></li>
</ul>
</font>
</td>
<td  width='800px' align='center'> //размер в пикселях правой части колонки (основное содержание страницы)
<font face='Monotype Corsiva' size='10px'> //шрифт, размер
<head>Прототип сайта создан ЭВТ-16-1БЗУ Горожаниновым Е.А. и Андроновым М.Д.</head> //основной текст страницы
</font>
</td>
</tr>
</table>
</center>
</form>
</body>
</html>";

?>