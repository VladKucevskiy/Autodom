<?php
$db= new mysqli("localhost", "root", "", "db");
if ($db->connect_errno){
    printf(" Не удалось подключиться: %s\n", $db->connect_error);
    exit();
}
if(!$db->set_charset("utf8")){
    printf("Ошибка при загрузке набора символов utf8: %s\n", $db->error);
    exit();
}
?>
