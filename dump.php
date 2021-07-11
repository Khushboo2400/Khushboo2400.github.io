<?php
$a=5;
define("pi",3.14);
echo pi;
$b=$a++;
print $b."<br>".$a;
$count =0120;
 var_dump($count);
echo "<br>";
$num=120;
 var_dump($num);
$num1 = $count+120;
 var_dump($num1);
function add()
{
 ++$GLOBALS['a'];
echo "a=".$GLOBALS['a'];
}
add();
?>