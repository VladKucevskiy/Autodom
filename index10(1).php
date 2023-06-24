<?php

include_once ('connect_db.php');
$sql="SELECT * FROM products";
$result=mysqli_query($db, $sql);
$row_count=mysqli_num_rows($result);
if ($row_count>0){
    for($i=0; $i < $row_count; $i++){
        $row_arr=mysqli_fetch_array($result);
        $id=$row_arr['id'];
        $DateTime=$row_arr['productDate'];
        $productNumber=$row_arr['productNumber'];
        $productName=$row_arr['name'];
        $productPic=$row_arr['productPic'];
        $cost=$row_arr['cost'];
        $productAvailable=$row_arr['productAvailable'];

        // echo '<div class="NewsName">'.$NewsName.'</div><br>','<div class="Text">'.$News.'<br>'.$DateTime.'</div><br>';
        echo 
    '<div class="col-md-3">
        <div class="product">
            <div class="image">
                    <img src="'.$productPic.'" alt="">
            </div>
            <div class="info">
                <h3>'.$productName.'</h3>
                <ul class="rating">
                    <li><ion-icon name="star"></ion-icon></li>
                    <li><ion-icon name="star"></ion-icon></li>
                    <li><ion-icon name="star"></ion-icon></li>
                    <li><ion-icon name="star"></ion-icon></li>
                    <li><ion-icon name="star-half"></ion-icon></li>
                </ul>
                <div class="info-price">
                    <span class="price">'.$cost.'<small>P</small></span>
                    <button class="add-to-cart"><ion-icon name="cart-outline"></ion-icon></button>
                </div>	
            </div>
        </div>
    </div>';
    }
}
?>