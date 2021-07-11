<html>
<?php
 $file = student.txt;
 $fp = fopen($file,"r");
 if(!($fp))
{
exit ("unable to open file");
}
else
 {
  $buffer = fread($fp,filesize($file));

    echo "$buffer<br>";
 }
?>
</html>
