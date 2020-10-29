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

$TGDZ = array (array ('甲', '乙', '丙', '丁', '戊', '己', '庚', '辛', '壬', '癸' ),
array ('子', '丑', '寅', '卯', '辰', '巳', '午', '未', '申', '酉', '戌', '亥' ) );
$Year = 2014;
$Year_JiSuan = $Year - 1900 + 36;
$TianGanDiZhi = $TGDZ[0][$Year_JiSuan % 10] . $TGDZ[1][$Year_JiSuan % 12];
echo $Year."年为农历[".$TianGanDiZhi."]年";
?>

$yeartime=array(array('庚', '辛','壬', '癸','甲', '乙', '丙', '丁','戊', '己')
.array('酉' ,'戌' ,'亥','子','丑' ,'寅' ,'卯','辰' ,'巳' ,'午' ,'未' ,'申'));

.array_search($a,$b),
print_r($yeartimeword);