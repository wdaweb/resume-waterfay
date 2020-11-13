<?php
$dsn="mysql:host=localhost;dbname=students;charset=utf8";
$pdo=new PDO($dsn,'root','');
$sql = $PDO->prepare("SELECT students (name) values (:name)");
$sql->bindParam(':name', $name);


// 插入一行
$name = 'one';
$value = 1;
$sql->execute();

//  用不同的值插入另一行
$name = 'two';
$value = 2;
$sql->execute();
?>