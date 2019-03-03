<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">

  <title>Document</title>
</head>
<body>
  <?
interface Human {
  public function talk();
  public function walk();

}
interface Mutant extends Human {
  public function fly();
}

class Person implements Mutant {
  function talk() {
    echo "Человек говорит" . '<br>';

  }
  function walk() {
    echo "Человек ходит" . '<br>';
}
function fly() {
  echo "Мутант летает" . '<br>';
}
$bob = new Person();
$bob->walk();
$bob->talk();
$bob->fly();

// трейты:

trait PrintSome {
  public function talk() {
    echo "Привет мир" . '<br>';
  }
  public function sayBye() {
    echo "Пока мир" . '<br>';
  }
}
trait Testing {
  public function some() {
    echo "Работа тестовой ф-ии" . '<br>';
  }
}
class Test {
  use PrintSome, Testing;
}
class Test2, Testing {
  use PrintSome;
}

$oblect2 new Test();
$obj2->talk();
$obj->sayBye();
//трейты нужно использовать в классах
//абстрактные классы:

abstract class Car {
  protected $speed;
  protected $color;

  abstract protected function showInfo();
  }

class BMW extends Car {
  function __construct($speed) {
    $thos->speed;
  }
  public function showInfo() {
    echo this->speed;
    echo "Скорость автомобиля" . $this->speed;
  }
}
$m3 =  new BMW(240);
$m3->showInfo();
 ?>
</body>
</html>
