<?php
function add()
{
$sum=0;
echo "THE FIRST 10 NATURAL NUMBERS ARE:"."<BR>";
for($i=1;$i<=10;$i++)
{
echo "$i"."<br>";
$sum = $sum + $i;
}
echo "AND THEIR SUM IS "."<B>".$sum."</B>";
}
add();
?>