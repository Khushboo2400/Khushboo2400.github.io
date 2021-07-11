<html>
<HEAD>
<?php
function signs() {
$start = 1901;
 $birthyear =$_POST['year'];
$date=$_POST['date'];
 $month=$_POST['month'];
if ($month == 1 && $date >=20 || $month == 2 && $date <=18) {$value = "Aquarius";}
else if ($month == 1 && $date > 31){$value ="Huh?";}
else if ($month == 2 && $date >=19 || $month == 3 && $date <=20){$value = "Pisces";}
else if ($month == 2 && $date > 29){$value = "Say what?";}
else if ($month == 3 && $date >=21 || $month == 4 && $date <=19) {$value = "Aries";}
else if ($month == 3 && $date > 31) {$value = "OK.  Whatever.";}
else if ($month == 4 && $date >=20 || $month == 5 && $date <=20) {$value = "Taurus";}
else if ($month == 4 && $date > 30) {$value = "I'm soooo sorry!";}
else if ($month == 5 && $date >=21 || $month == 6 && $date <=21) {$value = "Gemini";}
else if ($month == 5 && $date > 31) {$value = "Umm ... no.";}
else if ($month == 6 && $date >=22 || $month == 7 && $date <=22) {$value = "Cancer";}
else if ($month == 6 && $date > 30) {$value = "Sorry.";}
else if ($month == 7 && $date >=23 || $month == 8 && $date <=22) {$value = "Leo";}
else if ($month == 7 && $date > 31) {$value = "Excuse me?";}
else if ($month == 8 && $date >=23 || $month == 9 && $date <=22) {$value = "Virgo";}
else if ($month == 8 && $date > 31) {$value = "Yeah. Right.";}
else if ($month == 9 && $date >=23 || $month == 10 && $date <=22) {$value = "Libra";}
else if ($month == 9 && $date > 30) {$value = "Try Again.";}
else if ($month == 10 && $date >=23 || $month == 11 && $date <=21) {$value = "Scorpio";}
else if ($month == 10 && $date > 31) {$value = "Forget it!";}
else if ($month == 11 && $date >=22 || $month == 12 && $date <=21) {$value = "Sagittarius";}
else if ($month == 11 && $date > 30) {$value = "Invalid date";}
else if ($month == 12 && $date >=22 || $month == 1 && $date <=19) {$value = "Capricorn";}
else if ($month == 12 && $date >31) {$value = "No way!";}

$x = ($start - $birthyear)%12;

if ($x == 1 || $x == -11) {$value2 = "Rat";}
else if ($x == 0) {$value2 = "x";}
else if ($x == 11 || $x == -1) {$value2 = "Tiger";}
else if ($x == 10 || $x == -2) {$value2 = "Rabbit/Cat";}
else if ($x == 9 || $x == -3)  {$value2 = "Dragon";}
else if ($x == 8 || $x == -4)  {$value2 ="Snake";}
else if ($x == 7 || $x == -5)  {$value2 = "Horse";}
else if ($x == 6 || $x == -6)  {$value2 = "Sheep";}
else if ($x == 5 || $x == -7)  {$value2 = "Monkey";}
else if ($x == 4 || $x == -8)  {$value2 = "Cock/Phoenix";}
else if ($x == 3 || $x == -9)  {$value2 = "Dog";}
else if ($x == 2 || $x == -10)  {$value2 = "Boar";}  

$_POST['sign']=$value;
$_POST['csign']=$value2;
echo($_POST['sign']);
echo($_POST['csign']);
if(isset($_POST['submit']))
{
signs();

}
}
?>

</HEAD>
<body>

<form name="zodiac" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
<center>
<table bgcolor="#eeaa00" border="2" bordercolor="#000000" rules="none" cellspacing="0" cellpadding="4">
	<tr><td><b><i>Year</i></b></td>
	<td><div align="right"><input type="text" size="10" name="year" value="Birth Year" ></div></td>
	<td><!--This empty field is just for appearance--></td>
	<tr><td><b><i>month</i></b></td>
	<td><div align="right">
<select name="month">
<option value="x">Select Birth month</option>
<option value="1">January</option><option value="2">February</option><option value="3">March</option>
<option value="4">April</option><option value="5">May</option><option value="6">June</option>
<option value="7">July</option><option value="8">August</option><option value="9">September</option>
<option value="10">October</option><option value="11">November</option>
<option value="12">December</option></select></div></td>
	<td><!--This empty field is just for appearance--></td></tr>
	<tr><td><b><i>Day</i></b></td>
	<td><div align="right"><input type="text" name="date" value="Day" size="3"></td>
	<td><input type="submit" value="submit" name="submit"></div></td></tr>
	<tr><td><b><i>Sun Sign:</i></b></td>
	<td><div align="right"><input type="text" name="sign" size="12"  align="right" READ ONLY></div</td></tr>
	<td><!--This empty field is just for appearance--></td></tr>
	<tr><td><b><i>Chinese Sign:</i></b></td>
	<td><div align="right"><input type="text" name="csign" size="12" READ hONLY></div></td>
	<td><!--This empty field is just for appearance--></td></tr>

</table>
</center>
</form>


</body>
</html>