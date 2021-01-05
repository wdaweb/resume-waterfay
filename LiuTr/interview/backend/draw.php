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
            <!-- <input type="button" onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;../modal/draw.php&#39;)" value="新增圖片"> -->
            <div class="row" >
            <div class="col col-2" style="border:0.5px solid white">標題</div>
            <div class="col col-3" style="border:0.5px solid white">圖片</div>
            <div class="col col-3" style="border:0.5px solid white">內容</div>
            <div class="col col-4" style="border:0.5px solid white">管理</div>
            </div>
            <form method="post" action="../api/edit_bottom.php">
            <div class="row align-items-center">
            <?php 
            $dws=$Draw->all();
            foreach($dws as $dw){
                $isChk = ($dw['sh'] == 1) ? 'checked' : '';
                    ?>
            <div class="col col-2"><textarea name="bottom" style="width:100px;height:200px;"><?=$dw['title'];?></textarea></div>
            <div class="col col-3" ><img src='../img/<?=$dw['img'];?>' style="width:180px;height:130px"></div>
            <div class="col col-3 py-3" style="text-align:center"><textarea name="bottom" style="width:150px;height:200px;"><?=$dw['text'];?></textarea></div>
            <div class="col col-4" style="text-align:center">
            排序：<input type="text" value="<?=$dw['sh'];?>"style="width:30px;height:20px;"><hr>
            顯示：<input type="checkbox" value="<?=$dw['id'];?>" <?=$isChk;?>>
            刪除：<input type="checkbox" value="<?=$dw['id'];?>">
            <input type="hidden" name="id[]" value="<?=$dw['id'];?>">
            <input type="submit" value="修改確定"><input type="reset" value="重置"></div>
            </div>
            <?php
            }
            ?>
            </form>
            </div>
        </div>
    </div>

</body>
</html>