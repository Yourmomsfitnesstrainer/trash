<?
//session_start();
setcookie("name", $_POST['name'], time() - 3600);
setcookie("email", $_POST['email'], time() - 3600);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">

  <title>Document</title>
</head>
<body>
  <form action="/actiom.php" method="post">
Имя
<input type="text" name="name" value=""><br>
Email
    <input type="email" name="name" value=""><br>
    <button type="submit">Отправить</button>
</form>
  <?
    //session_destroy();
//  If($_SESSION['name'] != "" || $_SESSION['email'] != ""){
  //echo "Имя пользователя" . $_SESSION['name'] . '<br>';
//  echo "Email пользователя" . $_SESSION['email'] . '<br>';
}


  If($_COOKIE['name'] != "" || $_COOKIE['email'] != ""){
  echo "Имя пользователя" . $_COOKIE['name'] . '<br>';
  echo "Email пользователя" . $_COOKIE['email'] . '<br>';

 ?>
</body>
</html>
