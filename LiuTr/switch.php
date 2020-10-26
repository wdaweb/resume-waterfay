<h5>switch case</h5>
<?php

$score=90;
$level="";


if($score <0 || $score>100){
    echo"<span style='color:red'>成績必須在0-100分之內<span>";
}else  if($score>=90){
    $level="A";
}else if($score>=75){
    $level="B";
}else if($score>=60){
    $level="C";
}else{
    $level="D";
}

echo"成績".$score;
echo"<br>";
echo"等級:".$level;

switch($level){
    case"A":
    echo"非常好,請努力保持";
    break;
    case"B";
    echo"可圈可點,但還有進步空間";
    break;
    case"C";
    echo"一般水平,需更多努力";
    break;
    case"D";
    echo"用心不足,請加強";
    break;
    default:
    echo"資料錯誤";
}

?>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>