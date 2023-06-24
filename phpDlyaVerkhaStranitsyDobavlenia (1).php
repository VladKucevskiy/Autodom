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
    $query = "INSERT INTO `novosti`(`date`, `NewsName`, `NewsText`, `NewsSource`, `NewsAuthor`, `NewsPicSource`) VALUES ('$DateTime', '$NewsName', '$NewsText', '$NewsSource', '$NewsAuthor', '$NewsPicSource')";

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

<!-- ПРИМЕР ХТМЛ ФОРМЫ ДЛЯ ВВОДА -->
<div class="news-item">
   <div class="news-item-txt">
      <div class="news-date"><input type="text" placeholder="Автор" name="NewsAuthor"></div>
      <div href=""><span><input class="ih1" type="text" name="NewsName" placeholder="Заголовок новости"></span></div>
      <div href="">
         <!-- <textarea type="text" cols="50" rows="25" name="NewsText" placeholder="Текст новости"></textarea> -->
         <textarea cols=50 rows=25 name="NewsText"  placeholder="Текст новости"></textarea>
      </div>
      
      <div class="nd-to"><div href=""><input type="text" placeholder="Ссылка на источник" name="NewsSource"></div></div>
   </div>
   <div class="news-img">  
      <div class="news-item-pic-box">
         <p>Картинка новости</p>
         <input name="NewsPicSource" type="file" placeholder="Картинка">
      </div>
   </div>
</div>