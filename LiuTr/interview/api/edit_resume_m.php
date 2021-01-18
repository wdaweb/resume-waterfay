  
<?php

include_once "../base.php";
$R_edu=new DB('myweb_edu');

if(!empty($_POST['del'])){
    $R_edu->del($_POST['id']);
    }else{
    $row=$R_edu->find($_POST['id']);
    $row['text']=$_POST['text'];
    $row['sort']=$_POST['sort'];
    $row['club']=$_POST['club'];
    $row['sh']=($_POST['sh'])?1:0;
    $R_edu->save($row);
}

to("../backend/main.php?do=resume_m");

?>
