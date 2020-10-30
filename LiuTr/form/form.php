<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>表單製作</h1>
    <h3>BMI計算機</h3>
    <div>
    <?php
            if(!empty($_GET['height'])&& !empty($_GET['weight'])){
                echo "身高是".$_GET['height'];
                echo "<br>";
                echo "體重是".$_GET['weight'];
                $result=$_GET['weight']/pow($_GET['height']/100,2);
            }else{
    ?>
    </div>
    <form action="form.php" method="get">
        <p>身高：<input type="text" name="height" value="">cm<input type="submit" value="開始計算"></p>
        <p>體重：<input type="text" name="weight" value="">kg<input type="reset" value="清除重算"></p>
    </form>
    <?php
        }

    ?>
    <?php
    if(isset($result)){
?>
    <h5>你的BMI為</h5>
    <div style="background:skyblue;width:200px;height:30px"><?=round($result,2);?></div>
    <a href='student.php?num=<?=$_GET['num']; ?>'>回學生查詢頁</a><br>
    <a href="form.php">重新計算</a>
<?php
    }
    ?>
</body>
</html>