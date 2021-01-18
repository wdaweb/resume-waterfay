  
<?php

//請參考add.php的註解，自行讀懂下列程式碼的功能
include_once "../base.php";

$R_img=new DB('myweb_img');
$row=$R_img->find(1);
$delfile='../img/'.$row['img'];
if(!empty($_FILES['img']['tmp_name'])){
    unlink($delfile);
    $filename=$_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'],'../img/'.$filename);
    $row['img']=$filename;
}

if(isset($_POST['text'])){
    $row['text']=$_POST['text'];
    }
    $R_img->save($row);
to("../backend/main.php?do=resume_img.php");

?>