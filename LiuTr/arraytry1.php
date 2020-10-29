<?php
$a = array();
$a[0][0] = "a";
$a[0][1] = "b";
$a[1][0] = "y";
$a[1][1] = "z";

foreach ($a as $v1) {
    foreach ($v1 as $v2) {
        echo "$v2\n";
    }
}
foreach (array(1, 2, 3, 4, 5) as $v) {
    echo "$v\n";
}
?>

<hr>
<?php

$info = array('coffee', 'brown', 'caffeine');

// Listing all the variables
list($drink, $color, $power) = $info;
echo "$drink is $color and $power makes it special.\n";

// Listing some of them
list($drink, , $power) = $info;
echo "$drink has $power.\n";

// Or let's skip to only the third one
list( , , $power) = $info;
echo "I need $power!\n";

// list() doesn't work with strings
list($bar) = "abcde";
var_dump($bar); // NULL
?>

<hr>

<?php

list($a, list($b, $c)) = array(1, array(2, 3));

var_dump($a, $b, $c);

?>

<hr>
<?php
$data = [
    ["id" => 1, "name" => 'Tom'],
    ["id" => 2, "name" => 'Fred'],
];
foreach ($data as ["id" => $id, "name" => $name]) {
    echo "id: $id, name: $name\n";
}
echo PHP_EOL;
list(1 => $second, 3 => $fourth) = [1, 2, 3, 4];
echo "$second, $fourth\n";
?>
<hr>
<?php
$a = array(0, "str1", "str2", "str3");
echo "
str1 = ".array_search("str1", $a).",
str2 = ".array_search("str2", $a).",
str3 = ".array_search("str3", $a).",

str1 strict = ".array_search("str1", $a, true).",
str2 strict = ".array_search("str2", $a, true).",
str3 strict = ".array_search("str3", $a, true);
?>