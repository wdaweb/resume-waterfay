
<?php
date_default_timezone_set("Asia/Taipei");
$year=date("Y");
$month=date("m");
$preyear=$year-1;
$nextyear=$year+1;
$premonth=$month-1;
$nextmonth=$month+1;


if(!empty($_GET["m"] )){
    $month=$_GET["m"];
    }else{
        $month=date("m");
    }

if(!empty($_GET["Y"])){
    $year=$_GET["Y"];
    }else{
        $year=date("Y");
    }

if($month==1)
    {
        $preyear=$year-1;
        $prevmonth=12;
    }
    else
    {
        $preyear=$year;
        $premonth=$month-1;
    }
    

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



// echo "<a href='try.php?Y={$preyear}&m={$premonth}'>上個月</a>";
// echo "<a href='try.php?Y={$nextyear}&m={$nextmonth}'>下個月</a>";

?>
<a href='try.php?Y=<?=$preyear?>&m=<?=$premonth?>'>上個月</a><br>
<a href='try.php?Y=<?=$nextyear?>&m=<?=$nextmonth?>'>下個月</a><br>