
<center>
<font face='Monotype Corsiva' size='15px'>
<head>Кондитерская</head>
</font>
</center>
<link href='Style.css' rel='stylesheet' />
    <script src='https://api-maps.yandex.ru/2.1/?lang=ru_RU' type='text/javascript'></script>
    <script type='text/javascript'>
        ymaps.ready(init);
        var myMap,
            myPlacemark;

        function init(){
            myMap = new ymaps.Map('map', {
                center: [58.008256, 56.240441],
                zoom: 7
            });

            myPlacemark = new ymaps.Placemark([58.008256, 56.240441], {
                hintContent: 'Пермь!',
                balloonContent: 'Наш магазин'
            });

            myMap.geoObjects.add(myPlacemark);
        }
    </script>
<body>
<form>
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
<td  width='800px' align='center'>
    <div id='map' style='width: 600px; height: 400px'></div>
</td>
</tr>
</table>
<center>
</form>
</body>
</html>";
?>










?>