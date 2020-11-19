<?php

$len=strlen("哈哈哈哈哈");
$res=myphone(1,10);
echo "<br>";
echo $res+10;
echo "<br>";
echo $len+10;

function myphone($a,$b){

    echo  $a+$b;

}

echo "<hr>";

echo myphone(5,20);
echo "<br>";
echo strlen("哈哈哈哈哈");
?>
<style>
body{
    font-family:courier;
}
</style>
<h3>畫星星</h3>

<?php

$header="自訂函式";

stars('直角三角形',10);
stars('正三角形',10);
stars('菱形',10);


function stars($type,$lines){
    global $header;
    switch($type){
        case '直角三角形':
            echo $header."-直角三角形";
            echo "<hr>";
            type1($lines);
        break;
        case '正三角形':
            echo $header."-正三角形";
            echo "<hr>";
            type2($lines);
        break;
        case '菱形':
            echo $header."-菱形";
            echo "<hr>";
            type3($lines);
        break;
    }
}

function type1($line){
    for($i=1;$i<=$line;$i++){
    
        for($j=1;$j<=$i;$j++){
    
            echo "*";
    
        }
        
        echo "<br>";
    }
    
}


function type2($size){

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

}


function type3($size){
    $size=($size%2)?$size:$size+1;
    $max=ceil($size/2);
    for($i=1;$i<=$size;$i++){
        if($i%$max==0){
            $m=$max;
        }else{
            $m=$i%$max;
        }
    
        if($i>$max){
            $m=$max-$m;
        }
    
        for($k=1;$k<=($max-$m);$k++){
            echo "&nbsp;";
        }  
        for($j=1;$j<=(2*$m-1);$j++){
            echo "*";
        }
        echo "<br>";
    
    }
}
?>