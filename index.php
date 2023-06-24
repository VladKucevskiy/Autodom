<!DOCTYPE html>
<html lang="ru">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>aut 1</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link rel="stylesheet" href="style.css">
</head>
<body>
   <div class="container mt-4">
      <div class="row">
         <?php
            if(!$_COOKIE['user']):
         ?>
         <div class="col">
            <h1>Reg</h1><br>
            <form action="check.php" method="post">
               <input type="text" name="login" id="login" class="form-control" placeholder="login"><br>
               <input type="password" name="pass" id="pass" class="form-control" placeholder="password"><br>
               <button type="submit" class="btn btn-success btn-new">registration</button>
            </form>
         </div>
         <div class="col">
            <h1>Aut</h1><br>
            <form action="auth.php" method="post">
               <input type="text" name="login" id="login" class="form-control" placeholder="login"><br>
               <input type="password" name="pass" id="pass" class="form-control" placeholder="password"><br>
               <button type="submit" class="btn btn-success btn-new">authorization</button>
            </form>
         </div>
         <?php
            else:
         ?>
         <p style="font-size: 22px;">success authorization, 
         <span style="color: steelblue;"><?=$_COOKIE['user'] ?></span>. For dismiss cookie <a style="text-decoration: underline; color: steelblue;" href="/exit.php">click this</a></p>
         <?php
            endif;
         ?>
      </div>
   </div>
</body>
</html>