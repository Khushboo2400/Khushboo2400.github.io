<html>
<head>
<title> form page</title>
<style>
.color{
    background-color: lightgrey;

    width: 400px;
    padding: 25px;
    margin-right: 400px;
margin-left: 400px;
margin-top: 100px;
align:center


transition:background 3s ease;
}
.color:hover
{
        background:yellow;
}

body {
    height: 90;
 color:blue;
    padding: 0; /* remove any pre-existing padding, just in case */
    padding-bottom: 100%; /* for a 4:3 aspect ratio */
    background-position: center center;
    background-size: 120%;
    background-repeat: no-repeat;
    background-color:white;
    <!--margin-right:200px;-->
    border-right:white;
   <!--margin-left:100px;-->
    border-left:white;

  background:url(horoscope123.jpg) repeat fixed;
  background-size: 100%;
background-attatchment:fixed;

    }
h3 {
font-family:lucida font;
color:sea green;
font-size:20;

}

h1 {
font-family:times new roman;
color:dodgerblue;
font-size:50;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;



</style>
<script language="javascript">
function a()
{
document.f1.name.value= document.f1.t1.value+"  "+document.f1.t2.value

}
function b()
{

result="Hello"+document.f1.t1.value+" "+"welcome to our website."+"You are a  "

if(document.f1.gender[0].selected)
{
result=result+"male"
}
if(document.f1.gender[1].selected)
{
result=result+"female"
}
alert(result)
}

function check()
{
if(document.f1.password.value==document.f1.t6.value)
{
alert("valid password")
}
else{
alert("Invalid password.The passwords don't match.Please re check  ")
}
}

</script>
<?php
function details()
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: ".$conn->connect_error);
}
$a=$_POST['name'];
$b=$_POST['gender'];
$c=$_POST['year']."-".$_POST['month']."-".$_POST['date'];
$d=$_POST['email'];
$e=$_POST['password'];

$sql="INSERT INTO details(name,gender,DOB,email,password) VALUES('.$a.','.$b.','.$c.','.$d.','.$e.')" ;
if($conn->query($sql)===TRUE)
    {
     echo "Record added successfully";
    }
     else
    {
     echo "error adding record:".$conn->error;
    }
$conn->close();
}
if(isset($_POST['submit']))
    {
    details();
    }

?> 

</head>
<body >
<ul>
<li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<li><a  class="active"  href="main.html" >Home</a></li>
<li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Astrology</a>
    <div class="dropdown-content">
      <a href="zodiac sign page.html">All about each zodiac sign</a>
      <a href=".html">Astology Facts</a>
<li class="dropdown">
<a href="javascript:void(0)" class="dropbtn">Numerology</a>
    <div class="dropdown-content">
     <a href=".html">Number Path Finder</a>
<a href="frame.html">Numeroscopy</a>
<li><a class="active" href="help.html">Contact Us</a></li>
<li><a class="active" href="about us.html">About Us</a></li>
<li><a class="active" href="front page form.html">Register</a></li>
</ul>
<center>
<form name=f1 method="post" action="<?php echo $_POST["PHP_SELF"];?>">
<h1><font color= "yellow" size="70"> <center>&nbsp&nbsp&nbsp&nbsp&nbspREGISTERATION FORM </center></font></h1>

<div class="color">
<table border=0  ><center>
<tr>
<td> <center> FIRST NAME:<input type= text name=t1 select="ENTER YOUR FIRST NAME" maxlength=20></center></tr>
<tr>
<td><center>  LAST NAME:<input type= text name=t2 select="ENTER YOUR LAST NAME" maxlength=20  onBlur="a()"></center>
<br>
<center><input type="text" name="name" ></center>

</tr>
<tr>
<td><center> <input type=radio name=gender value="male"  >MALE</center>
<tr>
<td><center> <input type=radio name=gender value="female" >FEMALE</center> </tr>
</tr>
<tr>
<td> <center> Date Of Birth<select name="date" onFocus="b()">
<option value = 01>01
<option value = 02>02
<option value =03>03
<option value =04>04
<option value =05>05
<option value =06>06
<option value =07>07
<option value =08>08
<option value =09>09
<option value =10>10
<option value =11>11
<option value =12>12
<option value =13>13
<option value =14>14
<option value =15>15
<option value =16>16
<option value =17>17
<option value =18>18
<option value =19>19
<option value =20>20
<option value =21>21
<option value =22>22
<option value =23>23
<option value =24>24
<option value =25>25
<option value =26>26
<option value =27>27
<option value =28>28
<option value =29>29
<option value =30>30
<option value =31>31
</center>
</tr>
<tr>
<td><center> 
 Month<select name="month">
<option value =01>January
<option value =02>February
<option value =03>March
<option value =04>April
<option value =05>May
<option value =06>June
<option value =07>July
<option value =08>August
<option value =09>September
<option value =10>October
<option value =11>November
<option value =12>December
</select></center>
</tr>
<tr>
<td><center> 
Year<input type=text name="year" size ="5" >
</center>
</tr>
<tr>
<td><center> EMAIL:<input type= "text" name="email" ></center>

</tr>
<br>
<br>
 <tr><td><center>  USERNAME: <input type=text name="username" select="ENTER USERNAME" maxlength=20></center></tr> 
<td> <center> PASSWORD: <input type=password name="password" select="PASSWORD" maxlength=20></center></tr>
<td> <center> CONFIRM PASSWORD: <input type="password" name=t6 select="CONFIRM PASSWORD" maxlength=20 onBlur="check()"></center></tr>


<tr>
<td>
By clicking register, you accept to our rules and regulations:
<input type="SUBMIT" name="submit" value="submit" >
<input type="RESET"  value="OOps!! want to reset?">
</tr>
</table></center>
</div>

</form>
</center>




</body>
</html>


