  
<?php

include_once "../base.php";
$table=$_POST['table'];
$db=new DB($table);

$delfile='../img/'.$_POST['img'];
if(!empty($_POST['del'])){
    $db->del($_POST['id']);
    unlink($delfile);
    }else{
    $row=$db->find($_POST['id']);
    $row['title']=$_POST['title'];
    $row['text']=$_POST['text'];
    $row['sort']=$_POST['sort'];
    $row['sh']=$_POST['sh'];
    $row['sort']=$_POST['sort'];
$db->save($row);
}

to("../backend/main.php?do=draw");

?>