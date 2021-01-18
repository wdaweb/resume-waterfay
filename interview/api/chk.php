<?php
include_once "../base.php";

$acc=$_POST['acc'];
$pw=$_POST['pw'];
$user=$User->find(['acc'=>$acc,'pw'=>$pw]);
if(empty($user)){
    echo 0;
}else{
    echo 1;
    $_SESSION['login']=$acc;
}

?>