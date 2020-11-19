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

$invoices=$pdo->query("select `invoices`.`date`,`invoices`.`number`,`invoices`.`period` from `invoices` where  period='{$_GET['period']}' && left(date,4)='{$_GET['year']}' order by date desc ")->fetchAll();

foreach($invoices as $invoice){
    echo "<br>{$invoice['date']}</br>";
    echo "<br>{$invoice['number']}</br>";
    echo "<br>{$invoice['period']}</br>";
}

$award_number=$pdo->query("select * from award_numbers where year='{$_GET['year']}' && period='{$_GET['period']}'")->fetchAll(PDO::FETCH_ASSOC);

print_r($award_number);

?>
