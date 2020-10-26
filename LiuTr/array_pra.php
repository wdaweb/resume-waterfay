<h1>大樂透彩號</h1>

<?php
//亂數函式rand(x,y)

$lotto=[];
while(count($lotto)<6){
    $t=rand(1,49);
    if(!in_array($t,$lotto)){
        $lotto[]=$t;
    }
}
echo"<pre>";
print_r($lotto);
echo"</pre>";
?>

<h1>威力彩號</h1>

<?php
//亂數函式rand(x,y)

$lotto=[];
$second=rand(1,8);
while(count($lotto)<7){
    $t=rand(1,38);
    if(!in_array($t,$lotto)){
        $lotto[]=$t;
    }
}
$lotto[]=$second;
echo"<pre>";
print_r($lotto);
echo"</pre>";
?>

<h1>對獎</h1>
中獎號碼:
    第一組:08,15,21,24,26,30;<br>
    第二組:07<br>
<?php
//亂數函式rand(x,y)
$treasure_1=[8,15,21,24,26,30];
$treasure_2=7;
$lotto=[];
$second=rand(1,8);
while(count($lotto)<7){
    $t=rand(1,38);
    if(!in_array($t,$lotto)){
        $lotto[]=$t;
    }
}
$lotto[]=$second;
echo"<pre>";
print_r($lotto);
echo"</pre>";

$l2=array_pop($lotto);
if($l2==$treasure_2){
    $res_2=1;
}else{
    $res_2=0;
}
// print_r($lotto);
$res_1=0;
foreach($treasure_1 as $t){
    foreach($lotto as $l){
        if($t==$l){
            $res_1=$res_1+1;
        }
    }
}
echo"第一組中了".$res_1."個號碼<br>";
echo"第二組中了".$res_1."個號碼<br>";
?>
