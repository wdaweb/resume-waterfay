<?php 

session_start();

$_SESSION['ㄕㄛ']=[];
$Idcard=$_POST['Idcard'];
$pw=$_POST['pw'];
$Idname=['A','B','C','D','E','F','G','H','I','J','K','L','M','N',
'O','P','Q','R','S','T','U','V','W','X','Y','Z'];

if(!empty($_POST['Idcard'])){
    if(in_array(substr($_POST['Idcard'],0,1),$Idname)){
        echo "第一個字是英文";
    }else{
        echo "第一個字不是英文";
    }
}



// function accept($field,$meg){



?>