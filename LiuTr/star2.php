<style>
body{
    font-family:courier;
}
</style>
<h2>直角三角形</h2>
<?php

for($i=1;$i<=5;$i++){
    
    for($j=1;$j<=$i;$j++){

        echo "*";

    }
    
    echo "<br>";
}

?>
<hr>
<h2>倒直角三角形</h2>
<?php

for($i=1;$i<=5;$i++){
    
    for($j=1;$j<=(6-$i);$j++){

        echo "*";

    }
    
    echo "<br>";
}

?>
<hr>
<?php

for($i=5;$i>=1;$i--){
    
    for($j=1;$j<=$i;$j++){

        echo "*";

    }
    
    echo "<br>";
}

?>
<hr>
<h2>正三角形</h2>
<?php
$size=5;
for($i=1;$i<=$size;$i++){
    //先印空白
    
    for($k=1;$k<=($size-$i);$k++){

        echo "&nbsp;";

    }  

    //再印星星
    for($j=1;$j<=(2*$i-1);$j++){

        echo "*";

    }
    
    echo "<br>";
}

?>
<?php

for($i=1;$i<=9;$i=$i+2){
    //先印空白
    
    for($k=1;$k<=(4-floor($i/2));$k++){

        echo "&nbsp;";

    }  

    //再印星星
    for($j=1;$j<=$i;$j++){

        echo "*";

    }
    
    echo "<br>";
}

?>
<hr>
<h2>菱形</h2>
<h4>做法一,一個正三角形加一個倒三角形</h4>
<?php

for($i=1;$i<=5;$i++){
    //先印空白
    
    for($k=1;$k<=(5-$i);$k++){

        echo "&nbsp;";

    }  

    //再印星星
    for($j=1;$j<=(2*$i-1);$j++){

        echo "*";

    }
    
    echo "<br>";
}
for($i=4;$i>0;$i--){
    //先印空白
    
    for($k=1;$k<=(5-$i);$k++){

        echo "&nbsp;";

    }  

    //再印星星
    for($j=1;$j<=(2*$i-1);$j++){

        echo "*";

    }
    
    echo "<br>";
}
?>
<h4>做法二</h4>
<?php
for($i=1;$i<=9;$i++){
    
    if($i<=5){
        //先印空白
        for($k=1;$k<=(5-$i);$k++){
            echo "&nbsp;";
        }  

        //再印星星
        for($j=1;$j<=(2*$i-1);$j++){
            echo "*";
        }
        
        echo "<br>";
    }else{

        //echo ($i-5);
        for($k=1;$k<=($i-5);$k++){
            echo "&nbsp;";

        }  
        //再印星星
        //echo (2*$i-1);
        for($j=1;$j<=(2*(10-$i)-1);$j++){

            echo "*";

        }
        
        echo "<br>";
    }


}

?>
<h4>做法三</h4>
<?php
for($i=1;$i<=9;$i++){
    if($i%5==0){
        $m=5;
    }else{
        $m=$i%5;
    }

    if($i>5){
        $m=5-$m;
    }

    for($k=1;$k<=(5-$m);$k++){
        echo "&nbsp;";
    }  
    for($j=1;$j<=(2*$m-1);$j++){
        echo "*";
    }
    echo "<br>";

}

?>
<hr>
<h2>矩形</h2>
<?php

for($i=1;$i<=7;$i++){

    for($j=1;$j<=7;$j++){
        if($i==1 || $i==7){
            echo "*";
        }else{

            if($j==1 || $j==7){
                echo "*";
            }else{
                echo "&nbsp;";
            }
        }

    }

    echo "<br>";
}

?>
<h2>矩形內有對角線</h2>
