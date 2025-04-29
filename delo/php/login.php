<?php
 $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
 $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

 $pass = md5($pass."gog6");

 if(mb_strlen($login) <5 || mb_strlen($login) > 90 ) {
    echo "Недопустимая длина логина";
    exit();
 }

 else if(mb_strlen($pass) <2 || mb_strlen($pass) > 32 ) {
    echo "Недопустимая длина пароля";
    exit();
 }
  $mysql = new mysqli('localhost','root','','pyrohod');

  $result = $mysql->query("SELECT * FROM `users` WHERE `login`='$login' AND `pass`= '$pass'");
  $user = $result->fetch_assoc();
  if(count($user) == 0) {
    echo "Такой пользователь не найден";
    exit();
}

setcookie('user', $user['email'], time() + 3600, "/");


  $mysql->close();
  header('Location: /delo');
?>