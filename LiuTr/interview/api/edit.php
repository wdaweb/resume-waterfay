  
<?php

include_once "../base.php";
$table=$_POST['table'];
$db=new DB($table);
echo $table;
$delfile='../img/'.$_POST['img'];
if(!empty($_POST['del'])){
    $db->del($_POST['id']);
    unlink($delfile);
    }else{
    $row=$db->find($_POST['id']);
    switch($table){
    case "myweb_draw":
    $row['title']=$_POST['title'];
    $row['text']=$_POST['text'];
    $row['sort']=$_POST['sort'];
    $row['sh']=($_POST['sh'])?1:0;
    $row['sort']=$_POST['sort'];
    case "myweb_blog":
    $row['title']=$_POST['title'];
    $row['text']=$_POST['text'];
    $row['sort']=$_POST['sort'];
    $row['new']=($_POST['new'])?1:0;
    $row['type']=$_POST['type'];
    $row['new']=$_POST['new'];
    }
$db->save($row);
}

to("../backend/main.php?do=$table");

?>