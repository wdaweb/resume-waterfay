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

            transform: translate(0%,5%);
        }
    </style>
</head>  

<body>
<?php 
                        $rimg=$R_img->find(1);
                    ?>
            <div class="container bottom" style="border:0.5px solid white">
            <div class="col col-12"  style="text-align:center">大頭照</div>
            <div  class="col col-12"  style="text-align:center"><img src='../img/<?=$rimg['img'];?>' style="width:275px;height:300px">
            <form  action="../api/edit_resume_img.php" method="post" enctype="multipart/form-data">
            <input type="file" name="img" ><br>
            <br>
            
            <div  class="col col-12"><input type="submit" value="更新">
            <input type="reset" value="重置"></div>
            </form>
            </div>
        </div>
    </div>
</body>
</html>