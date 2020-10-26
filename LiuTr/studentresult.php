<h1>判斷及格成績與成績等級</h1>
<?php

$score=60;

echo"成績".$score;
echo "<br>判斷結果:";


if($score >=0 && $score<=100){

    if($score>=90 && $score<=100){
        echo"非常好,請努力保持";
    }else{
            if($score>=75 && $score<90){
                echo"可圈可點,但還有進步空間";
            }else{
                if($score>=60 && $score<75){
                    echo"一般水平,需更多努力";
                }else{
                    echo"用心不足,請加強";
                }
            }
        }
    }else{
        echo"<span style='color:red'>成績必須在0-100分之內</span>";
    }


    if($score >=0 && $score<=100){
        if($score>=60){
            echo"及格";
            }
        else{
            echo"不及格";
        }
    }else{
        "<span style='color:red'>成績必須在0-100分之內</span>";
    }