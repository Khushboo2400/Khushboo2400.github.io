<html>
<?php
 echo "<H1>TEXT FILE</H1><BR>"."THE CONTENT IS:"."<BR>";
 $File = "student.txt";
 $fp = fopen($File,"r");
 if(!($fp))
{ 
exit ("unable to open file,$listFile.");
}
else
 {
 $buffer = fread($fp,filesize($File));
    echo "$buffer<BR>\n";
 }
fclose($fp)
?>
</html>
