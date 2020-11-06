<?php
$dsn="mysql:host=localhost;dbname=students;cherset=utf8";
$pdo=new PDO($dsn,'root','');

$sql="select *from `students` where `dept='1'";

foreach($rows as $row){
    echo $row['school_num']."=>".$row['name']."=>".$row['dept'];
    echo "<br>";
}
?>