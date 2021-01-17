<?php

include_once "../base.php";
$table=$_POST['table'];
$db=new DB($table);
$row=[];
if(!empty($_FILES['img']['tmp_name'])){
    $filename=$_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'],'../img/'.$filename);
    $row['img']=$filename;
}
switch($table){
    case "draw":
    $row['text']=$_POST['text'];
    $row['title']=$_POST['title'];
    $row['sh']=1;
    $row['sort']=1;
    break;
    case "blog":
    $row['text']=$_POST['text'];
    $row['title']=$_POST['title'];
    $row['sort']=1;
    $row['type']=0;
    $row['new']=1;
    break;
}
$db->save($row);
to("../backend/main.php?do=$table");

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