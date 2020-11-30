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
    .invoice{
        /* height:500px;
        width:800px; */
        background:white;
    }
    .login{
        top:100%;
        width:100%;
        height:100px;
        background:#ffdfb3;
        position: absolute;
    }
    </style>
    <link rel="stylesheet" type="text/css" media="screen" href="rwd.css">
</head>
<body>
    <div class="box">
    <div class="invoice"></div>
    <div class="temple"></div>
    </div>
    <div class="login"><img src="images/logo.png" style="width:200px;" alt=""></div>
</body>
</html>