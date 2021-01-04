<?php

include_once "../base.php";

?>
    <!--不一定會用到-->
    <style>
        .container .bottom{
            width: 800px;
            height: 300px;
            /* display: flex;
            justify-content: center;
            align-items: center; */

            transform: translate(0%,10%);
        }
    </style>
</head>  

<body>
<?php 
                        $sf=$SelfIntroduction->find(1);
                    ?>
            <div class="container bottom" style="border:0.5px solid white">
            <div class="row" >
            <div class="col col-12">大頭照</div>
            <div><img src='img/<?=$sf['img'];?>' style="width:300px;height:30px"></div>
            <form  action="../api/edit_selfIntroduction.php" method="post" enctype="multipart/form-data">
            檔案：<input type="file" name="img" ><br>

            </div>
            <form method="post" action="../api/edit_bottom.php">
            <div class="row align-items-center">
            <div class="col col-12">自我介紹簡介</div>
            <input type="text" name="text" style="width:500px;height:100px;" value="<?=$sf['text'];?>">
            <input type="submit" value="更新">
            <input type="reset" value="重置">
            </div>
            </form>
            </div>
        </div>
    </div>
</body>
</html>