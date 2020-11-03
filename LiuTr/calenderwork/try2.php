
<?php
date_default_timezone_set("Asia/Taipei");
$year=date("Y");
$preyear=$year-1;
$nextyear=$year+1;
$month=date("m");


switch($_GET['m']){
    case 1:
        $premonth=$month-1;
    break;
    case 2:
        $nextmonth=$month+1;
    break;
}

echo "<a href='try.php?m=1'>上個月</a>";
echo "<a href='try.php?m=2'>下個月</a>";

?>

