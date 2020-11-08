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
        html {
            height: 100%;
        }

        .container-fluid{
            padding-right: 0px;
            padding-left: 0px;
        }

.wave {
position: relative;
width: 100%;
height: 100vh;
background-color: #225ca3;
overflow: hidden;
}

.wave::before,.wave::after{
content: "";
position: absolute;
left: 50%;
bottom: 15%;
width: 160%;
height: 350%;
border-radius: 100%;
background-color:  rgb(213, 229, 239);
animation: rotate 8s linear infinite;
}

.wave::before {
bottom: 10%;
opacity:0.3;
border-radius: 47%;
}

@keyframes rotate {
from {
transform: translateX(-50%) rotateZ(0deg);
}
to {
transform: translateX(-50%) rotateZ(360deg);
}
}


        table{
            bottom:20%;
            width:400px;
            margin:auto;
            border:0px;
            border-radius:20%;
            position:absolute
            border-collapse: collapse;
        }
        table td{
            border-collapse: collapse; 
            border:0px;
            text-align:center;
            padding:10px 0;
        }
        table td:hover{
            background:lightyellow;
        }
    </style>
</head>
<body>
<div class="container-fluid justify-content-center position-relative" style="z-index:-999;">
    <div class="wave">


<div class="container d-flex justify-content-center  mt-1 position-relative" style="z-index:1;">
<div class="row  border justify-content-center align-items-center"  style="width:600px;height: 600px;box-shadow:1px 1px 10px #185761; border-radius:50%;">
<div class="col-7 bg-transparent overflow-hidden">
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
        $premonth=12;
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

echo "<table width='1200px' border='0px'>";
echo "<tr>";
echo "<th>&emsp;日</th>";
echo "<th>&emsp;一</th>";
echo "<th>&emsp;二</th>";
echo "<th>&emsp;三</th>";
echo "<th>&emsp;四</th>";
echo "<th>&emsp;五</th>";
echo "<th>&emsp;六</th>";
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


</div>
<a class="position-absolute" style="z-index:99;" href='calenderwork1.php?Y=<?=$preyear?>&m=<?=$premonth?>'>上個月</a><br>
<a class="position-absolute" style="z-index:99;" href='calenderwork1.php?Y=<?=$nextyear?>&m=<?=$nextmonth?>'>下個月</a><br>
</div>
</div>
<br>

</body>
</html>