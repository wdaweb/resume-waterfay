<h1>字串常用函式</h1>
<h3>substr/mb_substr</h3>
<?php

$str=" Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
Voluptatum facilis alias architecto ad necessitatibus recusandae vero dolore molestiae, 
quibusdam nihil hic itaque neque est in quaerat illum et iure totam.";

$substr=mb_substr($str,40,11);

echo $substr;

echo '<hr>';

$substr_from_tail=mb_substr($str,-13,7);

echo $substr_from_tail;

?>

<h1>去頭尾空白/重複字元</h1>
<h3>trim()</h3>
<h3>str_repeat()</h3>
<?php
echo str_repeat('leona',20);
echo "<br>";
echo str_repeat('*',10);

?>

<h1>字串取代</h1>
<h3>str_replace</h3>
<?php

$str_replace="12345";

$result=str_replace('lorem',$str_replace,$str);

echo $str;
echo "<br>";
echo $result;

?>
<h1>分割字串</h1>
<h3>explode()</h3>
<?php

$str_array=explode('dolor',$str);

echo "<pre>";
print_r($str_array);
echo "</pre>";

?>

<h1>尋找字串位置</h1>
<h3>strpos()</h3>
<?php
$target='consectetur';

echo strpos($str,$target);

?>

<h1>字串長度</h1>
<h3>strpos()</h3>
<?php

$mb_str='今天的天氣很chill';

echo strlen($mb_str);
echo "<br>";
echo mb_strlen($mb_str);
echo "<br>";

echo mb_substr($mb_str,0,4);

?>