<h1>程式練習</h1>
<h3>if...else判斷式</h3>
<hr>
<h5>成績及格判斷</h5>
<?php

$score=60;

echo"成績".$score;
echo "<br>判斷結果:";

if($score>=60){
    echo"及格";

    }

else{
    echo"不及格";

}

?>

<h5>成績等級判斷</h5>
<?php
$score=-1000;
echo"成績".$score;
echo"等級:";

if($score >=0 && $score<=100){

if($score>=90 && $score<=100){
    echo"A";
}else{
        if($score>=75 && $score<90){
            echo"B";
        }else{
            if($score>=60 && $score<75){
                echo"C";
            }else{
                echo"D";
            }
        }
    }
}else{
    echo"<span style='color:red'>成績必須在0-100分之內</span>";
}

?>
<hr>
<h5>巢狀迴圈精簡</h5>
<?php
$score=75;
echo"成績".$score;
echo"等級:";

if($score >=0 && $score<=100){

if($score>=90){
    echo"A";
}else if($score>=75){
            echo"B";
        }else if($score>=60){
                echo"C";
            }else{
                echo"D";
            }
        }
else{
    echo"<span style='color:red'>成績必須在0-100分之內<span>";
}

?>

<hr>
<h5>巢狀迴圈精簡2</h5>
<?php
$score=75;
echo"成績".$score;
echo"等級:";

if($score <0 || $score>100){
    echo"<span style='color:red'>成績必須在0-100分之內<span>";
}else  if($score>=90){
    echo"A";
}else if($score>=75){
    echo"B";
}else if($score>=60){
    echo"C";
}else{
    echo"D";
}

?>

<hr>
<h5>巢狀迴圈精簡3</h5>
<?php
$score=75;
echo"成績".$score;
echo"等級:";

if($score <0 || $score>100){
    echo"<span style='color:red'>成績必須在0-100分之內<span>";
}else  if($score>=90){
    echo"A";
}else if($score>=75){
    echo"B";
}else if($score>=60){
    echo"C";
}else{
    echo"D";
}

?>