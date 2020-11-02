<?php 
header("content-type:text/html;charset=utf-8");
 //获取当前年
 // $year=$_GET['y']?$_GET['y']:date('Y');
  if(!empty($_GET['y'])){
$year=$_GET['y'];

  }else{
    $year=date('Y');
  }
   if(!empty($_GET['m'])){
$month=$_GET['m'];

  }else{
    $month=date('m');
  }
 //获取当年月
 // $month=$_GET['m']?$_GET['m']:date('m');
 
 //获取当前月多少天
 $days=date('t',strtotime("{$year}-{$month}-1"));
 
 //当前一号周几
 $week=date('w',strtotime("{$year}-{$month}-1"));
 
 //居中
 echo "<center>";
 

//输出表头
echo " <h2><a href='msq.php?y={$prevyear}&m={$prevmonth}'>上一月</a>|{$year}年{$month}月|<a  href='msq.php?y={$nextyear}&m={$nextmonth}'>下一月</a></h2>";
 
 //输出日期表格
 echo "<table width='700px' border='1px'>";
 echo "<tr>";
 echo "<th>周日</th>";
 echo "<th>周一</th>";
 echo "<th>周二</th>";
 echo "<th>周三</th>";
 echo "<th>周四</th>";
 echo "<th>周五</th>";
 echo "<th>周六</th>";
 echo "</tr>";
 
 for ($i=1-$week;$i<=$days;)
      { 
         echo "<tr>";
         for ($j=0; $j<7; $j++)
         { 
             if ($i>$days || $i<1) 
             {
                 echo "<td>&nbsp;</td>";
             }
             else
             {
                  echo "<td>{$i}</td>";
             }
             $i++;
         }
         echo "</tr>";
     }
 echo "</table>";
 echo "</center>";
 
 ?>