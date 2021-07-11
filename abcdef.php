<?php
 $num=20;
 $tab=0;
echo"the mathematical table of ".$num."<br>";
echo"====================="."<br>" ;
for($count=1;$count<=10;$count++)
{
$tab=$num*$count;
echo $num."x".$count."=".$tab."<br>";
}
?>