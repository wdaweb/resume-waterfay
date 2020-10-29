<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body{
            height:1000px;
        }
        table{
            width:500px;
            margin:auto;
            border:1px solid #ccc;
        }
        table td{
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
<h3>月曆製作</h3>
<table>
    <tr>
        <td>日</td>
        <td>一</td>
        <td>二</td>
        <td>三</td>
        <td>四</td>
        <td>五</td>
        <td>六</td>
    </tr>
<?php

$thisMonth=date("m");
echo "這個月=>".$thisMonth;
echo"<br>";
$monthDays=date("t");
echo "這個月天數=>".$monthDays;
echo"<br>";
$firstDate=strtotime(date("Y-m-").'1');
// echo $firstDate;
$starDayWeek=date('w',$firstDate);
echo "第一天星期=>" .$starDayWeek;
echo "<br>";

for($i=0;$i<6;$i++){
    echo"<tr>";
    for($j=0;$j<7;$j++){
        if((($i*7) + ($j+1) - $starDayWeek)>$monthDays){
        break;
        }
        echo"<td>";
        if($i==0 && $j<4){
            echo "&nbsp;";
        }else if((($i*7) + ($j+1) - $starDayWeek)>$monthDays){

        }else{
        echo (($i*7) + ($j+1) - $starDayWeek);
        }


        echo"</td>";

    }
    echo"</tr>";
}



?>
</table>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>   <!--不一定會用到-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
</body>
</html>