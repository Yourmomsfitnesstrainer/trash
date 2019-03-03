<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">

  <title>Document</title>
</head>
<body>
  Привет
  <?php
echo "<b>Privet</b><br>" . 'Привет2' "<br>hi</br>";
echo '\''; //правильно
echo '\''; //неправильно без слеша
echo '\'<br>';
echo "\"<br>";
echo "\\<br>";

/*Залупа большой комментарий
*/
// коммент на 1 строку
# коммент на 1 строку
  ?>
  <?="<b>Privet</b><br>" ?>
</body>
</html>
