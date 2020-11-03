
<?php
date_default_timezone_set("Asia/Taipei");
$month=$_GET['m']?$_GET['m']:date('m');


if($month==1){
    $premonth = 12;

}else{
    $premonth = $month-1;

}

if($month==12){
    $nextmonth = 1;

}else{
    $nextmonth = $month + 1;
}



echo "<a href='try.php?m={$premonth}'>上個月</a>";
echo "<a href='try.php?m={$nextmonth}'>下個月</a>";

?>