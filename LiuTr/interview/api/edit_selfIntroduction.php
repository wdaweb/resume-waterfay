  
<?php

//請參考add.php的註解，自行讀懂下列程式碼的功能
include_once "../base.php";

$SelfIntroduction=new DB('SelfIntroduction');
$row=$SelfIntroduction->find(1);
if(!empty($_FILES['img']['tmp_name'])){
    $filename=$_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'],'../img/'.$filename);
    $row['img']=$filename;
    $SelfIntroduction->save($row);
}

imagedestroy($im); 
to("../main.php?do=self_introduction");

?>