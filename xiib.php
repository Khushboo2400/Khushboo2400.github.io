<html>
<?php
function sdetail()
{
$fp=fopen("student.txt","a+");
$Record=$_POST["fname"]." ".$_POST["stream"]." ".$_POST["p"];
fwrite($fp,$Record);
echo $Record."is written"."<br>";
fclose($fp);
}
if(isset($_POST["btnsubmit"]))
{
sdetail();
}
?>

<body><center><H1>STUDENT DETAILS</H1>
<form  method=post action="<?php $_SERVER["PHP_SELF"];?>">
NAME&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:<input type="text" name="fname"><BR>
PERCENTAGE :<input type="text" name="p"><BR>
STREAM<select name=stream><BR>
<option value =PCM>PCM
<option value=PCB>PCB
</select><BR>
<input type="submit" name="btnsubmit"></center>
</form>


</body>
</html>