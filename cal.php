<html>
<?php
function add($a,$b)
{
$d=$a+$b;
echo "the sum is: ".$d;
}
function subtract($a,$b)
{
$d= $a-$b;
echo "the difference is: ".$d;
}
function mult($a,$b)
{
$d= $a*$b;
echo "the product is: ".$d;
}
function divide($a,$b)
{
$d= $a/$b;
echo "the quotient is: ".$d;
}
$x= $_GET["t1"];
$y= $_GET["t2"];
if(isset($_GET["+"]))
{
add($x,$y);
}
else if(isset($_GET["-"]))
{
subtract($x,$y);
}
if(isset($_GET["*"]))
{
mult($x,$y);
}
if(isset($_GET["/"]))
{
divide($x,$y);
}

?>
<form method="get" action ="<?php $SERVER["PHP_SELF"]; ?>">
<center><input type="text" name="t1" size="20">
<input type="text" name="t2" size="20"><br>
<input type="submit" name="+" value="+">
<input type="submit" name="-" value="-">
<input type="submit" name="*" value="*">
<input type="submit" name="/" value="/"></center>
</form>
<body bgcolor="red">
</body>
</html>