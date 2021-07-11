<html>
<body>
<font color=blue face='Comic Sans Ms' size='5pt'> TEXT FILE </font><br>
<?php
$file="student.txt";
$fp=fopen($file,"r");
rewind($fp);
echo "<H4>FILE CONTENT</H4>";
echo "<br>";
while(!feof($fp))
{
$studentline=fgets($fp,255);
if($studentline!="")
echo $studentline."<br>";
}
fclose($fp);
?>
</body>

</html>