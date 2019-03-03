<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">

  <title>Document</title>
</head>
<body>
  Привет
  <?
  $num = 4;
  switch($num){
    case "56":
    echo '$num = "56"';
    break;
    case 5:
    echo '$num = "5"';
      break;
      case 4:
      echo '$num = "4"';
        break; // if не вывести break, то оператор будет работать дальше
        case "5":
          break;
          default://как else
          echo "Eror";

  }// оператор условий
  echo "" === false ? "True" : "False"; //оператор эквивалентности
$x = 89; //тут начинается оператор if
$y = 12;
$bool = false;
if($x > $y || $bool != false) {
echo 'Переменные не равны';
}
if($x == $y) {
echo 'Переменные равны';  // не выведет
}
if($x != $y) {
echo 'Переменные не равны';  // выведет
}
if($x > $y) {
}
echo 'Переменная х больше за у';  // не выведет, х больше
if($x == 12) {
  echo 'Сработала первая проверка';
} else if ($x == 89){
    echo 'Сработала 1.5 проверка';
    else
  echo 'Сработала вторая проверка';

}
echo $x==59 && $y==? 'True' : 'False';

 ?>
</body>
</html>
