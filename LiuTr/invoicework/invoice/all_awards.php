<?php
include_once "base.php";

$period_str=[
    1=>'1,2月',
    2=>'3,4月',
    3=>'5,6月',
    4=>'7,8月',
    5=>'9,10月',
    6=>'11,12月'
];

echo "你要對的發票是".$_GET['year']."年的";
echo $period_str[$_GET['period']]."的發票";


$invoice=$pdo->query("select `invoices`.`date`,`invoices`.`number`,`invoices`.`period` from `invoices` where  period='{$_GET['period']}' && left(date,4)='{$_GET['year']}' order by date desc")->fetchAll();
$count=ceil(count($invoice)/250);
$year=setrawcookie("period",$_GET['year'],time()+60*60*24);
$period=setrawcookie("period",$_GET['period'],time()+60*60*24);

?>
<table class="table text-center">
    <tr>
        <td>消費日期</td>
        <td>發票號碼</td>
        <td>期數</td>
    </tr>
<?php
if(isset($_GET['page'])){
    $under=($_GET['page'])*5;
    $above=$_GET['page']*5;
}else{
    $under=1;
    $above=5;
}
for($i=$under;$i<=$above&&$i<$count;$i++){
    echo "<tr>";
    echo "<td>{$invoice[$i]['date']}</td>";
    echo "<td>{$invoice[$i]['number']}</td>";
    echo "<td>{$invoice[$i]['period']}</td>";
    echo "</tr>";
}


?>
</table>
<?php
if(!isset($_GET['page'])){
    $_GET['page']=1;
}else{
    $pre=$_GET['page']-1;
    $next=$_GET['page']+1;
}
?>
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="?do=all_numbers&page=<?=$pre?>">Previous</a></li>
    <li class="page-item"><a class="page-link" href="?do=all_numbers&page=<?=$next?>">Next</a></li>
  </ul>
