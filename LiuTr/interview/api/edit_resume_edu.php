  
<?php

include_once "../base.php";
$R_edu=new DB('edu');

if(!empty($_POST['del'])){
    $R_edu->del($_POST['id']);
    }else if(!empty($_POST['id'])){
    $row=$R_edu->find($_POST['id']);
    $row['text']=$_POST['text'];
    $row['sort']=$_POST['sort'];
    $row['sh']=($_POST['sh'])?1:0;
    $row['sort']=$_POST['sort'];
    $R_edu->save($row);
    }else{
    $row=$R_edu->find($_POST['id']);
    $row['text']=$_POST['text'];
    $row['sort']=$_POST['sort'];
    $row['sh']=($_POST['sh'])?1:0;
    $row['sort']=$_POST['sort'];
    $R_edu->save($row);
    }


to("../backend/main.php?do=resume_edu");

?>