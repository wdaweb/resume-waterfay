  
<?php

include_once "../base.php";
$R_edu=new DB('myweb_work');

    $row['text']=$_POST['text'];
    $row['sort']=0;
    $row['sh']=0;
    $row['title']=0;
    $row['club']=$_POST['club'];
    $R_edu->save($row);


to("../backend/main.php?do=resume_work");

?>
