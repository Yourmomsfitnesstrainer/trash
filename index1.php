<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">

  <title>Document</title>
</head>
<body>
  <?
class User {

const PASS = "Password";//константу можно вызвать откуда угодно

  public $name;// public - область видимости данные, можно использовать вне класса.
  //protected - прикрепление к классу и классам наследникам.private - только в этом классе
  private $surname = "None";
  private $email;
private $login;
  private $pass;

  function__construct($name, $surname, $login) {
    $this->name = $name;
    $this->surname = $surname;
    $this->login = $login;
echo self::PASS . '<br>';
    $this->showALL("Пользователь");

  }

function showALL($text = "") {
echo $this->name . ", " . $this->surname . '<br>';

}
function getSurname() {
  return $this->surname;
}

function__destruct() {
  print 'Уничтожаетя ' . __CLASS__ . '<br>';
}
  }


$admin = new User("John", "Surname", "Login");
$str = $admin->getSurname();
echo $str . '<br>';
echo User::PASS;
echo '<br>';
$redactor = new User("Bob", "Robinsaniton", "Redactor");
$moderator = new User("Pidr", "Pidrsn", "Moderator");


 ?>
</body>
</html>
