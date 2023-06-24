<!DOCTYPE html>
<?php
include ("picUpload.php");
include ("index11.php");
if (isset($_POST['insert']))
{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "db";
    
    
    
    $NewsName = $_POST['NewsName']; 
    $NewsText = $_POST['NewsText'];
    $NewsSource = $_POST['NewsSource'];
    $NewsAuthor = $_POST['NewsAuthor'];
    $NewsPicSource = 'imgNews/'.$fileName;
    
    $connect = mysqli_connect ($hostname, $username, $password, $databaseName);
    $query = "INSERT INTO `siteNews`(`date`, `NewsName`, `NewsText`, `NewsSource`, `NewsAuthor`, `NewsPicSource`) VALUES ('$DateTime', '$NewsName', '$NewsText', '$NewsSource', '$NewsAuthor', '$NewsPicSource')";

    $result = mysqli_query($connect,$query);

    if ($result)
    {
        echo 'Data Inserted'.$fileName;
    } else {
        echo 'Data Not Inserted';
    }
    
    
    mysqli_close($connect);
}

?>
<!--[if lt IE 7]><html lang="ru" class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html lang="ru" class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html lang="ru" class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="ru">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />

	<title>Новости</title>
    <link rel="icon" href="img/pngwing.com (1)" type="image/png">
	<meta content="" name="description" />
	<meta content="" property="og:image" />
	<meta content="" property="og:description" />
	<meta content="" property="og:site_name" />
	<meta content="website" property="og:type" />

	<meta content="telephone=no" name="format-detection" />
	<meta http-equiv="x-rim-auto-match" content="none">

	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<link rel="shortcut icon" href="favicon.png" />

	<link rel="stylesheet" href="libs/bootstrap/bootstrap-grid-3.3.1.min.css" />
	<link rel="stylesheet" href="libs/font-awesome-4.2.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="libs/fancybox/jquery.fancybox.css" />
	<link rel="stylesheet" href="libs/owl-carousel/owl.carousel.css" />
	<link rel="stylesheet" href="libs/countdown/jquery.countdown.css" />
	<link rel="stylesheet" href="css (1)/fonts.css"/>
	<link rel="stylesheet" href="css (1)/main.css"/>
	<link rel="stylesheet" href="css (1)/media.css"/>
</head>
<body>
<header>
    <div class="top_line">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="top_addr">
                        <strong>Луганск</strong>
                        <a class="fancybox" href="#map">ул. Советская,29</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="logo_wrap">
                        <a  href="#" class="logo"><img src="img/pngwing.com (1).png" alt="Автосервис АВТО ДОМ"></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="top_addr ta_right">
                        <strong>+380 (72) <span>1000-897</span></span></strong>
                        <a class="fancybox" href="#callback">Заказать обратный звонок</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Автосервис с безупречной репутацией</h1>
            </div>
        </div>
    </div>
    <div class="buttons_top">
        <div class="container">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-11">
                    <a href="#" class="button st_button">Оценить стоимость<br>ремонта по фото</a>
                    <a href="#" class="button">Прайс</a>
                </div>
            </div>
        </div>
    </div>
    
</header>
<nav class="top_mnu">
    <div class="container">
        <div class="row">
            <ul>
                <li><a href="index.html">Главная</a></li>
                <li><a href="Onas.html">О нас</a></li>
                <li class="active"><a href="add-news.php">Добавить новость</a></li>
                <li><a href="Novosti.php">Новости</a></li>
                <li><a href="kontakt.html">Контакты</a></li>
                <li><a href="tovar.php">Товары</a></li>
            </ul>
            <div class="waranty">
                <div class="w_left"><span>1</span> год</div>
                <div class="w_right">Гарантия<br>на все работы</div>
            </div>
        </div>
    </div>
    
</nav>

<!--  -->
<article class="newsadd">
<div class="formContent">
    <form action="add-news.php" method="post" enctype="multipart/form-data">              
        <div class="inpNameNews">
            <input type="text" size="50" placeholder="Заголовок новости" name="NewsName">
        </div> <br>
        <input type="file" name="NewsPicSource" value="Добавить картинку" class="addImg"> <br>
        <input type="text" name="NewsAuthor" placeholder="Указать автора"> <br>
        <textarea name="NewsText" placeholder="Текст новости" cols="30" rows="15" class="addText"></textarea> <br><br>
        <input type="submit" name="insert" value="Добавить новость"><br>
    </form> 
</div>  
</article>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                ©avtodom.com 2013
            </div>
            <div class="col-md-7">
                <nav class="bot_mnu">
                    <ul>
                        <li><a href="Onas.html">О нас</a></li>
                        <li><a href="Novosti.php">Новости</a></li>
                        <li><a href="#">Полезная информация</a></li>
                        <li><a href="kontakt.html">Контакты</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-2">
                <img src="" alt="alt">
            </div>
        </div>
    </div>
</footer>
</body>