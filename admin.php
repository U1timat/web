<?php
require('repository.php');

echo "<html>
<head>
	<title>Загрузка файлов</title>


</head>
<body>

<form action='admin.php' method='POST' enctype='multipart/form-data' name='frmupload'>
<center>
<input type='file' name='imgfile' id='imgfile' value='fileupload'><br/><br/><br/>
<input type='submit' name='btnsubmit' id='btnsubmit' value='Загрузить'>
<input type='text' name='candyprice' id='candyprice'>
<input type='text' name='candyname' id='candyname'>
<input type='checkbox' name='checkme' id='checkme'>
<center>
</form>
</body>
</html>";



if (isset($_POST['btnsubmit']))
{
    $price = $_POST['candyprice'];
    $name = $_POST['candyname'];

    $GUID = str_replace('-','', strtolower(GUID()));

    $uploaddir = $_SERVER['DOCUMENT_ROOT'] . '/upload/';
    $ext = strtolower(substr(strrchr($_FILES['imgfile']['name'],'.'), 1));
    $uploadfile = $uploaddir .$GUID.'.'.$ext;
    $uploadfile;
    move_uploaded_file( $_FILES['imgfile']['tmp_name'], $uploadfile );


    $categ=isset($_POST['checkme'])?'Cake':'Pie';

    require('connect.php');

    $sql="insert into candys (image,candyprice,candyname,categ)
values('".$GUID.'.'.$ext."','".$price."','".$candyname."','".$categ."' )"

    or die(mysql_error());

    mysql_query($sql);

    echo $sql;
    echo "<h1 align=center><font face='monotype corsiva'>Данные добавлены ! </font></h1>";
}

?>