<?php
include_once "../base.php";
$db=new DB("login");
$acc=$_GET['acc'];
$acc=$_GET['pw'];
$user=$User->find(['acc'=>$acc]);
if(empty($user)){
    echo 0;
}else{
    echo 1;
    $_SESSION['login']=$acc;
}

?>