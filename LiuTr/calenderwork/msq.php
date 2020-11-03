<?php
 $year=date("Y");
 $month=date('m');
 $days=date('t',strtotime("{$year}-{$month}-1"));
 $week=date('w',strtotime("{$year}-{$month}-1"));

 
 if($month==1)
 {
     $prevyear=$year-1;
     $prevmonth=12;
 }
 else
 {
     $prevyear=$year;
     $prevmonth=$month-1;
 }
 
 //计算下个月
 if($month==12)
 {
     $nextyear=$year+1;
     $nextmonth=1;
 }
 else
 { 
     $nextyear=$year;
     $nextmonth=$month+1;
 }
 
 echo "<a href='http://localhost/index.php?y={$premonth}&m={$premonth}'>上个月</a>";
 echo "<a href='http://localhost/index.php?y={$nextmonth}&m={$nextmonth}'>下个月</a>";
?>