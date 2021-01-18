<?php

include_once "base.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WY Chen Resume</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <!--不一定會用到-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+TC:wght@600&family=Prata&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="all" href="rwd.css">
    <script src="jquery.easing.1.3.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/1b66a8f9ef.js" crossorigin="anonymous"></script>

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js" crossorigin="anonymous"></script> -->
    <style>
    /* body {
        background : #f5f4f3;
        width      : 100%;
        height     : 420vh;
        overflow-x : hidden;
        overflow-y : auto;
    } */
    /* *, *::before, *::after {
        box-sizing: inherit!important;
      } */
    header {
        height: 840px;
    }

    article {
        /* height: 1000px; */
        background: rgb(226, 230, 221);
        box-sizing: border-box;
        padding: 30px;
    }

    main {
        box-sizing: border-box;
        padding: 30px;
    }

    figure {
        width: 100%;
        background: url("img/flower2.jpg") repeat;
        background-attachment: fixed;
        margin: 0;
    }

    footer {
        height: 275px;
        background: rgb(191, 202, 177);
    }

    .container {
        padding-top: 100px;
        padding-bottom: 100px;
    }

    .wrap {
        /* background: url('img/bamboo.jpg') no-repeat bottom center / cover; 
      text-align: left;
      font-size: 6rem;
      float: left; */
        /* -webkit-text-fill-color: transparent;
      -webkit-background-clip: text;
      background-clip: text; */
    }

    .space {
        background: white;
        top: 28vh;
        left: 20%;
        width: 600px;
        height: 400px;
        opacity: 90%;
        font-size: 16px;
        padding: 10px;
        position: absolute;
        box-shadow: 1px 1px 1px 1px #0000002b;
        box-sizing: border-box;
        padding: 30px;
        animation: spa 1s infinite forwards;
        animation-iteration-count: 1;
    }

    @keyframes spa {
        0% {
            left: 100%;
            opacity: 0%;
        }

        100% {
            left: 20%;
            opacity: 90%;
        }
    }

    .arrow {
        background: rgb(124, 118, 114);
        width: 300px;
        height: 4px;
        z-index: 1;
        transform: translate(85%, 300%);
        box-shadow: 0px 0px 1px 1px #00000000;
        animation: arrow 1s infinite alternate;
    }

    /* .arrow::after{
        content: "";
        display: block;
        background:rgb(194, 194, 194);
        width:300px;
        height: 4px;
        box-shadow: 1px 1px 1px 1px black;
        transform:translate(0%,0%);
    } */
    .arrow::before {
        content: "";
        display: block;
        height: 4px;
        width: 30px;
        background: rgb(124, 118, 114);
        box-shadow: 0px 0px 1px 1px #00000000;
        transform: translate(910%, -321.8%) rotate(49deg);
        animation: arrow2 1s infinite alternate;
    }

    @keyframes arrow {
        0% {
            transform: translate(83%, 300%);
            box-shadow: 5px -10px 3px 1px #00000024;
        }

        50% {
            transform: translate(80%, 300%);
        }
    }

    @keyframes arrow2 {
        0% {
            box-shadow: 3px -13px 3px 1px #00000024;
        }

        50% {}
    }

    #blog,
    #design {
        display: none;
    }

    .modal {
        position: absolute;
        display: none;
        top: 55px;
        width: 100%;
        height: 180vh;
        opacity: 85%;
        background: rgb(25, 96, 109);
        z-index: 1;
    }

    .flower {
        float: left;
        width: 500px;
        height: 630px;

    }

    #modalcontain {
        position: relative;
        color: #b5f3ff;
    }

    .bigTitle {
        font-size: 25px;
        line-height: 40px;
    }

    .title {
        font-size: 20px;
        line-height: 40px;
        margin-left: 1rem;
    }

    .text {
        font-size: 16px;
        line-height: 30px;
        margin-left: 2rem;
        border-left: 2px groove;
        padding-left: 10px;
    }




    .vine {
        top: 25vh;
        left: 20vw;
        display: none;
        position: absolute;
        width: 120%;
        height: 155vh;
        transform: scale(1.5, 1.5);
        transform-origin: bottom right;
        z-index: -1;
        /* display: grid; */
        /* align-items: center; */
        /* justify-content: right; */
    }

    .modalClose {
        border: 5px solid #8f997e;
        box-shadow: 0px 2px 7px 0px rgba(71, 77, 69, 0.5);
        position: absolute;
        top: 160vh;
        left: 50vw;
        width: 100px;
        height: 100px;
        background: transparent;
        z-index: 100;
        transform: translate(-50%, -50%);
        border-radius: 50%;
    }

    .modalClose:hover {
        border: 5px solid#c9ebb2;
        animation: mdclose1 1s infinite alternate;
    }

    .modalClose:hover::before {
        content: "";
        position: absolute;
        width: 100px;
        height: 100px;
        border-radius: 50%;
        transform-origin: -200px -200px;
        transform: translate(-5%, -5%);
        border: 5px solid #c9ebb2;
        display: block;
        animation: mdclose3 1s infinite alternate;
    }

    .modalClose:hover>#modalClose {
        color: #c9ebb2 !important;
        animation: mdclose2 1s infinite alternate;
    }

    @keyframes mdclose1 {
        25% {
            transform-origin: center;
            width: 110px;
            height: 110px;
        }
    }

    @keyframes mdclose3 {
        25% {
            border: 1px solid #a1b67d;
            transform: translate(-10%, -10%);
            width: 125px;
            height: 125px;
            box-shadow: 0px 2px 13px 0px rgb(111, 119, 109);
        }

        75% {
            border: 5px solid #a1b67d70;
            transform: translate(-15%, -15%);
            width: 130px;
            height: 130px;
            box-shadow: 0px 2px 13px 0px rgb(111, 119, 109);
        }
    }

    @keyframes mdclose2 {
        25% {
            transform-origin: center;
            font-size: 55px;
        }
    }

    .blogtitle {
        padding: 5px;
        color: #5e5845;
        border-radius: 5%;
        transition: all 400ms cubic-bezier(0.19, 1, 0.22, 1);
        outline: 0px rgba(255, 255, 255, 1) solid;
        outline-offset: 0px;

    }

    .blogtitle:hover {
        color: gray;
        box-shadow: inset 15px 15px 20px rgba(255, 255, 255, .2), 15px 15px 20px rgba(255, 255, 255, .2);
        outline: 200px rgba(255, 255, 255, 0) solid;
        outline-offset: 10px;
        border-radius: 10%;

    }

    .leafArrow {
        padding: 10px;
        font-size: 70px;
        display: flex;
        justify-content: space-around;
        color: #8f997e;

    }

    .space:hover {
        transition: all ease-in-out 0.5s;
        box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
    }

    #leafLeft:hover {
        color: #334426;
        transition: all ease-in-out 0.5s;
        text-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
    }

    #leafRight:hover {
        color: #334426;
        transition: all ease-in-out 0.5s;
        text-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
    }

    .more {
        font-size: 20px;
        height: 20px;
        display: grid;
        justify-content: flex-end;
    }

    .lastpg {
        display: grid;
        align-items: center;
        justify-content: center;
        box-sizing: border-box;
        padding: 15px;
        color: #5e5845;
        text-align: center;
    }

    .card {
        overflow: hidden;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
        transition: all 0.3s cubic-bezier(.25, .8, .25, 1);

    }

    .card:hover {
        transform: translate(-0.1%, -0.1%);
        box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
    }

    .card::before {
        background: #fff;
        content: "";
        height: 3000px;
        left: 600%;
        opacity: 0.2;
        position: absolute;
        top: -150%;
        transform: rotate(50deg);
        transition: all 700ms cubic-bezier(0.19, 1, 0.22, 1);
        width: 300px;
        z-index: 5000;
    }

    .card:hover::before {
        left: -600%;
        transition: all 700ms cubic-bezier(0.19, 1, 0.22, 1);

    }

    /* .tri{
        position:absolute;
        z-index:100;
        color:white;
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 0 0 50px 50px;
        border-color: transparent transparent #e5a185 transparent;
    } */
    .tribg {
        /* top:-2%;
      left:-1%; */
        position: absolute;
        z-index: 100000;
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 75px 75px 0 0;
        border-color: #bc8585 transparent transparent transparent;
        /* transform:translate(-2%,-2%),scale(1.1,1.1); */

    }

    .webDesign {
        font-size: 45px;
        /* border:10px solid #bc8585; */
        overflow: hidden;
        margin: 10px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
        transition: all 0.3s cubic-bezier(.25, .8, .25, 1);
        filter: grayscale(80%);
    }

    .webDesign:hover {
        transform: translate(-2%, -2%);
        box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
        filter: grayscale(0%);


    }

    .webDesign::after {
        background: #fff;
        content: "";
        height: 1500px;
        left: 200%;
        opacity: 0.2;
        position: absolute;
        top: -110%;
        transform: rotate(50deg);
        transition: all 550ms cubic-bezier(0.19, 1, 0.22, 1);
        width: 300px;
        z-index: 500;
        filter: blur(50px);
    }

    .webDesign:hover::after {
        left: -500%;
        transition: all 550ms cubic-bezier(0.19, 1, 0.22, 1);
    }

    .row {
        /* margin-left: 50px; */
    }
    </style>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark  py-auto" style="background-color: #5e5845;">
            <a class="navbar-brand" href="#"><i class="fas fas fa-leaf" style="color: #d6ffc8;"></i></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="interview.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#modalClose">Self-introduction</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#blog">blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#design">Draw and Design</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#WebDesign">Web Design</a>
                    </li>

                </ul>
                <a href="backend\main.php" style="text-decoration:none;color:white;"><button
                        class="btn  btn-outline-light" type="button">login</button></a>
            </div>
        </nav>
        <div class="space" id="Self-introduction" onclick="op(this)">
            <h3>Self-introduction</h3><br>
            <p>
                <?php
                $sf=$SelfIntroduction->find(1);
                echo nl2br($sf['text']);
            ?>
            </p>
            <br>
            <div class="arrow"></div>
        </div>
        <img src="./img/<?=$sf['img'];?>" class="Mugshot" style="float:right;height:780px;">
        <img src="./img/flower.jpg" class="flower" style="float:left;width:500px;height:630px;">
        <div class="wrap" style="background: url('img/<?=$sf['img'];?>') no-repeat bottom center / cover;text-align: left;font-size: 6rem;float: left;-webkit-text-fill-color: transparent;-webkit-background-clip: text;
      background-clip: text;">Self-introduction</div>
        <div class="modal">
            <div class="container-fluid  p-5" id="modalcontain">


                <div class="row justify-content-center">
                    <?php
                $rimg=$R_img->find(1);
                ?>
                    <div class="col-12 col-md-12 col-lg-3 mb-5" id="img" style="padding-left:50px;">
                        <img src="./img/<?=$rimg['img'];?>" style="width:230px;height:300px;opacity:1;">
                    </div>

                    <div class="col-12 col-md-6 col-lg-5" id="work">
                        <div class="bigTitle">工作經歷</div>

                        <?php
                        $wcount=$Work->count(['title'=>1]);
                for($j=0;$j<=$wcount;$j++){
                $ws=$Work->all(['sh'=>1,'title'=>0,'club'=>$j]," order by sort");
                $wts=$Work->all(['sh'=>1,'title'=>1,'club'=>$j]," order by sort");
                foreach($wts as $wt){
                    ?>
                    <div class="title"><?=$wt['text']?></div>
                    <?php
                }
                    foreach($ws as $w){
                    ?>

                        <div class="text"><?=$w['text']?></div>
                        <?php
                        }
                    }
            
                    ?>

                        <!-- <div class="title">國立臺東大學圖書館－看館工讀（2013/9-2014/6）</div>
                        <div class="text">借還書、館際合作系統操作</div>
                        <div class="text">讀者服務</div>

                        <div class="title">國立中興大學圖書館－美編工讀（2015/7-2017/12）</div>
                        <div class="text">2015、2016年圖書館週主視覺設計</div>
                        <div class="text">2015圖書館主題牆面主視覺設計</div>
                        <div class="text">其他文宣商品設計</div>
                        <div class="text">官方FB發文小編</div>
                        <div class="text">活動創意發想</div>

                        <div class="title">謬斯名人行銷－行銷企劃（2019/10-2019/12）</div>
                        <div class="text">Blog文章撰寫</div>
                        <div class="text">市場調查</div>
                        <div class="text">線上線下活動發想</div>

                        <div class="title">極酷衝浪俱樂部－美編行銷（2020/1-2020/8）</div>
                        <div class="text">店鋪帆布設計、VIP卡片、課程海報、等文宣產品設計。</div>
                        <div class="text">官方FB發文小編經營，旺季時期增加約2000個讚數、IG增加200個追蹤人數、振興券活動宣傳。</div>
                        <div class="text">線上預約及訂房流程優化、利用manychat設計回覆對話、利用修改文案內容優化SEO。</div>
                        <div class="text">其他訂房相關例行事務。</div> -->
                    </div>

                    <div class="col-12  col-md-6 col-lg-4">
                        <div id="edu">
                            <div class="bigTitle">學歷</div>
                            <?php

                            $redus=$R_edu->all(['sh'=>1,'club'=>1]," order by sort");
                            foreach($redus as $redu){
                                ?>
                            <div class="text"><?=$redu['text']?></div>
                            <?php
                                }
                                ?>
                        </div>

                        <div id="skill">
                            <div class="bigTitle">技能</div>
                            <?php

                            $redus=$R_edu->all(['sh'=>1,'club'=>0]," order by sort");
                            foreach($redus as $redu){
                            ?>
                            <div class="text"><?=$redu['text']?></div>
                            <?php
                            }
                            ?>
                        </div>


                        <div id="other">
                            <div class="bigTitle">其他經歷</div>
                            <?php

                            $redus=$R_edu->all(['sh'=>1,'club'=>2]," order by sort");
                            foreach($redus as $redu){
                            ?>
                            <div class="text"><?=$redu['text']?></div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <object class="vine" type="image/svg+xml" data="img/vine.svg"></object>
            <div class="modalClose" onclick="Cl(this)">
                <i class="fas fas fa-leaf" id="modalClose"
                    style="font-size:50px;color:#8f997e;transform: translate(30%, 35%);"></i>
            </div>
        </div>
    </header>
    <article>
        <div class="container-fluid" id="blog">
            <h1 style="text-align:center;"><a href="blog.php" class="blogtitle" style="text-decoration:none;">Blog</a>
            </h1>
            <?php
                // for($i=0;$i<3;$i++){
                $bgcount=$Blog->count(['new'=>1]);
                // echo $bgcount;
                // $blogs=$Blog->all(['new'=>1],"order by sort limit $i , 1");
                $blogs=$Blog->all(['new'=>1],"order by sort limit 0 , 3");
                foreach($blogs as $key => $blog){ 
                if($key%2==0){          
            ?>
            <div class="media">
                <div class="media-body">
                    <h5 class="mt-auto"><a  href="contain.php?id=<?=$blog['id']?>" class="blogtitle"
                            style="text-decoration:none;font-size:25px;"><?=$blog['title'];?></a></h5>
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
                            style="text-decoration:none;font-size:25px;"><?=$blog['title'];?></a></h5>
                    <?=mb_substr($blog['text'],0,150,'utf8');?>......
                </div>
            </div>
            <?php
        }
    }
        ?>
        </div>
        <div class="more"><a href="blog.php" class="blogtitle" style="text-decoration:none;color:">more...</a></div>
        </div>

        <br>
        <hr>
    </article>
    <main>
        <div class="container-fluid p-5" id="design">
            <h1 style="text-align:center;">Draw and Design</h1>
            <div class="card-deck">
                <?php
                        $Draw=new DB("myweb_draw");
                        $draws=$Draw->all(['sh'=>1],"order by sort ");
                        foreach($draws as $key => $idr){
                        ?>
                <div class="card bg-transparent" id="ssaa<?=$key?>">
                    <img src="img/<?=$idr['img']?>" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"><?=$idr['title']?></h5>
                        <p class="card-text"><?=$idr['text']?></p>
                    </div>
                </div>
                <?php
                }
?>
                <!-- <div class="card bg-transparent">
                    <img src="img/draw1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">以友善海洋與環境永續發展為形象，以藍綠色波浪為基底，打造出提醒人們愛護海洋生物的VIP卡片，讓人們在海邊衝浪之餘還能記得將垃圾帶回家。</p>
                    </div>
                </div>

                <div class="card bg-transparent">
                    <img src="https://picsum.photos/200/100" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional
                            content.</p>
                    </div>
                </div>

                <div class="card bg-transparent">
                    <img src="https://picsum.photos/200/100" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional
                            content. This card has even longer content than the first to show that equal height action.
                        </p>
                    </div>
                </div> -->

            </div>

            <div class="leafArrow"><i class="fas fas fa-leaf" id="leafLeft" onclick="pp(1)"></i>
                <i class="fas fas fa-leaf" id="leafRight" onclick="pp(2)"></i>
            </div>
        </div>
        <script>
        var nowpage = 0, //現在的頁數

            //計算被設定為要顯示的校園映像圖片數量
            num = <?=$Draw->count(['sh' => 1]); ?>; //圖片的數量
        function pp(x) {
            var s, t;
            if (x == 1 && nowpage - 1 >= 0) {
                nowpage--;
            }

            //素材的js程式有點小bug，建議略做修改如下
            if (x == 2 && nowpage + 1 <= num - 5) {
                nowpage++;
            }

            $(".card").hide()
            for (s = 0; s <= 2; s++) {
                t = s * 1 + nowpage * 3;
                $("#ssaa" + t).fadeIn()
            }
        }
        pp(1)
        </script>
    </main>
    <figure>

        <div class="container" id="WebDesign">
            <h1 style="text-align:center;">Web Design</h1>



            <!-- <div class="row" id="webRow"> -->
            <?php
                $Web=new DB('myweb_web');
                $webcount=$Web->count(['sh'=>1],"order by sort desc limit 6");
                $webds=$Web->all(['sh'=>1],"order by sort desc limit 6");
                for($i=0;$i<($webcount/3);$i++){
                    if($webcount>=1 || ($webcount>4 && $webcount%3 == 0)){
                    echo " <div class='row' id='webRow'>";
                }
                foreach($webds as $webd){
                    
            ?>
            <div>
                <div class="webDesign"><a href="<?=$webd['text']?>" class="webHr"><span class="tribg"></span>
                        <img class="webimg" src="./img/<?=$webd['img']?>" style="width:351px;height:351px;"></a></div>
                <p class="webtitle" style="text-align:center;font-size:20px;"><?=$webd['title']?></p>
            </div>
            <?php
                }
                echo"</div>";
            }
            ?>
            <!-- 
                <div>
                    <div class="webDesign"><a href="http://220.128.133.15/s1090418/calenderwork/" class="webHr"><span class="tribg"></span>
                            <img src="./img/calender.jpg" style="width:351px;height:351px;"></a></div>
                    <p class="webtitle" style="text-align:center;font-size:20px;">萬年曆</p>
                </div>

                <div>
                    <div class="webDesign"><a href="http://220.128.133.15/s1090418/invoicework/" class="webHr"><span class="tribg"></span>
                            <img src="./img/invoice.jpg"  style="width:351px;height:351px;"></a></div>
                    <p class="webtitle" style="text-align:center;font-size:20px;">發票兌獎系統</p>
                </div> -->

        </div>
    </figure>

    <footer>
        <div class="lastpg">
            <i class="fas fas fa-leaf" style="font-size:45px;color:#334426;"></i>
            <br>
            <p style="font-size: 14px;margin:0;text-align:center;">
                <?php
                $bt=$Bottom->find(1);
                echo nl2br($bt['bottom']);
            ?>
                <!-- copyright©WY Chen Resume<br>
        電話:0912-247-326<br>
        Email:waterfay0.0@gmail.com<br> -->
            </p>
            <div>
                <br>
                <a href="https://www.facebook.com/wy.chen.7923"><img src="img\fb.png" alt=""></a>
                <a href="https://www.instagram.com/zax_5600/"><img src="img\ig.png" alt=""></a>
                <a href="https://codepen.io/wy-chen"><img src="img\codepan.png" alt=""></a>
            </div>
        </div>
    </footer>
</body>

</html>

<script>
function op(obj) {
    $(".modal").slideToggle(1000)
    $(".vine").delay(1200).fadeIn(2500)
    $("#modalcontain").delay(1700).fadeIn(2000);
};

function Cl() {
    $(".modal").slideToggle(1000)
};

$(window).scroll(function() { //開始監聽滾動條
    var top = $(document).scrollTop(); //滾動條距離頂部的高度
    // console.log(top) //監聽滾動調高度
    console.log(top)
    if (top >= 260) {
        $("#blog").show(3500, "swing");
    }
    if (top >= 1010) {
        $("#design").fadeIn(2000, "easeInSine");
    }

    if (top >= 2000) {
        $(".modal").hide();
    }

})

$(window).resize(function() { //開始監聽視窗寬度
    var wdth = $(window).width();
    console.log(wdth) //視窗寬度
});

// $(window).scroll(function () {   //開始監聽滾動條
//   var top = $(document).scrollTop();  //滾動條距離頂部的高度
//   // console.log(top) //監聽滾動調高度
//   // if (top >= 250 ) {
//   //   clearInterval(top);
//   //   $(window).unbind("scroll");
//   // }
// })
</script>