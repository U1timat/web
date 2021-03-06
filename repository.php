<?php

function GUID() //инициализируем использование функции GUID (уникальный идентификатор каждого пользователя, для работы с корзиной и заказами) 
{
    if (function_exists('com_create_guid') === true) //собственно генерирует GUID
    {
        return trim(com_create_guid(), '{}'); //возвращает созданный идентификатор
    }

    return sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', //возвращает значение, полученное с помощью 4 генераторов

        mt_rand(0, 65535), mt_rand(0, 65535), 
        mt_rand(0, 65535), mt_rand(16384, 20479),
        mt_rand(32768, 49151), mt_rand(0, 65535),
        mt_rand(0, 65535), mt_rand(0, 65535));
}




?>