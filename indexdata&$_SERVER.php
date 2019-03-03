<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">

  <title>Document</title>
</head>
<body>
  <?
  date_default_timezone_set('Europe/Moscow') . <'br'>;//вывод времени по часовому поясу
echo time() . <>'br';
$date = date('Время - H:i:s', time() - 3600);
$echo date('Время - H:i:s') . '<br>';

$date_now = new DateTime();
$date_now->modify('+5 day');
echo $date_now->format('Время - H:i:s, l');
$arr = [5, 7, 2, 89.2, 8];
$arr_new - [6, 81, 3];

echo count($arr) . '<br>';
print_r($arr); // только для разработчиков - выводит как есть
echo '<br>';
unset($arr[2]);
echo in_array(2, $arr) ? "Да, есть" : "Нет такого";// проверяет на присутствие
echo '<br>';

$arr_merge = arrat_merge($arr, $arr_new); //объединение массивов
print_r($arr_merge);
echo '<br>';

;$arr_slice = array_slice($arr_merge, 0, 2);//обрезание массива
print_r($arr_slice);
echo '<br>';

sort($arr);
print_r($arr);
echo '<br>';

$arr_1 = ["a" => 12, "b" => 56, "c" => 87];
asort($arr_1);//сортирует по возрастанию arsort - по убыванию, ksort - сортирует по алфавиту
print_r($arr_1);
echo '<br>';

shuffle($arr);//перемешивает массив
print_r($arr);
echo '<br>';
$x = 13;
echo 'Цифра ли?' . is_numeric($x) . '<br>'; // цифра ли?
echo 'Целое ли число?' . is_integer($x) . '<br>'; //целая или нет?
echo 'Дробное ли число?' . is_double($x) . '<br>';// дробное или целое?
echo 'Строка или переменная??' . is_string($x) . '<br>'; // ковычки - значит строка
echo 'Являтся ли переменная Boolean?' . is_bool($x) . '<br>'; // булиевая - труили фолс
echo 'Являтся ли переменная массивом?' . is_array($x) . '<br>';// массив или нет ['это массив']
echo 'Проверяет тип переменной' . gettype($x) . '<br>';//

$str = "Пример обычной строки";

 echo strlen($str) . '<br>';// выводит длинну строки
  echo strpos($str, "П") === false ? '\'П\' найдено' : '\'П\' не найдено';// П-символ, который ищем
   echo'<br>';
    echo substr($str, 4, 9) . '<br>';//обрезка строки 4 - кол-во символов, который хотим обрезать. 9 - строка
     echo strtolower($str) . '<br>' . strtoupper($str) . '<br>';// регистр, для кириллице - mb
      echo trim("    пр   осто    те кст   с    про  блемами     ");// обрезаются все пробелы до и после

      $some = -15;
      echo abs($some) . '<br>';//возвращает число по модулю
      $num = 24.56;
      echo round($num) . '<br>';//округляет по правилам математики
      echo ceil($num) . '<br>';//всегда округляет число в больую сторону
      echo ceil($num) . '<br>';//всегда округляет число в меньшую сторону

      echo mt_rand(1, 20) . '<br>';// возвращает случайное число из диапазона
      echo min(12, 23, -2, -5, 19, -4 , 0) . '<br>';// мнимальное число в диапазоне
      echo max(12, 23, -2, -5, 19, -4 , 0) . '<br>';//максимальное число в диапазоне

      $z = 1;
      echo sin($z) . '<br>';// синус
      echo cos($z) . '<br>';// косинус
      echo tan($z) . '<br>';//тангенс
      echo 1 / tan($z) . '<br>';//катангенс

      echo $_SERVER['PHP_SELF']// выводит всякую хуйню - гугл в помощь
      phpinfo();//для разрабов - даёт данные про вашу версию ппыха.

 ?>
</body>
</html>
