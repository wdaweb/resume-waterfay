<?php

$dsn="mysql:host=localhost;dbname=students;charset=utf8";
$pdo=new PDO($dsn,'root','');

$sql="SELECT * FROM `students` WHERE `students`.`id`='2'";
$sql1="SELECT * FROM `students` ";
$row= $pdo ->query($sql) ->fetch();
$rows=$pdo ->query($sql) ->fetchAll();
$rows1=$pdo ->query($sql1)->fetchAll();

$rows2=$pdo ->query($sql)->fetchColumn(3);
$rows3=$pdo ->query($sql1)->fetchColumn(3);
// $rows4=$pdo ->query($sql)->fetch(PDO::FETCH_CLASS,"students");


print_r($row);
echo"<hr>";
echo"<hr>";
print_r($rows);
echo"<hr>";
echo"<hr>";
print_r($rows1);
echo"<hr>";
echo"<hr>";
print_r($rows2);
echo"<hr>";
echo"<hr>";
print_r($rows3);
echo"<hr>";

// print_r($rows4);
// print_r($rows3);



?>

