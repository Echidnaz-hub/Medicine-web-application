<?php
 $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
 $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
 $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

 if(mb_strlen($login) <5 || mb_strlen($login) > 90 ) {
    echo "Недопустимая длина логина";
    exit();
 }
 else if(mb_strlen($email) <3 || mb_strlen($email) > 50 ) {
    echo "Недопустимая длина email";
    exit();
 }
 else if(mb_strlen($pass) <2 || mb_strlen($pass) > 30 ) {
    echo "Недопустимая длина пароля";
    exit();
 }

$pass = md5($pass."gog6");

  $mysql = new mysqli('localhost','root','','pyrohod');
  $mysql->query("INSERT INTO `users` (`login`, `pass`, `email`)
  VALUES('$login', '$pass', '$email')");

  $mysql->close();
  header('Location: /delo');
?>