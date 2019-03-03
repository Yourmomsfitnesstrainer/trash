<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">

  <title>Document</title>
</head>
<body>
  <form action="/check.php" method="GET">
    <label  for="name">name</label>
<input type="text" name="name" value=""><br>
    <label  for="email">email</label>
    <input type="email" name="name" value=""><br>
    <button type="submit">Отправить</button>
</form>
  <?
  echo $_GET['some'];
  if ($_POST['name'] == "")
  echo "Введите ваше имя";
  else
echo $_POST['name'] . '<br>';
echo $_POST['email'] . '<br>';
if ($_POST['email'] == "")
echo "Введите ваш email";

if ($_GET['name'] == "") // позволяет брать данные из url адреса
echo "Введите ваше имя";
else
echo $_GET['name'] . '<br>';
echo $_GET['email'] . '<br>';
if ($_GET['email'] == "")
echo "Введите ваш email";
 ?>
</body>
</html>
