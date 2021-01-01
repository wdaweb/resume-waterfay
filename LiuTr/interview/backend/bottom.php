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
            <div class="container bottom" style="background:blue;">
            <div class="row">
            <div class="col col-6" style="background:blue;">頁尾版權頁</div>
            <div class="col col-6" style="background:yellow;">編輯版權頁</div>
            </div>
            <div class="row">
            <?php 
                        $bt=$Bottom->find(1);
                    ?>
            <div class="col col-6" style="background:blue;"><input type="text" ame="bottom" value="<?=$bt['bottom'];?>"></div>
            <div class="col col-6" style="background:yellow;"><input type="submit" value="修改確定"><input type="reset" value="重置"></div>
            </div>
            </div>
        </div>
    </div>
</body>
</html>