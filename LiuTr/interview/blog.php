<?php

include_once "base.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WY Chen Resume</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <!--不一定會用到-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+TC:wght@600&family=Prata&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" type="text/css" media="all" href="rwd.css">
  <script src="jquery.easing.1.3.js" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/1b66a8f9ef.js" crossorigin="anonymous"></script>

    <title>Document</title>
    <style>
        body{
            background: rgb(226, 230, 221);
        }
    </style>
</head>
<body>
<div class="container" id="blog">
      <h1 style="text-align:center;">Blog</h1>
      <hr>

      <div class="more">分類： &emsp; &emsp;<a href="blog.php?type=0" style="text-decoration:none;color:#5e5845;">未分類</a> &emsp; &emsp;<a href="blog.php?type=1" style="text-decoration:none;color:#5e5845;">履歷</a> &emsp; &emsp;<a href="blog.php?type=2" style="text-decoration:none;color:#5e5845;">寫作</a> &emsp; &emsp;<a href="blog.php?type=3" style="text-decoration:none;color:#5e5845;">心情</a> &emsp; &emsp;<a href="blog.php?type=4" style="text-decoration:none;color:#5e5845;">行銷</a><a href="interview.php" style="text-decoration:none;color:#5e5845;float:right;">回首頁</a></div>
      <hr>

      <?php
          $total = $Blog->count();
          $num = 5;
          $pages = ceil($total / $num);
          $now = (!empty($_GET['p'])) ? $_GET['p'] : 1;
          $start = ($now - 1) * $num;
                // for($i=0;$i<3;$i++){
                $bgcount=$Blog->count(['new'=>1]);
                // echo $bgcount;
                // $blogs=$Blog->all(['new'=>1],"order by sort limit $i , 1");
                if(!empty($_GET['type'])){
                  $blogs=$Blog->all(['new'=>1,'type'=>($_GET['type'])],"order by sort limit $start , $num");
                }else{
                  $blogs=$Blog->all(['new'=>1],"order by sort limit $start , $num");
                }

                foreach($blogs as $key => $blog){ 
                if($key%2==0){          
            ?>
            <div class="media">
                <div class="media-body">
                    <h5 class="mt-auto"><a href="contain.php?id=<?=$blog['id']?>" class="blogtitle"
                            style="text-decoration:none;color:#5e5845;"><?=$blog['title'];?></a></h5>
                    <?=mb_substr($blog['text'],0,150,'utf8');?>......
                </div>
                <img src="img/<?=$blog['img']?>" class="mr-3" style="width:200px;height:200px;">
            </div>
            <?php
                }else{
            ?>
            <div class="media">
                <img src="img/<?=$blog['img']?>" class="mr-3" style="width:200px;height:200px;">
                <div class="media-body">
                    <h5 class="mt-auto"><a href="contain.php?id=<?=$blog['id']?>" class="blogtitle"
                            style="text-decoration:none;color:#5e5845;"><?=$blog['title'];?></a></h5>
                    <?=mb_substr($blog['text'],0,150,'utf8');?>......
                </div>
            </div>
            <?php
        }
    }
        ?>

      </div>
      <nav aria-label="Page navigation example ">
            <ul class="pagination justify-content-center mt-5">
        <?php
                if (($now - 1) > 0) {
            ?>
             <li class="page-item">
            <a class="page-link bg-success" aria-label="Previous" style="text-decoration:none;color:white;" href="?do=web&p=<?=($now - 1);?>">
            <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
            <?php } ?>
            <?php
                for ($i = 1; $i <= $pages; $i++) {
            ?>
                <li class="page-item "><a class="page-link bg-success" style="text-decoration:none;color:white;" href="?do=web&p=<?=$i;?>"><?=$i;?></a></li>
            <?php } ?>
            <?php
                if (($now + 1) <= $pages) {
            ?>
            <li class="page-item ">
                <a class="page-link bg-success" style="text-decoration:none;color:white;"  href="?do=web&p=<?=($now + 1);?>">
                <span aria-hidden="true">&raquo;</span>
            </a>
                </li>
            <?php } ?>
            </ul>
        </nav>    
    </div>
</body>
</html>