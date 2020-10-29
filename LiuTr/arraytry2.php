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
<?php
// $year=1202;

// $a=[['庚', '辛','壬', '癸','甲', '乙', '丙', '丁','戊', '己']];
// $b=['酉' ,'戌' ,'亥','子','丑' ,'寅' ,'卯','辰' ,'巳' ,'午' ,'未' ,'申'];

// $yeartimeword=
// echo $year[$yeartime%10] . $year[$yeartime%12];

// print_r($a);


?>

<?php
$Year = 2014;
$TGDZ = array (array ('庚', '辛','壬', '癸','甲', '乙', '丙', '丁','戊', '己'),
array ('申','酉' ,'戌' ,'亥','子','丑' ,'寅' ,'卯','辰' ,'巳' ,'午' ,'未' ) );
for($Year=1900;$Year<=2099;$Year++){
$TianGanDiZhi = $TGDZ[0][$Year% 10] . $TGDZ[1][$Year% 12];
echo $Year."年為農曆[".$TianGanDiZhi."]年<br>";
}

?>

<?php

$sky=['甲', '乙', '丙', '丁', '戊', '己', '庚', '辛', '壬', '癸' ];
$land=['子', '丑', '寅', '卯', '辰', '巳', '午', '未', '申', '酉', '戌', '亥'];
$match=[];
foreach($sky as $i=> $s){
    foreach($land as $j=>$i){
        $match[1024+($i*10+$j)]=$s.$l;
    }
}

?>

// $yeartime=array(array('庚', '辛','壬', '癸','甲', '乙', '丙', '丁','戊', '己')
// .array('酉' ,'戌' ,'亥','子','丑' ,'寅' ,'卯','辰' ,'巳' ,'午' ,'未' ,'申'));

// .array_search($a,$b),
// print_r($yeartimeword);