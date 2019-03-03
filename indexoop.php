<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">

  <title>Document</title>
</head>
<body>
  <?
class User {
  public $name;// public - область видимости данные, можно использовать вне класса.
  //protected - прикрепление к классу и классам наследникам.private - только в этом классе
  private $surname = "None";
  private $email;
private $login;
  private $pass;
  }


$admin = new User();
$admin->$name = "Jone";
echo $admin->$name;

$redactor = new User();
$redactor->$name = "Bob";
echo $redactor->$name;

$moderator = new User();
$moderator->$name = "Pidr";
echo $moderator->$name;

 ?>
</body>
</html>
