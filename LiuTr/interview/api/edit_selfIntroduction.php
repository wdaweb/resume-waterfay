  
<?php

//請參考add.php的註解，自行讀懂下列程式碼的功能
include_once "../base.php";

$SelfIntroduction=new DB('SelfIntroduction');
$row=$SelfIntroduction->find(1);
$delfile='../img/'.$row['img'];
if(!empty($_FILES['img']['tmp_name'])){
    unlink($delfile);
    $filename=$_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'],'../img/'.$filename);
    $row['img']=$filename;
    $SelfIntroduction->save($row);
}

to("../backend/main.php?do=self_introduction");

?>