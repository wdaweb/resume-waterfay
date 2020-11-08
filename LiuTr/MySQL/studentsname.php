<?php

$dsn="mysql:host=localhost;dbname=students;cherset=utf8";
$pdo=new PDO($dsn,'root','');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>學生名冊</title>
    <style>
    table{
        margin:auto;
        border-collapse:collapse;
        box-shadow: 0 0 5px #999999;
        border:5px double blue;
        padding:10px;
    }
    table td{
        padding:5px 5px;
        text-align:center;
        border:1px solid #cccccc;
    }
    .selector{
        width:50%;
        margin:auto;
        padding:10px 5px;
        display:flex;
        justify-content:space-around;
    }
    .selector form select{
        font-size:1.5rem;
        padding:5px;
    }
    </style>
</head>
<body>
<div class="selector">
<form action="studentname.php" method="post">
    <select name="dept" id="">
    <?php
        $sql="select *from dept";
        $depts=$pdo->query($sql)->fetchAll();
        foreach($depts as $dept){
            echo "<option value='{$dept['id']}'>{$dept['name']}</option>";
        }
    ?>
    </select>
    <input type="submit" value="查詢">
</form>

<form action="studentname.php" method="post">
    <select name="dept" id="">
    <?php
        $sql="select *from graduate_school";
        $schools=$pdo->query($sql)->fetchAll();
        foreach($schools as $school){
            echo "<option value='{$school['id']}'>{$school['name']}</option>";
        }
    ?>
    </select>
    <input type="submit" value="查詢">
</div>

<?php
$dsn="mysql:host=localhost;dbname=students;cherset=utf8";
$pdo=new PDO($dsn,'root','');
$sql="select
    `students`.`school_num` AS '學號',
    `students`.`name` AS '姓名',
    `students`.`uni_id` AS '身分證字號',
    `students`.`birthday` AS '生日',
    `dept`.`name` AS '科系',
    `graduate_school`.`name` AS '畢業國中'

    from 
    `students`,
    `dept`,
    `graduate_school` 
    where 
    `dept`.`id`=`students`.`dept` AND 
    `students`.`graduate_at`=`graduate_school`.`id`";

$rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
?>
<table>
<tr>
    <td>學號</td>
    <td>姓名</td>
    <td>身分證字號</td>
    <td>生日</td>
    <td>科系</td>
    <td>畢業國中</td>
</tr>
<?php
foreach($rows as $row){
    echo "<tr>";
    echo "<td>{$row['學號']}</td>";
    echo "<td>{$row['姓名']}</td>";
    echo "<td>{$row['身分證字號']}</td>";
    echo "<td>{$row['生日']}</td>";
    echo "<td>{$row['科系']}</td>";
    echo "<td>{$row['畢業國中']}</td>";
}
?>
</table>
</body>
</html>
