<?php
if(!empty($_FILES)){
   $file = $_FILES['NewsPicSource'];
   $fileName = $file['name'];
   $puthFile = __DIR__ . '/imgNews/' .$fileName;
   move_uploaded_file($file['tmp_name'], $puthFile);
}