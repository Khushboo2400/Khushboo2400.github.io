<?php
$fp=fopen("stu.txt","r");
$i=0;
while(!feof($fp))
{
$a=fgets($fp,255);
if($a!="")
{
$i++;
}
}
echo " lines are ".$i;
fclose($fp);
?>
