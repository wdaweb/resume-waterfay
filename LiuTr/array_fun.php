<h1>陣列函式</h1>
<h3>is_array()</h3>
<?php

$a=[1,2,3];
$a="天氣";
echo '$a=>' .is_array($a);
echo "<br>";
echo'$b=>' .is_array($b);
echo "<br>";

if(is_array($a)){
    echo'$a is an array';
}else{
    echo '$a is not an array';
}
?>
<h3>in_array()</h3>
$a=['A','B','C','D','E'];
<?php
$a=['A','B','C','D','E'];
echo in_array("C",$a);
if(in_array('C',$a)){
    echo 'C有在陣列$a中';
}else{
    echo'C不在陣列$a中';
}

?>
<h3>sort()</h3>
$a=['D','B','A','C','E'];
<?php
$a=['D','B','A','C','E'];
print_r($a);
echo "<br>";
sort($a);
print_r($a);
echo"<br>";

?>

<?php
$a=['國文'=>'D',
    '英文'=>'B',
    '數學'=>'A',
    '地理'=>'C',
    '歷史'=>'E'];
    print_r($a);
echo "<br>";
sort($a);
print_r($a);
echo"<br>";

?>

<h3>array_fill()</h3>

<?php
$a=array_fill(0,10,'我很帥');

echo"<pre>";
print_r($a);
echo"</pre>";

?>
<h3>array_search()</h3>
<h4>找成績A的科目</h4>
<?php
$a=['國文'=>'D',
'英文'=>'B',
'數學'=>'A',
'地理'=>'C',
'歷史'=>'E'];

echo array_search('A',$a);
$a=['D','B','A','C','E'];

echo array_search('A',$a);
?>

<h3>array_keys()</h3>
<?php
$a=['國文'=>'D',
'英文'=>'B',
'數學'=>'A',
'地理'=>'C',
'歷史'=>'E'];

$keys=array_keys($a);

echo "<pre>";print_r($keys);echo "</pre>";

?>

<h3>array_merge()</h3>
<?php
$a=[1,2,3];
$b=['A','B','C'];
$c=array_merge($a,$b);

echo "<pre>";print_r($c);echo "</pre>";

$a=array_merge($a,$b);

echo "<pre>";print_r($a);echo "</pre>";
?>

<h3>serialize()</h3>
<?php
$a=['國文'=>'D',
'英文'=>'B',
'數學'=>'A',
'地理'=>'C',
'歷史'=>'E'];

echo serialize($a);

?>
<h3>implode()</h3>
<?php
$a=['國文'=>'D',
'英文'=>'B',
'數學'=>'A',
'地理'=>'C',
'歷史'=>'E'];

$result=implode(',',$a);

echo $result;

print_r(explode(',',$result));
?>
<p>$nbsp;</p>
<p>$nbsp;</p>
<p>$nbsp;</p>
<p>$nbsp;</p>