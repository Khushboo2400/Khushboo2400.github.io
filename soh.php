<?php
$j=0;
$i=1;
echo $j."<br>";
for($l=0;$l<=10;$l++)
{
$k=$i+$j;
$i=$j;
$j=$k;
echo $k."<br>";
}
?>                                                    