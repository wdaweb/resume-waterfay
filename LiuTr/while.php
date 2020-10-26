<h2>While迴圈</h2>
<hr>
<h4>尋找字元</h4>
<?php
$str="今天天氣真的不太好";
$target="真";

echo "字串=".$str."<br>";
echo "尋找=".$target."<br>";

echo mb_strlen($str);
echo mb_substr("今天天氣真的不太好", 4, 1);

?>
<br>

<?php

for($i=0;$i<mb_strlen($str);$i++){
    
    $s=mb_substr($str,$i,1);
    if($s==$target){
    echo"找到了,位置在$i";
    break;
}


}
?>
<br>

<?php
$notfind=true;
$position=0;

while($notfind){
    $s=mb_substr($str,$position,1);
    if($s==$target){
        echo"找到了,位置在$position";
        $notfind=false;
    }else{
        $position++;
    }

}

?>
<br>

<h4>用函式找</h4>
mb_strrpos($str)

<?php
    echo "找到了,位置在".mb_strpos($str,$target);
?>