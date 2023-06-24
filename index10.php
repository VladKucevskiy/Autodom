<?php

include_once ('connect_db.php');
$sql="SELECT * FROM siteNews";
$result=mysqli_query($db, $sql);
$row_count=mysqli_num_rows($result);
if ($row_count>0){
    for($i=0; $i < $row_count; $i++){
        $row_arr=mysqli_fetch_array($result);
        $id=$row_arr['id'];
        $DateTime=$row_arr['date'];
        $NewsName=$row_arr['NewsName'];
        $NewsText=$row_arr['NewsText'];
        $NewsSource=$row_arr['NewsSource'];
        $NewsAuthor=$row_arr['NewsAuthor'];
        $NewsPicSource=$row_arr['NewsPicSource'];

        // echo '<div class="NewsName">'.$NewsName.'</div><br>','<div class="Text">'.$News.'<br>'.$DateTime.'</div><br>';
        echo 
        '<div class="newsNews">
        <div class="newsChapter">
            <div class="newsName">
            <em>'.$NewsName.'</em>
            </div>
            <div class="newsData">
            02.04.2022
            </div>
        </div>
        <div class="newsImages">
        <img src="'.$NewsPicSource.'">
        </div>
        <section class="Text-News">
            <p>'.$NewsText.'</p>
        </section>
    </div>';
    }
}
?>