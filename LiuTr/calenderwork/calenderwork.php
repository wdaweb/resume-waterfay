<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>   <!--不一定會用到-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
    <style>
        body{
            height:1000px;
        }
        table{
            width:300px;
            margin:auto;
            border:0px solid #ccc;
            border-collapse: collapse;
        }
        table td{
            border-collapse: collapse; 
            border:1px solid #ccc;
            text-align:center;
            padding:10px 0;
        }
        table td:hover{
            background:lightyellow;
        }

    </style>
</head>
<body>
<div class="container mt-5">
<div class="col-12 float-right border bg-light" style="height: 600px;box-shadow:1px 1px 10px #185761 ;">
<h3>月曆製作</h3>




<?php
date_default_timezone_set("Asia/Taipei");
$year=date("Y");
echo "今年=>".$year;
echo"<br>";
$nextyear=$year+1;
echo "下一年=>".$nextyear;
echo"<br>";
$preyear=$year-1;
echo "上一年=>".$preyear;
echo"<br>";
$month=date("m");
echo "這個月=>".$month;
echo"<br>";
$nextmonth=$month+1;
echo "下個月=>".$nextmonth;
echo"<br>";
$premonth=$month-1;
echo "上個月=>".$premonth;
echo"<br>";
$monthDays=date("t");
echo "這個月天數=>".$monthDays;
echo"<br>";
$firstDate=strtotime(date("Y-m-").'1');
echo $firstDate;
echo"<br>";
$starDayWeek=date('w',$firstDate);
echo "第一天星期=>" .$starDayWeek;
echo "<br>";

echo "<table width='700px' border='1px'>";
echo "<tr>";
echo "<th>日</th>";
echo "<th>一</th>";
echo "<th>二</th>";
echo "<th>三</th>";
echo "<th>四</th>";
echo "<th>五</th>";
echo "<th>六</th>";
echo "</tr>";

//铺表格
for($i=1-$starDayWeek; $i<=$monthDays;$i++)
     { 
        echo "<tr>";
        for ($j=0; $j<7; $j++)
        { 
            if ($i>$monthDays || $i<1) 
            {
                echo "<td>&nbsp;</td>";
            }
            else
            {
                    echo "<td>".($i++)."</td>";
                    
            }
        }
        echo "</tr>";
    }
echo "</table>";
?>

<?php
if(!empty($_GET['preyear'])){
$nextyear=$year;
$nextmonth=$month+1;
if(!empty($_GET['nextyear'])){
     $nextyear=$year+1;
     $nextmonth=1;
 }
 
 $preyear=$year;
 $premonth=$month-1;
if($premonth<1){
    $preyear=$year-1;
    $premonth=12;
}
}
?>
<br>
<div class="row justify-content-center">
<div class="col-6 justify-content-center">
<form action="calenderwork.php" method="get">
        <input type="button" class="btn btn-outline-secondary btn-lg" name="prevyear" value="上個月">
        <input type="button" class="btn btn-outline-secondary btn-lg" method="nextyear" value="下個月">
        </form>        
        </div>
        </div>
</div>
</body>
</html>