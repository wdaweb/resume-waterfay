<?php 
include_once "base.php";
$Idcard='A22142182';
$pw='12345678';
$_SESSION['err1']=[];
$_SESSION['err2']=[];
$sum=0;
$Idnames=['A'=>10,'I'=>34,'O'=>35,'B'=>11,'C'=>12,'D'=>13,
'E'=>14,'F'=>15,'G'=>16,'H'=>17,'J'=>18,'K'=>82,
'L'=>20,'M'=>21,'N'=>22,'P'=>23,'Q'=>24,'R'=>25,
'S'=>26,'T'=>65,'U'=>28,'V'=>29,'W'=>32,'X'=>30,
'Y'=>31,'Z'=>33];

if(!empty($Idcard) && (!preg_match('/^[A-Za-z]{1}[1-2]{1}[0-9]{8}$/',$Idcard))){
          echo "身分證格式錯誤";
            }else{
           $Idend=((str_split(substr($Idcard,8,9),1))[0])+ ((str_split(substr($Idcard,8,9),1))[1]);
           foreach($Idnames as $Idname =>$value){
             if($Idname==((str_split($Idcard,1)[0]))){
               $Idhead=(str_split($value,1)[0])*1+(str_split($value,1)[1])*9;
             }
        }
        for($i=0;$i<7;$i++){
            $sum= $sum + ((str_split(substr($Idcard,1,7),1))[$i])*(8-$i);
          }
          if(($Idend+$sum+$Idhead)%10==0){
             echo "身分證正確";
          }else{
             echo "身分證格式錯誤";
          }
      }
    
     if(preg_match('/^(?=.*[A-Za-z])(?=.*\d\S)[A-Za-z\d]{4,8}$/',$pw)) {
         $pw=$pw;
     } else {
         $pw=$_SESSION['err2'];
         echo $_SESSION['err2']='密碼格式錯誤';
     }
?>