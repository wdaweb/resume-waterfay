<style>
body{
    font-family:courier;
}
</style>
<?php
for($i=0;$i<=5;$i++){
    for($j=1;$j<=$i;$j++){
    echo"*";
}
    echo"<br>";
}

?>

<br>

<?php
for($i=0;$i<5;$i++){
    for($j=$i;$j<=4;$j++){
    echo"*";}

    echo"<br>";
}


?>

<br>
<?php
for($i=0;$i<=4;$i++){

    for($s=$i;$s<=4;$s++){
        echo"&ensp;";
    }
    for($j=0;$j<2*$i+1;$j++){
    echo"*";
}
    echo"<br>";
}
?>

<br>

<?php
for($i=0;$i<=4;$i++){

    for($s=$i;$s<=4;$s++){
        echo"&ensp;";
    }
    for($j=0;$j<2*$i+1;$j++){
    echo"*";
}
    echo"<br>";
}
?>

<br>

<?php
for($i=0;$i<=4;$i++){

    for($s=$i;$s<=4;$s++){
        echo"&ensp;";
    }
    for($j=0;$j<2*$i+1;$j++){
    echo"*";
}
    echo"<br>";
}
?>

<?php
for($i=4;$i>=0;$i--){

    for($s=$i;$s<=4;$s++){
        echo"&ensp;";
    }
    for($j=0;$j<2*$i+1;$j++){
    echo"*";
}
    echo"<br>";
}
?>
<br>

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



<br>

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
<?php

for($i=1;$i<=7;$i++){
    for($j=1;$j<=7;$j++){
        if($i==1||$i==7){
        echo"*";
        }else{
            if($j==1||$j==7){
                echo"*";
            }else{
                echo"&nbsp;";
            }
        }
    }
    echo"<br>";
}

?>
<br>
<?php

for($i=1;$i<=7;$i++){
    for($j=1;$j<=7;$j++){
        if($i==1||$i==7){
        echo"*";
        }else{
            if($j==1||$j==7){
                echo"*";
            }else{
                if($i==$j){
                echo"*";
            }else{
                if($i==(8-$j)){
                    echo"*";
                
                }
            }
                echo"&nbsp;";
            }
        }
    }
    echo"<br>";
}

?>