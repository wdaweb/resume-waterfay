<?php

include_once "../base.php";
$row=[];
if(!empty($_FILES['img']['tmp_name'])){
    $filename=$_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'],'../img/'.$filename);
    $row['img']=$filename;
}

    $row['text']=$_POST['text'];
    $row['title']=$_POST['title'];
    $row['sh']=1;
    $row['sort']=1;

$Draw->save($row);
to("../backend/main.php?do=draw");

// switch($table){
//     case "blog":
//         $data['text']=$_POST['text'];
//         $data['sh']=0;
//     break;
//     case "draw":
//         $data['text']=$_POST['text'];
//         $data['sh']=0;
//     break;
//     case "web":
//         $data['sh']=0;
//     break;
// }

?>