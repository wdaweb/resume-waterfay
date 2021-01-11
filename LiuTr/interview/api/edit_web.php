  
<?php

include_once "../base.php";
$Web=new DB('web');


$delfile='../img/'.$_POST['img'];
if(!empty($_POST['del'])){
    $db->del($_POST['id']);
    unlink($delfile);
    }else{
    $row=$Web->find($_POST['id']);
    $row['title']=$_POST['title'];
    $row['text']=$_POST['text'];
    $row['sort']=$_POST['sort'];
    $row['sh']=$_POST['sh'];
    $row['sort']=$_POST['sort'];
    $Web->save($row);
}

to("../backend/main.php?do=web");

?>