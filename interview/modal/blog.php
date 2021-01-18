<div class="mdb" style="z-index:9898 ;">
                <form action="../api/add.php" method="post" enctype="multipart/form-data">
                <span>標題：</span>
                <input type="text" name="title" style="width:300px;height:20px;"><br>
                <span>圖片：</span>
                <input type="file" name="img" ><br>
                <span style="">內容：</span>
                <textarea name="text" style="width:300px;height:50px;"></textarea>
                <br>
                <input type="hidden" name="table" value="<?=$_GET['table'];?>">
                <input type="submit" value="上傳"><input type="reset" value="重置">
                <form>
</div>