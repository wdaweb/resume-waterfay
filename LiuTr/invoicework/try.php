<?php
session_start();
echo $_SESSION['number'];
$_SESSION['number']=10;



$a='A123456';

$Idname=['A','B','C','D','E','F','G','H','I','J','K','L','M','N',
        'O','P','Q','R','S','T','U','V','W','X','Y','Z'];

// function accept($field,$meg){
    if(in_array(substr($_POST[$field],0,1),$Idname)){
        $_SESSION['err'][$field]=$meg;
        echo "第一個字是英文";
    }else{
        echo "第一個字不是英文";
    }
?>