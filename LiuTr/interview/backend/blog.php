<?php

include_once "../base.php";

?>
    <!--不一定會用到-->
    <style>
        .container .bottom{
            width: 800px;
            height: 600px;
            overflow:auto;
            /* display: flex;
            justify-content: center;
            align-items: center; */

            transform: translate(0%,5%);
        }
    </style>
</head>  

<body>
            <div class="container bottom" style="border:0.5px solid white">
            <div class="row" >
            <div class="col col-2" style="border:0.5px solid white">標題</div>
            <div class="col col-2" style="border:0.5px solid white">圖片</div>
            <div class="col col-4" style="border:0.5px solid white">文章內容</div>
            <div class="col col-4" style="border:0.5px solid white">管理</div>
            </div>
            <form method="post" action="../api/edit_bottom.php">
            <div class="row align-items-center">
            <?php 
                        $bt=$Bottom->find(1);
                    ?>
            <div class="col col-2" style="border:0.5px solid white"><textarea name="bottom" style="width:100px;height:100px;"><?=$bt['bottom'];?></textarea></div>
            <div class="col col-2" style="border:0.5px solid white"><img src='../img/<?=$sf['img'];?>' style="width:100px;height:100px"></div>
            <div class="col col-4 py-3" style="text-align:center"><textarea name="bottom" style="width:250px;height:100px;"><?=$bt['bottom'];?></textarea></div>
            <div class="col col-4" style="text-align:center">排序：<input type="text" value=""style="width:150px;height:30px;"><hr><input type="submit" value="修改確定"><input type="reset" value="重置"></div>
            </div>
            </form>
            </div>
        </div>
    </div>
</body>
</html>