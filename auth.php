<?php
   $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
   $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

   $pass = md5($pass."addedChars12345");

   $mysql = new mysqli("localhost", "root", "", "db");
   $result = $mysql->query("SELECT * FROM `reg` WHERE `user_login` = '$login' AND `user_pass` = '$pass'");
   $user = $result->fetch_assoc();
   if(count($user) == 0) {
      echo "user not found";
      exit();
   }
   setcookie('user', $user['user_login'], time() + 1500, "/");
   
   $prio = $mysql->query("SELECT * FROM `reg` WHERE `user_login` = '$login' AND `priority` = 1");
   $row_count=mysqli_num_rows($prio);
   if ($row_count>0){ 
      header('Location: /index.html');
      } 
      else {
      header('Location: /user.php');
   }

   $mysql->close();
