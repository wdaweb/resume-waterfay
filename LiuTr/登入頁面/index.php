<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if(!empty($_POST)){
    if($_POST['acc']=='waterfay' && $_POST['pw']=="forestgod"){
      $_SESSION['login']=1;
    }else{
      echo "帳號或密碼錯誤";
    }
  }
//   if(!empty($_SESSION['login'])){
//     include "http://220.128.133.15/s1090418/";
//   }else{
//     include "index.php";
//   }
?>
<form method="post">
    <input type="text" name="acc" >
    <input type="password" name="pw" id="">
    <input type="submit" value="確認">
    </form>
</body>
</html>