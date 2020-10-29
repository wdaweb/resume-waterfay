<?php
$str='aaddw1123';
echo str_repeat('*',strlen($str));
?>
<hr>
<?php
$str='this,is,a,book';

$str_array=explode(',',$str);

echo "<pre>";
print_r($str_array);
echo "</pre>";

?>
<hr>

<?php
echo implode('&nbsp;',explode(',',$str));
?>

<?php

$mb_str='The reason why a great man is great is that he resolves to be a great man';
echo substr($mb_str,0,10);
?>
