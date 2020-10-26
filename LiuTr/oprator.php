<h2>運算子</h2>
<hr>
<h3>一元運算子</h3>
<?php
// ture1 false 無
$a=true;
echo !$a;
?>

<h5>++</h5>
<?php

$a=10;

// $a=$a+1
$a++;

echo $a;

?>
<hr>
<h3>二元運算子</h3>
<?php
$a=15;
$b=20;
$c=$a+$b;
echo $c;

?>

<h5>%</h5>
<?php

$a=17;
$b=5;

echo $a%$b;

?>

<hr>
<h3>三元運算子</h3>
<h5>?:</h5>
<?php

$a=40;

?>
<pre>
if($a>=60){
    echo"及格";
}
else{
    echo"不及格";
}
</pre>
<pre>
    echo ($a>=60)?"及格":"不及格";
</pre>
<?php

echo($a>=60)?"及格":"不及格";

?>



