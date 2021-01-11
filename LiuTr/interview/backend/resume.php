<?php

include_once "../base.php";

?>
    <!--不一定會用到-->
    <style>
        .container .bottom{
            width: 800px;
            height: 600px;
            overflow-y:auto;
            /* display: flex;
            justify-content: center;
            align-items: center; */

            transform: translate(0%,1%);
        }

.modal{
            
            position: absolute;
            top: 55px;
            width: 50%;
            height: 600px;
            opacity: 85%;
            background: rgb(25, 96, 109);
            z-index: 10;
            color:white;
            left:25%;
            right:25%;
            
        }
.mdb{
            padding:100px;
        }
        #cover
{
	width:100%;
	height:100%;
    position:fixed;
	z-index:5;
	background:rgba(51,51,51,0.4);
	top:0px;
	left:0px;
	overflow:auto;
}
    </style>
</head>  
<body>
    <div class="container d-flex justify-content-end py-3">


    <?php

    $webs=$Web->all([],"order by sort");
    ?>
    <input type="button" onclick="op('#cover','.modal','../modal/web.php')" value="新增">
    </div>
            <div class="container bottom" style="border:0.5px solid white">
            <div class="row" >
            <div class="col col-8" style="border:0.5px solid white">網址</div>
            <div class="col col-4" style="border:0.5px solid white">管理</div>
            </div>
            <?php

            foreach($webs as $web){
                $isChk = ($web['sh'] == 1) ? 'checked' : '';
                    ?>
            <form method="post" action="../api/edit_web.php">
            <div class="row align-items-center">
            <div class="col col-8 py-3" style="text-align:center"><textarea name="text" style="width:500px;height:50px;"><?=$web['text'];?></textarea></div>
            <div class="col col-4" style="text-align:center">
            排序：<input type="text" name="sort" value="<?=$web['sort'];?>"style="width:30px;height:20px;"><hr>
            顯示：<input type="checkbox" name="sh"  value="<?=$web['id'];?>" <?=$isChk;?>>
            刪除：<input type="checkbox" name="del" value="<?=$web['id'];?>">
            <input type="hidden" name="id" value="<?=$web['id'];?>">
            <input type="hidden" name="img" value="<?=$web['img'];?>">


            <hr>
            <input type="submit" value="修改確定"><input type="reset" value="重置"></div>
            </div>
            </form>
            <?php
            }
            ?>
            </div>

        </div>
    </div>
    </form>

</body>
</html>
