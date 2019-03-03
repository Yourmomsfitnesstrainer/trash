<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">

  <title>Document</title>
</head>
<body>
<form action="/write.php" method="post">
  <textarea name="massage" rows="8" cols="80"></textarea><br>
  <button type="submit">Отправить</button>
  <?
  //$file = fopen('text/data.txt', 'a');
  //echo fread($sfile, 10);
  //fclose($file);
echo file_get_contents('text/date.txt') . '</br>'; //Вывод на экран из указанного файла
file_put_contents('text/date.txt', 'Testing') . <'/br'>; //записывает инфу в файл
echo file_exists('text/date.txt') . '</br>'; //проверяет есть ли файл по указанному пути
echo filesize('text/date.txt') . '</br>';// выводит размер указанного файла

 rename('text/date.txt', 'text/new_date.txt'); //переименовывание файла
unlink('text/date.txt');//удаляет файлы 
 ?>
</body>
</html>
