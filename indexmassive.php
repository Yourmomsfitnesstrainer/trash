<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">

  <title>Document</title>
</head>
<body>
  Привет
  <?
$x = 0;
$arr_1 = array(0, 4 , 6, "Some", true, 6.8);
$arr_2 = [5, 7];
$arr_1[0] = 5;
echo $arr_1[0] '<br>'; //вот тебе простой массив

$arr_3 = array(array(1, 4, 'call')array( 4 , 6, "Some", true, 6.8));
$arr_3[1][2] = 6;
echo $arr_3[1][2] . '<br>';//двойной массив

$arr_4 = array ("short" => "Dict", "Long" => "Dictionary");
$arr_4["long"] = "Dictionary"
echo $arr_4["string"]"string" . '<br>';//ассцоциативные массивы
foreach($arr_4 as $key => $value) {
  echo 'Ключ:' . $key . ', значение: ' . $value . '<br>' ; //перебор ассоциативного массива
}


 ?>
</body>
</html>
