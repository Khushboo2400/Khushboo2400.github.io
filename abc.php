<html>
<body>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
First no. <INPUT TYPE="text" NAME="t1"><br>
Second no. <INPUT TYPE="text" NAME="t2"><br>
<INPUT TYPE="SUBMIT" VALUE="Calculate" id="bt">
</form>
</body>
<?php
function abc()
{
$a=intval($_POST ['t1']);
$b=intval($_POST ['t2']);
$c=$a+$b;
echo $c;
}
if(isset($_POST['bt']));
abc();
?>
</html>