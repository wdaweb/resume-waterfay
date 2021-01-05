<?php

include_once "../base.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WY Chen Resume Backstage</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+TC:wght@600&family=Prata&display=swap"
    rel="stylesheet">
    <!--不一定會用到-->
    <style>
        body {
            font-family: 'Prata', serif, 'Noto Serif TC', serif;
            width: 100%;
            height: 900px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto;
            background: rgb(191, 202, 177);
        }
        .main {
            width: 1000px;
            height: 900px;
        }
        .login{
            width: 1000px;
            height: 500px;
            display: flex;
            justify-content: center;
            align-items: center;
            transform: translate(-5%,-5%);
        }
    </style>
</head>

<body>

    <div class="container main">
        <div class="col col-12">
            <h1 style="text-align: center;line-hight:5px;">WY Chen Resume Backstage</h1>
            <nav>
                <div class="nav nav-tabs justify-content-center" id="nav-tab">
                    <a class="nav-item nav-link text-white" id="" data-toggle="tab" href="?do=self_introduction">Self-introduction</a>
                    <a class="nav-item nav-link text-white" id="" data-toggle="tab" href="?do=resume">Resume</a>
                    <a class="nav-item nav-link text-white" id="" data-toggle="tab" href="?do=blog">Blog</a>
                    <a class="nav-item nav-link text-white" id="" data-toggle="tab" href="?do=draw">Draw and
                        Design</a>
                    <a class="nav-item nav-link text-white" id="" data-toggle="tab" href="?do=web">Web Design</a>
                    <a class="nav-item nav-link text-white" id="" data-toggle="tab" href="?do=bottom">Bottom</a>
                    
                    <?php
                    if(!empty($_SESSION['login'])){
                    ?>
                        <a class='nav-item nav-link text-white' id='' data-toggle='tab' onclick="location.replace('../api/logout.php')">logout</a>

                    <?php
                    }else{
                    ?>
                        <!-- <a class='nav-item nav-link text-white' id='' data-toggle='tab' onclick="location.replace('main.php')">login</a> -->
                    <?php
                    }
                    ?>
                </div>
            </nav>
            <?php
            if(empty($_GET['do']) && empty($_SESSION['login'])){
                include "login.php";
            }else if(empty($_GET['do']) && !empty($_SESSION['login'])){
                include "self_introduction.php";
            }else{
                include ($_GET['do']).".php";
            }
            ?>

        </div>
    </div>
</body>
</html>