  
<?php

include_once "../base.php";

$delfile='../img/'.$_POST['img'];
if(!empty($_POST['del'])){
    $Draw->del($_POST['id']);
    unlink($delfile);
    }else{
    $row=$Draw->find($_POST['id']);
    $row['title']=$_POST['title'];
    $row['text']=$_POST['text'];
    $row['sort']=$_POST['sort'];
    $row['sh']=$_POST['sh'];
    $row['sort']=$_POST['sort'];
$Draw->save($row);
}

to("../backend/main.php?do=draw");

?>