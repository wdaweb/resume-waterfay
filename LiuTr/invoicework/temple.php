<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body{
            margin:0 auto;
        }
    .bg{
            background:url("images/templebg.jpg") no-repeat center;
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
        height:500px;
        width:400px;
        background:white;
    }
    .temple{
        height:500px;
        width:400px;
        background:red;
    }
    .login{
        top:100%;
        width:100%;
        height:100px;
        background:#3B3B3B;
        position: absolute;
        color:white;
        display:flex;
        align-items:center;
        justify-content:center;
    }
    </style>
<link rel="stylesheet" type="text/css" media="screen" href="rwd.css">
</head>
<body>
    <div class="bg">
    <div class="box">
    <div class="invoice"><a href="invoice.php">輸入消費發票</a></div>
    <div class="temple"><a href="lots.php">輸入消費發票</a></div>
    </div>
  <div class="login">
      <h5>copyright©台北霞海城隍廟<br>
      電話:(02) 2558-0346<br>
　  　地址:台北市大同區迪化街一段61號<br>
      </h5>
      <img src="images/logo1.png" style="width:200px;" alt="">
    </div>
    </div>
</body>
</html>