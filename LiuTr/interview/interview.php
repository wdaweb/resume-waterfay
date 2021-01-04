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
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"></script>
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

    header {
      height: 840px;
    }

    article {
      height: 1000px;
      background: rgb(226, 230, 221);
      box-sizing: border-box;
      padding: 30px;
    }

    main {
      height: 900px;
      box-sizing: border-box;
      padding: 30px;
    }

    figure {
      width: 100%;
      height: 1050px;
      background: url("img/flower2.jpg") repeat;
      background-attachment: fixed;
      margin: 0;
    }

    footer {
      height: 225px;
      background: rgb(191, 202, 177);
    }
    .container {
        padding-top: 100px;
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
      top: 30vh;
      left: 20%;
      width: 575px;
      height: 375px;
      opacity: 90%;
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
      transform: translate(76%, 0%);
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
        transform: translate(74%, 0%);
        box-shadow: 5px -10px 3px 1px #00000024;
      }

      50% {
        transform: translate(70%, 0%);
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
      height: 950px;
      opacity: 85%;
      background: rgb(25, 96, 109);
      z-index: 1;
    }

    .flower {
      float: left;
      width: 500px;
      height: 630px;

    }

    .modalcontain {
      display: grid;
      grid-template-columns: 1fr 1fr 1fr;
      color: #b5f3ff;

    }

    .modalcontain1 {
      margin-top: 10px;
      margin-left: 10px;
      display: none;
      box-sizing: border-box;
      padding: 10px;
      z-index: 10;
    }

    .modalcontain2 {
      margin-top: 10px;
      margin-left: 10px;
      display: none;
      box-sizing: border-box;
      padding: 10px;
      z-index: 10;
    }

    ul {
      float: left;
      width: 600px;
    }

    li {
      list-style-type: circle;
    }

    .vine {
      top: 25vh;
      left: 20vw;
      display: none;
      position: absolute;
      width: 120%;
      height: 120vh;
      transform: scale(1.3, 1.2);
      transform-origin: bottom right;
      z-index: 2;
      /* display: grid; */
      /* align-items: center; */
      /* justify-content: right; */
    }

    .modalClose {
      border: 5px solid #8f997e;
      box-shadow: 0px 2px 7px 0px rgba(71, 77, 69, 0.5);
      position: absolute;
      top: 110vh;
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

    .leafArrow {
      font-size: 70px;
      position: absolute;
      left: 45%;
      color: #8f997e;

    }

    #leafLeft:hover {
      color: #334426;
      transition: all ease-in-out 0.5s;
    }

    #leafRight:hover {
      color: #334426;
      transition: all ease-in-out 0.5s;
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

    .webDesign {
      border: 5px solid #a1b67d70;
      border-radius: 50px;
      /* width: 350px;
      height: 350px; */
      overflow: hidden;
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
            <a class="nav-link" href="interview.html">Home <span class="sr-only">(current)</span></a>
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
        <a href="backend\main.php" style="text-decoration:none;color:white;"><button class="btn  btn-outline-light" type="button" >login</button></a>
      </div>
    </nav>
    <div class="space" id="Self-introduction" onclick="op(this)">
      <h3>Self-introduction</h3><br>
      <p>
      <?php
                $sf=$SelfIntroduction->find(1);
                echo $sf['text'];
            ?>
      </p>
      <br>
      <div class="arrow"></div>
    </div>
    <img src="./img/<?=$sf['img'];?>" style="float:right;height:780px;">
    <img src="./img/flower.jpg" class="flower" style="float:left;width:500px;height:630px;">
    <div class="wrap" style="background: url('img/<?=$sf['img'];?>') no-repeat bottom center / cover;text-align: left;font-size: 6rem;float: left;-webkit-text-fill-color: transparent;-webkit-background-clip: text;
      background-clip: text;">Self-introduction</div>
    <div class="modal">
      <div class="modalcontain">
        <div class="modalcontain1">
          <ul>
            <h4>學歷</h4>
            <ul>
              <li>國立台東大學--華語文學系(2011/9-2014/6)</li>
              <li>國立中興大學--歷史研究所(2015/9-2019/6)</li>
            </ul>
          </ul>

          <ul>
            <h4>工作經歷</h4>
            <ul>
              <h5>中正紀念堂研究典藏組實習－實習生（2012/7-2012/8)</h5>
              <li>黃克武主持，《海外蔣中正典藏資料研析》，系列出版書籍校對</li>
              <li>圖書編碼整理</li>
              <li>官方FB發文小編</li>
            </ul>
            <ul>
              <h5>國立臺東大學圖書館－看館工讀（2013/9-2014/6）</h5>
              <li>借還書、館際合作系統操作</li>
              <li>讀者服務</li>
            </ul>
            <ul>
              <h5>國立中興大學圖書館－美編工讀（2015/7-2017/12）</h5>
              <li>2015、2016年圖書館週主視覺設計</li>
              <li>2015圖書館主題牆面主視覺設計</li>
              <li>其他文宣商品設計</li>
              <li>官方FB發文小編</li>
              <li>活動創意發想</li>
            </ul>
            <ul>
              <h5>謬斯名人行銷－行銷企劃（2019/10-2019/12）</h5>
              <li>Blog文章撰寫</li>
              <li>市場調查</li>
              <li>線上線下活動發想</li>
            </ul>
            <ul>
              <h5>極酷衝浪俱樂部－美編行銷（2020/1-2020/8）</h5>
              <li>店鋪帆布設計、VIP卡片、課程海報、等文宣產品設計。</li>
              <li>官方FB發文小編經營，旺季時期增加約2000個讚數、IG增加200個追蹤人數、振興券活動宣傳。</li>
              <li>線上預約及訂房流程優化、利用manychat設計回覆對話、利用修改文案內容優化SEO。</li>
              <li>其他訂房相關例行事務。</li>
            </ul>
          </ul>
        </div>
        <div class="modalcontain2">
          <ul>
            <h4>社團經歷</h4>
            <ul>
              <h5>國立臺東大學－攝影社長（2012/9-2013/6）</h5>
              <li>參與J-love攝影團隊助理</li>
              <li>學期社團活動規劃與課程內容制定</li>
              <li>臺東大學運動會攝影股股長，負責規劃拍攝流程</li>
              <li>各社團活動合作洽談</li>
            </ul>
          </ul>
          <ul>
            <h4>技能</h4>
            <ul>
              <li>
                網頁設計－前端部分：能結合Boostrap、Html、CSS、Javascript、JQuery做網頁切版及物件按鈕設計。後端部分：能理解PHP、AJAX串聯SQL資料庫，做簡易的登入、註冊系統、資料上傳、下載、更新等。
              </li>
              <li>設計－Photoshop、Illustrate、krita，能夠結合向量圖、電腦繪圖、照片等多元素材整合做出不同平面設計作品。</li>
              <li>攝影－會運用單眼及機外閃、持續燈及其他設備採光環境配置等。</li>
              <li>網路行銷－修習行銷研究所廣告學課程、參與廣告主協會競賽、經營自媒體。</li>
              <li>手繪－在畫室學習10年，擅長風景水彩、色鉛筆。</li>
            </ul>
          </ul>
          <ul>
            <h4>其他經歷</h4>
            <ul>
              <li>久久點九整合行銷－接案小編</li>
              <li>《鴻飛射馬干－東大散文選》－合作出版著作</li>
              <li>歌林看見台灣之美－人氣獎第一名</li>
              <li>詠春新詩比賽－佳作</li>
            </ul>
          </ul>
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
    <div class="container" id="blog">
      <h1 style="text-align:center;">Blog</h1>
      <div class="media">
        <img src="https://picsum.photos/200/200" class="mr-3">
        <div class="media-body">
          <h5 class="mt-auto">自傳</h5>
          二十八年前，哭鬧聲伴隨著雨都簾纖，刺骨的葭月一個嬰兒呱呱墜地，我在這樣一個平凡的朝曦誕生，卻有著不太平凡的好奇心，從小時常擔任班級教室、聖誕活動的主要設計者。
          　　熱愛學習的我，非常喜歡閱讀許多課外書，國中時期部落格正流行著，我也跟隨著潮流走進了部落格，不僅記錄了自己許多青春的煩惱...
        </div>
      </div>
      <div class="media">
        <div class="media-body">
          <h5 class="mt-3 mb-3">葉子</h5>
          吹著薰風的平凡日子，恰巧平時所慣於待的咖啡廳都剛好休假，一個無法待在同一個地方寫作，就像即便多麼無趣的生活都得替它畫上一點色彩，
          我稱呼著自己為半個旅人吧！開始了半刻的流浪，儘管溽暑尚未入侵...
        </div>
        <img src="https://picsum.photos/200/200" class="ml-3">
      </div>
      <div class="media">
        <img src="https://picsum.photos/200/200" class="align-self-end mr-3">
        <div class="media-body">
          <h5 class="mt-1">新生代設計二三事──在經營上可能遇到的未來挑戰</h5>
          <p>在室內設計界，創業開立自己的工作室，是許多新生代的設計師的理想。
            大部分的人，擁有理想，卻不知道地圖從何畫起、從哪裡開始、中間會遇到什麼困難、
            及近年來市場變化，考驗著一位室內設計師──到老闆角色之間的轉換的彈性，以及對管理、人資、行銷、財務上可能遇上的困難...</p>
        </div>
      </div>
      <div class="more">more...</div>
    </div>

    <br>
    <hr>
  </article>
  <main>
    <div class="container" id="design">

      <h1 style="text-align:center;">Draw and Design</h1>
      <div class="card-deck" >
        <div class="card bg-transparent">
          <img src="img/draw1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
              content. This content is a little bit longer.</p>
          </div>
        </div>
        <div class="card bg-transparent">
          <img src="https://picsum.photos/200/100" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          </div>
        </div>
        <div class="card bg-transparent">
          <img src="https://picsum.photos/200/100" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
              content. This card has even longer content than the first to show that equal height action.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="leafArrow"><i class="fas fas fa-leaf" id="leafLeft"></i>
      <i class="fas fas fa-leaf" id="leafRight"></i>
    </div>
  </main>
  <figure>
    <div class="container" id="WebDesign" >
      <h1 style="text-align:center;">Web Design</h1>
      <div class="row">
      <div>
        <div class="webDesign"><img src="https://picsum.photos/350/350"></div>
        <p><i class="fas fas fa-leaf" style="font-size:30px;color:#334426;"></i>網頁1</p>
      </div>

      <div>
        <div class="webDesign"><img src="https://picsum.photos/350/350"></div>
        <p><i class="fas fas fa-leaf" style="font-size:30px;color:#334426;"></i>網頁1</p>
      </div>
      <div>
        <div class="webDesign"><img src="https://picsum.photos/350/350"></div>
        <p><i class="fas fas fa-leaf" style="font-size:30px;color:#334426;"></i>網頁1</p>
      </div>
      </div>
      <div class="row">
      <div>
        <div class="webDesign"><img src="https://picsum.photos/350/350"></div>
        <p><i class="fas fas fa-leaf" style="font-size:30px;color:#334426;"></i>網頁1</p>
      </div>
      <div>
        <div class="webDesign"><img src="https://picsum.photos/350/350"></div>
        <p><i class="fas fas fa-leaf" style="font-size:30px;color:#334426;"></i>網頁1</p>
      </div>
      <div>
        <div>
          <div class="webDesign"><img src="https://picsum.photos/350/350"></div>
          <p><i class="fas fas fa-leaf" style="font-size:30px;color:#334426;"></i>網頁1</p>
        </div>
      </div>
      </div>
    </div>
  </figure>

  <footer>
    <div class="lastpg">
      <i class="fas fas fa-leaf" style="font-size:45px;color:#334426;"></i>
      <br>
      <p style="font-size: 14px;margin:0;text-align:center;">
      <?php
                $bt=$Bottom->find(1);
                echo $bt['bottom'];
            ?>
        <!-- copyright©WY Chen Resume<br>
        電話:0912-247-326<br>
        Email:waterfay0.0@gmail.com<br> -->
      </p>
      <div>
        <img src="img\iconsfacebook.png" alt=""><img src="img\iconsinstagram.png" alt="">
      </div>
    </div>
  </footer>
</body>

</html>

<script>
  function op() {
    $(".modal").slideToggle(1000)
    $(".vine").delay(1200).fadeIn(2500)
    $(".modalcontain1").delay(1700).fadeIn(2000);
    $(".modalcontain2").delay(2200).fadeIn(2000);
  };
  function Cl() {
    $(".modal").slideToggle(1000)
  };

  $(window).scroll(function () {   //開始監聽滾動條
    var top = $(document).scrollTop();  //滾動條距離頂部的高度
    // console.log(top) //監聽滾動調高度
    console.log(top)
    if (top >= 260) {
      $("#blog").show(3500, "swing");
    }
    if (top >= 1010) {
      $("#design").fadeIn(2000, "easeInSine");
    }
    if (top >= 780) {
      $(".modal").hide();
    }
  })

  // $(window).scroll(function () {   //開始監聽滾動條
  //   var top = $(document).scrollTop();  //滾動條距離頂部的高度
  //   // console.log(top) //監聽滾動調高度
  //   // if (top >= 250 ) {
  //   //   clearInterval(top);
  //   //   $(window).unbind("scroll");
  //   // }
  // })

</script>