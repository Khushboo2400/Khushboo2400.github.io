<html>
<head>
<title>hello</title>
</head>
<body>
<h1><b>LETS BEGIN </b></h1>
<form name="form1" method="get" action="<?php echo $_SERVER["PHP_SELF"];?>">
NAME: <input type="text" name="text1">
AGE: <input type="text" name="text2">
<input type ="submit" name="button" value="send it">
</form>
<?php
function display()
{
echo "Your name is: ".$_GET["text1"]."<br>";
echo "Your age is: ".$_GET["text2"]."<br>";
}
if (isset($_GET["button"]))
{
display();
} 
?>
</body>
</html>