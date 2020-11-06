<?php
$dsn="mysql:host=localhost;dbname=students;cherset=utf8";
$pdo=new PDO($dsn,'root','');

$sql="SELECT 
`students`.`school_num` AS '學號',
`students`.`name`AS '姓名',
`students`.`uni_id` AS '身份證字號',
`dept`.`name` AS '科系名稱',
`graduate_school`.`name` AS '畢業國中'
from 
`students`,
`dept`,
`graduate_school` 
where 
`students`.`dept`=`dept`.`id` AND 
`students`.`graduate_at`=`graduate_school`.`id` AND
`students`.`dept`='1' AND
`students`.`graduate_at`='1'";

$rows=$pdo ->query($sql);
$row=$rows->fetch();
echo "<pre>";
print_r($rows);
echo "</pre>";
$row=$rows->fetch();
echo "<pre>";
print_r($row);
echo "</pre>";

$rows=$pdo ->query($sql)->fetchAll();
echo "<pre>";
print_r($rows);
echo "</pre>";

?>