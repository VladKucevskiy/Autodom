<?php
   $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
   $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

   if(mb_strlen($login) < 5 || mb_strlen($login) > 16) {
      echo "invalid login length";
      exit();
   } else if(mb_strlen($pass) < 5 || mb_strlen($pass) > 24) {
      echo "invalid password length";
      exit();
   }

   $pass = md5($pass."addedChars12345");

   $mysql = new mysqli("localhost", "root", "", "db");
   $mysql->query("INSERT INTO `reg` (`user_login`, `user_pass`) VALUES('$login', '$pass')");
   $mysql->close();

   header('Location: /');