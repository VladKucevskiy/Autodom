<?php
   setcookie('user', $user['user_login'], time() - 1500, "/");
   header('Location: /');