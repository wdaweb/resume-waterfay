<?php
$YM = (isset($_GET['date'])?$_GET['date']:date("Y-m"));//尋找判斷變數是不是有存在，如果有就回傳1 if else的簡寫
$day=getthemonth($YM);
$dayCount = date("t",strtotime($day[0]));
$weekday = date('w', strtotime($day[0]));
$d_first = date("j",strtotime($day[0])).' - '.$d_last=date("j",strtotime($day[1]));
$d_last = $dayCount+$weekday-1;

function getthemonth($date)
{
    $firstday = date('Y-m-01', strtotime($date));//取得該日期月份的第一天，PHP內建date時間函數
    $lastday = date('Y-m-d', strtotime("$firstday +1 month -1 day"));//取得該日期月份的最後一天,加一個月減一天
    $month=date('m', strtotime($date));
    $year=date('Y', strtotime($date));
    return array($firstday,$lastday,$month,$year);
}

function changeday($x){

    return '星期' . ['日','一','二','三','四','五','六'][$x];

}

function bgColor($x , $weekday , $d_last) {

    if ($x+1 <= $weekday || $x > $d_last) {
        return '#DDDDDD';
    }

    if (in_array($x % 7 ,[0,6])) {
        return '#F0E68C';
    }

    return '#F5DEB3';

}
?>

<!DOCTYPE HTML>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>日曆</title>
</head>

<body>

<b><?=$YM?></b> <br>
這個月有幾 <?=$dayCount?> 天 <br>

這個月的第一天是禮拜 <?=$weekday?> <br>

這個月的最後一天是禮拜 <?=date('w', strtotime($day[1]))?> <br>

last:<?=$d_last?><br>


<div class="table text" style="width:859px;background-color:#AAAAAA;">
    <?php for($x=0;$x<=6;$x++): ?> <!-- 周一到週日 -->
        <div style="background-color:<?= ($x==0||$x==6) ? '#FF88C2' : '#DDDDDD'?>;width:120.6px;height:30px;float:left; border:#FFFFFF 1px solid;">
            <?=changeday($x)?>
        </div>
    <?php endfor?>
</div>

<div class="table" style="width:859px;background-color:#333;">
    <?php $i = 1?>
<?php for($x = 0 ; $x <= 41 ; $x ++):?>
    <div style="background-color:<?=bgColor($x , $weekday , $d_last)?>;width:120.6px;height:160px;float:left; border:#FFFFFF 1px solid;">
        <?=$x+1 > $weekday && $x <= $d_last ? '['.$i.']'.date('w',strtotime(date("Y-m-$x"))):''?>
    </div>

    <?php $i = ($x + 1 > $weekday ? $i + 1 : 1) ?>

<?php endfor?>


</div>

<div class="table" style="clear:both;width:890px;">
    <a href="?date=<?php echo date("Y-m",strtotime('-1 month',strtotime($YM)));?>" style="float:left;">上個月</a>
    <a href="?date=<?php echo date("Y-m",strtotime('+1 month',strtotime($YM)));?>" style="float:right;">下個月</a>
</div>
</body>
</html>
