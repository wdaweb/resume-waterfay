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
if(isset($_GET["m"] )&& isset($_GET["Y"])){
    $month=$_GET["m"];
    $year=$_GET["Y"];
    }else{
        $month=date("m");
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

date_default_timezone_set("Asia/Taipei");
$firstDate=strtotime("{$year}-{$month}-1");
$starDayWeek=date('w',$firstDate);
$monthDays=date("t",$firstDate);

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
for($i=1-$starDayWeek; $i<=$monthDays;)
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
                    echo "<td>".$i."</td>";
                    
            }
            
            $i++;
        }
        echo "</tr>";
    }
echo "</table>";
?>


<a href='calenderwork.php?Y=<?=$preyear?>&m=<?=$premonth?>'>上個月</a><br>
<a href='calenderwork.php?Y=<?=$nextyear?>&m=<?=$nextmonth?>'>下個月</a><br>

</body>
</html>