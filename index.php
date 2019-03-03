<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">

  <title>Document</title>
</head>
<body>
  Привет
  <?php
    $number = 12; // integer
    $num = 4.6; //float
    $res = $number + $num;
    $word = 'Переменная равна';
    $bool = true;
    $bool = false;
  //echo $bool;


echo "<br>";
echo defined ("PI") . "<br>";
define('PI',3.14);
echo defined ("PI") . "<br>";
echo PI."<br>";
  $number += 5;
  echo "<br>";
  echo $number . "<br>";
  $res = $number - $num;
  echo $res . "<br>";
    $res = $number / $num;
    echo $res . "<br>";
      $res = $number * $num;
      echo $res . "<br>";
        $res = $number % $num; // остаток от деления
        echo $res . "<br>";
  ?>
</body>
</html>
