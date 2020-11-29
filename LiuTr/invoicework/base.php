<?php
session_start();
$_SESSION['count']=[]; // 註冊Session變數Count 
isset($PHPSESSID)?session_id($PHPSESSID):$PHPSESSID = session_id(); 
// 如果設定了$PHPSESSID，就將SessionID賦值為$PHPSESSID，否則生成SessionID 
$_SESSION['count']  ; // 變數count加1 
setcookie("PHPSESSID",$PHPSESSID, time()+15); // 儲存SessionID到Cookie中 
$dsn="mysql:host=localhost;dbname=invoice;charset=utf8";
$pdo=new PDO($dsn,'root','');

date_default_timezone_set("Asia/Taipei");

?>