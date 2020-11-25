<?php 

session_start();

$dsn="mysql:host=localhost;dbname=invoice;charset=utf8";
$pdo=new PDO($dsn,'root','');
$_SESSION['login_session']=[];
$_SESSION['err']=[];
$Idname=['A','B','C','D','E','F','G','H','I','J','K','L','M','N',
'O','P','Q','R','S','T','U','V','W','X','Y','Z'];

verification('Idcard','身份證字號第一個字必為英文');
accept('pw','密碼必為4-8個字');


function verification($field,$meg){
    global $Idname;
    if(!empty($_POST[$field])){
        if(in_array(substr($_POST[$field],0,1),$Idname)){
        $_SESSION['err'][$field]=$meg;
        }
    }
   }else{
      header("location:index.php");
  }

function accept($field,$meg){
    if(!empty($_POST[$field])){
        $_SESSION['err'][$field]=$meg;
    }

}

if(!empty($_SESSION['login_session'])){
    $Idcard=$pdo->query("select * from `login` where Idcard='{$_POST['Idcard']}' && pw='{$_POST['pw']}'")->fetch();
    $_SESSION['login_session'] =true;
    }else{
        echo "沒有該帳號";
    }

?>