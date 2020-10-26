<?php
$n=20;
$sum=0;
for($i=1;$i<=$n;$i++){
    $sum=$sum+$i;
    
}
echo '$n='.$n;
echo '<br>';
echo '"總和"'.$sum;

?>

<?php
$n=20;
$sum=0;
for($i=1;$i<=$n;$i++){
    if($i%2){
        $sum=$sum+$i;
    }
else{
        $sum=$sum-$i;
}
}
echo '$n='.$n;
echo '<br>';
echo '"總和"'.$sum;

?>

<h4>求費式數列</h4>
<?php

$n=9;

$pre=0;
$now=1;
for($i=0;$i<$n;$i++){
    $sum=$pre+$now;
    $pre=$now;
    $now=$sum;
    echo"位置".$i;
    echo"值:".$sum."<br>";
}


?>