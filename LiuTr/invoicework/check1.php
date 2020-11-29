<?php 
include_once "base.php";
echo $Idcard=($_POST['Idcard']);
echo $pw=($_POST['pw']);
echo $birthday=($_POST['birthday']);
echo $email=($_POST['email']);
$sum=0;
$Idnames=['A'=>10,'I'=>34,'O'=>35,'B'=>11,'C'=>12,'D'=>13,
'E'=>14,'F'=>15,'G'=>16,'H'=>17,'J'=>18,'K'=>82,
'L'=>20,'M'=>21,'N'=>22,'P'=>23,'Q'=>24,'R'=>25,
'S'=>26,'T'=>65,'U'=>28,'V'=>29,'W'=>32,'X'=>30,
'Y'=>31,'Z'=>33];
$require=$pdo->
    query("insert into login  
    (insert into login  
    (Idcard, pw,email,birthday) 
    values 
    ('{$_POST['Idcard']}' , '{$_POST['pw']}' , '{$_POST['email']}' , '{$_POST['birthday']}' )")->fetch();


// if(empty($_SESSION['err'])){
//     $require=$pdo->
//     query("insert into login  
//     (Idcard, pw, birthday, email,time) 
//     values 
//     (Idcard='{$_POST['Idcard']}' , pw='{$_POST['pw']}' , email='{$_POST['email']}' , birthday='{$_POST['birthday']}' , time='{$_POST['time']}')")->fetch();
// }

// if(!empty($_POST['Idcard'])){
//     if(preg_match('/^[A-Za-z]{1}[1-2]{1}[0-9]{8}$/',$Idcard)){
//         $Idend=((str_split(substr($Idcard,8,9),1))[0])+ ((str_split(substr($Idcard,8,9),1))[1]);
//         foreach($Idnames as $Idname =>$value){
//             if($Idname==((str_split($Idcard,1)[0]))){
//               $Idhead=(str_split($value,1)[0])*1+(str_split($value,1)[1])*9;
//             }
//         }
//          for($i=0;$i<7;$i++){
//             $sum= $sum + ((str_split(substr($Idcard,1,7),1))[$i])*(8-$i);
//          }
//          if(($Idend+$sum+$Idhead)%10==0){
//             $Idcard=($_POST['Idcard']);
//          }else{
//             $_POST['Idcard']=$_GET['err']['Idcard'];
//             $_GET['err']['Idcard']="身分證字號錯誤";
//          }
//      }
//     }
//     if(preg_match('/^(?=.*[A-Za-z])(?=.*\d\S)[A-Za-z\d]{4,8}$/',$pw)) {
//         $pw=($_POST['pw']);
//     } else {
//         $_POST['pw']=$_GET['err']['pw'];
//         $_GET['err']['pw']="密碼格式錯誤";
//     }



?>