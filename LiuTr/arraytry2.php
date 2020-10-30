<h1>閏年判斷</h1>
<?php

$year=date("Y");
$array=[];

for($i=0;$i<500;$i++){
if(($year+$i)%4==0 && (($year+$i)%100!=0 || (($year+$i)%400==0 && ($year+$i)%3200!=0))){

    $array[]=$year+$i;
}
}
    echo"五百年內的閏年:<br>";
    foreach($array as $year){
        echo $year . "<br>";
    }


echo "一共有".count($array)."個閏年";
in_array($year,$array)

?>
<?php
$a=array('a'=>'2','b'=>'4','c'=>'6','d'=>'1','e'=>'8');
print_r(array_reverse($a));
?>
<hr>
<?php
$a=[2,4,6,1,8];
rsort($a);
foreach ($a as $key) {
    // echo "$key = $val\n";
    echo '$a=['.$key.']';
}
?>
<hr>
<h1>陣列元素序數相反</h1>
<?php
$a=[2,4,6,1,8];
echo "原本的陣列";
echo "<pre>";
print_r($a);
echo "</pre>";
for($i=0;$i<ceil(count($a)/2);$i++){
    $tmp=$a[$i];
    $a[$i]=$a[count($a)-1-$i];
    $a[count($a)-1-$i]=$tmp;

}
echo"反序後的陣列:";
echo"<pre>";
print_r($a);
echo"</pre>";



?>
<hr>
<?php
$sky=['甲', '乙', '丙', '丁','戊', '己','庚', '辛','壬', '癸'];
$land=['子','丑' ,'寅' ,'卯','辰' ,'巳' ,'午' ,'未','申','酉' ,'戌' ,'亥'];
$match=[];
for($i=0;$i<60;$i++){
    $match[1024+$i]=$sky[$i%10] . $land[$i%12];
}



?>

<?php
$TGDZ = array (array ('庚', '辛','壬', '癸','甲', '乙', '丙', '丁','戊', '己'),
array ('申','酉' ,'戌' ,'亥','子','丑' ,'寅' ,'卯','辰' ,'巳' ,'午' ,'未' ) );
for($Year=1900;$Year<=2099;$Year++){
$TianGanDiZhi = $TGDZ[0][$Year% 10] . $TGDZ[1][$Year%12];
echo $Year."年為農曆[".$TianGanDiZhi."]年<br>";
}

?>