<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body{
            background:url("images/templebg.jpg") no-repeat center;
            margin:0 auto;
            display:flex;
            min-height: 100vh;
            min-width : 100%;
            align-items:center;
            justify-content:center;
            z-index:-1;
        }
    .box{
        display:inline-flex;
        align-items:center;
        justify-content:center;
        z-index:100;
    }
    .contain{
        height:600px;
        width:900px;
        background:white;
    }
    .login{
        top:100%;
        width:100%;
        height:100px;
        background:#3B3B3B;
        position: absolute;
    }
    </style>
    <link rel="stylesheet" type="text/css" media="screen" href="rwd.css">
</head>
<body>
    <div class="box">
    <div class="contain"></div>
    </div>
    <div class="login"><img src="images/logo1.png" style="width:200px;" alt=""></div>
</body>
</html>