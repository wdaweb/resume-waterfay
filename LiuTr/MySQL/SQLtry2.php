<?php

$dsn="mysql:host=localhost;dbname:students_step3;charset=utf8;"
$pdo=new PDO($dsn,'root','');
$sql="`select
        `students`.`school_num` AS '學號',
        `students`.`name` AS '姓名',
        `students`.`uni_id` AS '身分證字號',
        `students`.`birthday` AS '生日',
        `dept`.`name` AS '科系',
        `graduate_school` .`name` AS '畢業國中'

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
            echo"<tr>";
            echo "<td>{$row['學號']}</td>";
            echo "<td>{$row['學號']}</td>";
            echo "<td>{$row['學號']}</td>";
            echo "<td>{$row['學號']}</td>";
            echo "<td>{$row['學號']}</td>";
            echo "<td>{$row['學號']}</td>";
        }
        </table>