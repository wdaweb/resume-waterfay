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
<!-- <div id="cover" style="display:none;">
        <div class="modal" style="text-align:left;display:none;">
                <div class="modlecloss" onclick="Cl(this)" style="float:right;padding:10px;">X</div>
                <div class="mdb">
                <form action="api/add.php" method="post" enctype="multipart/form-data">
                <span>標題：</span>
                <input type="text" style="width:300px;height:20px;"><br>
                <span>圖片：</span>
                <input type="file" name="img" ><br>
                <span style="">內容：</span>
                <textarea name="bottom" style="width:300px;height:50px;"><?=$dw['text'];?></textarea>
                <br>
                <input type="submit" value="上傳"><input type="reset" value="重置">
                <form>
                </div>
    　　　　</div> -->
    <!-- </div> -->
    <div class="container d-flex justify-content-end py-3">


    <?php
    $table=$do;
    $db=new DB($table);
    $total = $db->count();
    $num = 5;
    $pages = ceil($total / $num);
    $now = (!empty($_GET['p'])) ? $_GET['p'] : 1;
    $start = ($now - 1) * $num;
    $dws=$db->all([],"order by sort limit $start , $num");
    ?>
    <input type="button" onclick="op('#cover','.modal','../modal/draw.php?table=<?=$table;?>')" value="新增">
    <input type="hidden" name="table" value="<?=$table;?>">
    </div>
            <div class="container bottom" style="border:0.5px solid white">
            <div class="row" >
            <div class="col col-2" style="border:0.5px solid white">標題</div>
            <div class="col col-3" style="border:0.5px solid white">圖片</div>
            <div class="col col-3" style="border:0.5px solid white">內容</div>
            <div class="col col-4" style="border:0.5px solid white">管理</div>
            </div>
            <?php

            foreach($dws as $dw){
                $isChk = ($dw['sh'] == 1) ? 'checked' : '';
                    ?>
                <form method="post" action="../api/edit.php">
            <div class="row align-items-center">

            <div class="col col-2"><textarea name="title" style="width:100px;height:200px;"><?=$dw['title'];?></textarea></div>
            <div class="col col-3" ><img src='../img/<?=$dw['img'];?>' style="width:180px;height:130px"></div>
            <div class="col col-3 py-3" style="text-align:center"><textarea name="text" style="width:150px;height:200px;"><?=$dw['text'];?></textarea></div>
            <div class="col col-4" style="text-align:center">
            排序：<input type="text" name="sort" value="<?=$dw['sort'];?>"style="width:30px;height:20px;"><hr>
            顯示：<input type="checkbox" name="sh"  value="<?=$dw['id'];?>" <?=$isChk;?>>
            刪除：<input type="checkbox" name="del" value="<?=$dw['id'];?>">
            <input type="hidden" name="id" value="<?=$dw['id'];?>">
            <input type="hidden" name="img" value="<?=$dw['img'];?>">
            <input type="hidden" name="table" value="<?=$table;?>">

            <hr>
            <input type="submit" value="修改確定"><input type="reset" value="重置"></div>
            </div>
            </form>
            <?php
            }
            ?>
            </div>

        </div>
        <nav aria-label="Page navigation example ">
            <ul class="pagination justify-content-center mt-5">
        <?php
                if (($now - 1) > 0) {
            ?>
             <li class="page-item">
            <a class="page-link bg-success" aria-label="Previous" style="text-decoration:none;color:white;" href="?do=<?=$table;?>&p=<?=($now - 1);?>">
            <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
            <?php } ?>
            <?php
                for ($i = 1; $i <= $pages; $i++) {
            ?>
                <li class="page-item "><a class="page-link bg-success" style="text-decoration:none;color:white;" href="?do=<?=$table;?>&p=<?=$i;?>"><?=$i;?></a></li>
            <?php } ?>
            <?php
                if (($now + 1) <= $pages) {
            ?>
            <li class="page-item ">
                <a class="page-link bg-success" style="text-decoration:none;color:white;"  href="?do=<?=$table;?>&p=<?=($now + 1);?>">
                <span aria-hidden="true">&raquo;</span>
            </a>
                </li>
            <?php } ?>
            </ul>
        </nav>
    </div>
    </form>

</body>
</html>
