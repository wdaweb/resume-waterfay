<?php

include_once "../base.php";

?>
    <!--不一定會用到-->
    <style>
        .container .bottom{
            width: 800px;
            height: 160px;
            /* display: flex;
            justify-content: center;
            align-items: center; */

            transform: translate(0%,30%);
        }
    </style>
</head>  

<body>
            <div class="container bottom" style="border:0.5px solid white">
            <div class="row" >
            <div class="col col-8" style="border:0.5px solid white">頁尾版權頁</div>
            <div class="col col-4" style="border:0.5px solid white">管理</div>
            </div>
            <form method="post" action="../api/edit_bottom.php">
            <div class="row align-items-center">
            <?php 
                        $bt=$Bottom->find(1);
                    ?>
            <div class="col col-8 py-3" style="text-align:center"><textarea name="bottom" style="width:500px;height:100px;"><?=$bt['bottom'];?></textarea></div>
            <div class="col col-4" style="text-align:center"><input type="submit" value="修改確定"><input type="reset" value="重置"></div>
            </div>
            </form>
            </div>
        </div>
    </div>
</body>
</html>
