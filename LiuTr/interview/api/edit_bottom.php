<?php 
include_once '../base.php';
$Bottom=new DB('myweb_bottom');
$row=$Bottom->find(1);
if(isset($_POST['bottom'])){
$row['bottom']=$_POST['bottom'];
}

$Bottom->save($row);
// print_r ($Bottom);

to("../backend/main.php?do=bottom");

?>