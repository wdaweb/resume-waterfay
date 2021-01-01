<?php

include_once "../base.php";

?>
    <!--不一定會用到-->
    <style>
        .login{
            width: 1000px;
            height: 500px;
            display: flex;
            justify-content: center;
            align-items: center;
            transform: translate(-5%,-20%);
        }
    </style>
</head>

<body>
            <div class="container login">
            <form>
                帳號：<input type="text" name="acc" id="acc"><br>
                密碼：<input type="text" name="pw" id="pw"><br>
                    <input type="submit" value="確認" onclick="login()">
                <input type="reset" value="清除">
            </form>
            </div>
        </div>
    </div>
</body>
</html>
<script>

    function login(){
        let acc=$("#acc").val();
        let pw=$("#pw").val();

        if(acc=="" || pw==""){
        alert("帳號及密碼欄位不可為空白")
    }
        $.post("../api/chk.php",{acc,pw},function(res){
            if(res==1){
                alert("登入成功")
                location.href="main.php"
            }else{
                alert("帳號或密碼錯誤")
                location.reload();
            }
            })
        }
</script>

