<?php

$users=[
    ['acc'=>'mack','pw'=>'1234','type'=>'vip'],
    ['acc'=>'judy','pw'=>'5678','type'=>'mem'],
    ['acc'=>'andy','pw'=>'9999','type'=>'vip']
];

if(!empty($_POST['acc']) && !empty($_POST['pw'])){
    $acc=$_POST['acc'];
    $pw=$_POST['pw'];
    $chk='';
    foreach($users as $user){
        if($user['acc']==$acc){
            $chk=$user;  
        }
    }

    if(!empty($chk)){
        if($chk['pw']==$pw){
            switch($chk['type']){
            case 'vip';
                header("location:vip.php?name={$chk['acc']}");
            break;
            case 'mem':
                header("location:mem.php?name={$chk['acc']}");
            break;
            }
        }else{
            header("location:error.php");
        }
    }else{
        header("location:error.php?eid=1");
    }

}else{
    header("location:login.html");
}

?>