<h1>閏年判斷</h1>
<?php
$year=3200;
    echo $year;
    echo "今年是";
if($year%4==0 && ($year%100!=0 || ($year%400==0 && $year%3200!=0))){
    echo"閏年";
}else{
    echo"平年";
}
?>