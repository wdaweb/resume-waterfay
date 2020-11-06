<?php
$dsn="mysql:host=localhost;dbname=students;cherset=utf8";
$pdo=new PDO($dsn,'root','');

$sql="select id ,code from status";

$rows=$pdo ->query($sql)->fetch();
echo "<pre>";
print_r($rows);
echo "</pre>";

echo "<br>";
echo $rows['id'];
echo "<br>";
echo $rows[0];

?>