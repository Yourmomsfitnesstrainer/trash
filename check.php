<?php
header('Location: /');
exit();// or die();

if ($_GET['name'] == "") // позволяет брать данные из url адреса
echo "Введите ваше имя";
else
echo $_GET['name'] . '<br>';
if ($_GET['email'] == "")
echo "Введите ваш email";
else
echo $_GET['email'] . '<br>';


?>
