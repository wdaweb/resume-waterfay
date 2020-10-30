<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>學生資料輸入</title>
</head>
<body>
<pre>
建立一個輸入畫面
建立一個學生資料陣列
輸入學生班級座號，顯示學生詳細資料
</pre>
<?php
$student=[
    '01'=>[
        '姓名'=>'玟婷',
        '國文'=>'68',
        '英文'=>'70',
        '身高'=>'170',
        '體重'=>'40'
    ],
    '02'=>[
        '姓名'=>'庭瑋',
        '國文'=>'80',
        '英文'=>'90',
        '身高'=>'170',
        '體重'=>'40'
    ],
    '03'=>[
        '姓名'=>'沂珊',
        '國文'=>'70',
        '英文'=>'91',
        '身高'=>'168',
        '體重'=>'40'
    ],
    '04'=>[
        '姓名'=>'君華',
        '國文'=>'68',
        '英文'=>'71',
        '身高'=>'165',
        '體重'=>'40'
    ],
    '05'=>[
        '姓名'=>'映心',
        '國文'=>'85',
        '英文'=>'77',
        '身高'=>'160',
        '體重'=>'40'
    ],

    
];

if(!empty($_POST['num']) || !empty($_GET['num'])){
    // echo "你查詢的學生為"{$_POST['num']}"號";

    if(isset($_POST['num'])){
        $num=$_POST['num'];
    }else{
        $num=$_GET['num'];
    }
    $stu=$student[$num];

    echo "你查詢的學生為{$num}號<br>";
    echo $stu['姓名']."<br>";
    echo "國文成績".$stu['國文']."<br>";
    echo "英文成績".$stu['英文'];
    echo"<div><a href='form.php?num={$num}&height={$stu['身高']}&weight={$stu['體重']}'>查詢BMI</a></div>";
    echo"<div><a href='student.php'>重新查詢</a></div>";
}else{
?>
<form action="student.php" method="post">
    <h5>請輸入座號來查詢學生資料</h5>
    <input type="text" name="num">
    <input type="submit" name="查詢">
</form>
<?php
}

?>

</body>
</html>