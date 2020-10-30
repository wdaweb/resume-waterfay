<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>錯誤頁</title>
</head>
<body>
    <h1>
        <?php
        switch($_GET['e']){
            case 1:
                echo "帳號不存在";
                echo "<br><a href='#'>註冊新帳號</a>";
            break;
            case 2:
                echo "密碼錯誤，請重新登入";
            break;
        }
        ?>
    </h1>
    <h5><a href="login.html"></a></h5>
</body>
</html>