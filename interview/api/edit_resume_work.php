  
<?php

include_once "../base.php";

if(!empty($_POST['del'])){
    $Work->del($_POST['id']);
    }else{
    $row=$Work->find($_POST['id']);
    $row['text']=$_POST['text'];
    $row['sort']=$_POST['sort'];
    $row['club']=$_POST['club'];
    $row['sh']=($_POST['sh'])?1:0;
    $row['title']=($_POST['title'])?1:0;
    $Work->save($row);
}

to("../backend/main.php?do=resume_work");

?>
