<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">

  <title>Document</title>
</head>
<body>
  <?
class Car {
  protected $speed;
  protected $wheels;
  protected $color;

function __construct($speed, $color) {
  $this->speed = $speed;
  $this->color = $color;
}

  fnction showSpeed() {
    echo "Скорость автомобиля" . $this->speed . '<br>';
  }
}

class BMW extends Car {
private $model;

function __construct($speed, $model, $color) {
  parent::__construct($speed, $color);
  $this->model = $model;
}

function setModel() {
  $this->model = $model;
  echo "Модель автомобиля" . $this->model . '<br>';
  echo "Цвет автомобиля" . $this->color . '<br>';

class Audi extends Car {


}

}

}

$m3 = new BMW(340, "Белый", "M3");
$m3->showSpeed();
$m3->setModel("M3");

$m5 = new BMW(340, "Синий", "M5");
$m5->showSpeed();
$m5->setModel("M5");

 ?>
</body>
</html>
