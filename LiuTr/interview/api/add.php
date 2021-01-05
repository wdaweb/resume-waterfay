<?php
switch($table){
    case "blog":
        $data['text']=$_POST['text'];
        $data['sh']=0;
    break;
    case "draw":
        $data['text']=$_POST['text'];
        $data['sh']=0;
    break;
    case "web":
        $data['sh']=0;
    break;
}

?>