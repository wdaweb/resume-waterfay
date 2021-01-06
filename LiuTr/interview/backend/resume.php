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
<?php 
                        $sf=$SelfIntroduction->find(1);
                    ?>
            <div class="container bottom" style="border:0.5px solid white">
            <div class="col col-12"  style="text-align:center;">履歷表管理
            <hr>
            <div  class="col col-12">大標<textarea name="title[]" style="width:500px;height:30px;"><?=$sf['text'];?></textarea>
            顯示<input type="checkbox">刪除<input type="checkbox"></div>
            <div  class="col col-12">小標<textarea name="text[]" style="width:500px;height:30px;"><?=$sf['text'];?></textarea>
            顯示<input type="checkbox">刪除<input type="checkbox"></div>
            <div  class="col col-12">內容<textarea name="li[]" style="width:500px;height:30px;"><?=$sf['text'];?></textarea>
            顯示<input type="checkbox">刪除<input type="checkbox"></div>
            <div  class="col col-12"><input type="submit" value="更新">
            <input type="reset" value="重置"></div>
            </form>
            </div>
            </div>
        </div>
    </div>
</body>
</html>