<?php

include_once "../base.php";
//撰寫新增消費發票的程式碼
//將發票的號碼及相關資訊寫入資料庫

// foreach($_POST as $key => $value){
//     $tmp[]=$key;
// }
// foreach($_POST as $key => $value){
//     $tmp2[]=$value;
// }
echo "<pre>";
print_r(array_keys($_POST));
echo "</pre>";
// echo "<pre>";
// print_r($tmp);
// echo "</pre>";
// echo "<br>";
// echo "insert into invoice(`".implode("`,`",array_keys($_POST))."`)";
// echo "values('".implode("','",$_POST)."')";

$sql="insert into invoices(`".implode("`,`",array_keys($_POST))."`) values('".implode("','",$_POST)."')";
echo $sql;
$pdo->exec($sql);

echo"新增完成";
header("location:../index.php");

?>