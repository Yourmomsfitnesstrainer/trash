<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">

  <title>Document</title>
</head>
<body>
  <?
$words = 'Привет'; //тут она глобальная
  echo "Результат" . $words . '<br>';
  function math($x, $y, $a) {
    global $words;
    $res = $x + $y;
    printSome($res); //тут "вордс и рес локальные" и будут работать только в пределах этой фуии
return $res;
}
  function printSome($text, $num = 5) {
    static $sum = 0;
    $sum++;
    echo 'Значение переменной $num' . $num . '<br>';

    echo "@Функция вызова" . $text'<br>';
    echo "$num * 2" . '<br>';

  }
  $word = 'Просто текст';
  prontSome($word, 10);
  prontSome('Привет мир,' 5);
  prontSome($word, 15);//Вызывает указанную ф-ю сколько угодно раз.

$result = math(5, 7, 8);
echo '<br> Результат сложения:' . $result '<br>';


 ?>
</body>
</html>
