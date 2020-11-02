$nextyear=$year;
$nextmonth=$month+1;
if(!empty($_GET)){
     $nextyear=$year+1;
     $nextmonth=1;
 }
 
 //上一年和上一月
 $prevyear=$year;
 $prevmonth=$month-1;
if($prevmonth<1){
     $prevyear=$year-1;
    $prevmonth=12;
}