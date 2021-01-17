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
    <input type="button" onclick="op('#cover','.modal','../modal/resume-m.php')" value="新增">

    </div>
    <div class="container bottom" style="border:0.5px solid white">
            <div class="row" >
            <div class="col col-8" style="border:0.5px solid white">內容</div>
            <div class="col col-4" style="border:0.5px solid white">管理</div>
            </div>

            <div class="row align-items-center" id="opts">
            <?php
                $rms=$R_edu->all([],"order by club ,sort");
            foreach($rms as $rm){
                $isChk = ($rm['sh'] == 1) ? 'checked' : '';
                    ?>
            <form method="post" action="../api/edit_resume_m.php">
            <div class="row align-items-center py-1">
            <div class="col col-8 py-3" style="text-align:center"><textarea name="text" style="width:550px;height:50px;"><?=$rm['text'];?></textarea></div>
            <div class="col col-4 " style="text-align:center">
            排序：<input type="text" name="sort" value="<?=$rm['sort'];?>"style="width:30px;height:20px;">
            分類：<select name="club" value="<?=$rm['club'];?>">
            <option value="0" <?php if($rm['club']==0) echo 'selected';?>>skill</option>
            <option value="1" <?php if($rm['club']==1) echo 'selected';?>>edu</option>
            <option value="2" <?php if($rm['club']==2) echo 'selected';?>>other</option>
            </select><hr>
            顯示：<input type="checkbox" name="sh"  value="<?=$rm['id'];?>" <?=$isChk;?>>
            刪除：<input type="checkbox" name="del" value="<?=$rm['id'];?>">
            <input type="hidden" name="id" value="<?=$rm['id'];?>">
            <hr>
            <input type="submit" value="修改確定"><input type="reset" value="重置">
            
            </div>
            </div>
            </form>
            <?php
            }
            ?>


        </div>

    </div>


</body>
</html>
