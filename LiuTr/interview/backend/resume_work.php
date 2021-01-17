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
    <input type="button" onclick="op('#cover','.modal','../modal/resume_work.php')" value="新增">

    </div>
    <div class="container bottom" style="border:0.5px solid white">
            <div class="row" >
            <div class="col col-8" style="border:0.5px solid white">內容</div>
            <div class="col col-4" style="border:0.5px solid white">管理</div>
            </div>

            <div class="row align-items-center" id="opts">
            <?php
                $wks=$Work->all([],"order by club ,sort");
            foreach($wks as $wk){
                $isChk = ($wk['sh'] == 1) ? 'checked' : '';
                $isChk1 = ($wk['title'] == 1) ? 'checked' : '';
                    ?>
            <form method="post" action="../api/edit_resume_work.php">
            <div class="row align-items-center py-1">
            <div class="col col-8 py-3" style="text-align:center"><textarea name="text" style="width:550px;height:50px;"><?=$wk['text'];?></textarea></div>
            <div class="col col-4 " style="text-align:center">
            排序：<input type="text" name="sort" value="<?=$wk['sort'];?>"style="width:30px;height:20px;">
            分類：<select name="club" value="<?=$wk['club'];?>">
            <option value="0" <?php if($wk['club']==0) echo 'selected';?>>標題1</option>
            <option value="1" <?php if($wk['club']==1) echo 'selected';?>>標題2</option>
            <option value="2" <?php if($wk['club']==2) echo 'selected';?>>標題3</option>
            <option value="3" <?php if($wk['club']==3) echo 'selected';?>>標題4</option>
            <option value="4" <?php if($wk['club']==4) echo 'selected';?>>標題5</option>
            </select><hr>
            顯示：<input type="checkbox" name="sh"  value="<?=$wk['id'];?>" <?=$isChk;?>>
            標題：<input type="checkbox" name="title"  value="<?=$wk['id'];?>" <?=$isChk1;?>>
            刪除：<input type="checkbox" name="del" value="<?=$wk['id'];?>">
            <input type="hidden" name="id" value="<?=$wk['id'];?>">
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
