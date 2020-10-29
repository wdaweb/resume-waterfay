<h5>系統時區設定</h5>
<?php
date_default_timezone_get("Asia/Taipei");

?>
<h1>日期函式</h1>
<h4>data()</h4>
<?php
echo date("Y-m-d-D");
echo "<br>";
echo date("y-m-d");
echo "<br>";
echo date("y-m-d");
echo "<br>";
?>

<h4>strtotime()</h4>
<?php

echo strtotime("2020-10-29");
echo "<br>";
echo strtotime("2020-10-29 10:51:23");
echo "<br>";
echo strtotime("+1 days");
echo "<br>";
echo strtotime("+1 month");
echo "<br>";
echo date("Y-m-d H:i:s",strtotime("+1 year"));
echo "<br>";
echo date( "Y年m月d日", strtotime( "2020-10-29 +3 days" ) );

?>

<h4>計算下一次生日還有幾天</h4>
<?php

$startdate=strtotime("2020-10-29");
$enddate=strtotime("2020-11-12");  
$days=floor(abs(($enddate-$startdate)/3600/24)) ;
echo $days;
?>
<hr>
<?php
$birthday=date("2020-11-29");
$today=date("Y-m-d");
echo"<br>";  
echo floor((strtotime($today)-strtotime($birthday))/3600/24);

?>
<hr>
<?php
$birthday="2020-10-29";
$today=date("Y-m-d");  
$days=round(abs((strtotime($today)-strtotime($birthday)/3600/24)));
echo $days;

?>