<html>
<head>
<title> form page</title>
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
    $username = "root";
    $password = "";
    $dob= $_POST['year']."-".$_POST['month']."-".$_POST['date'];
    try{
    $conn = new PDO('mysql:host=localhost;dbname=form',$username,$password);
    $stm="INSERT INTO details(name,gender,DOB,email,password) VALUES(:tname,:tgender,:tdob,:temail,:tpassword);" ;
    $sql= $conn->prepare($stm);
    $inst=$sql->execute(array(
    ":tname"=>$_POST['name'],
    ":tgender"=>$_POST['gender'],
    ":tdob"=>$dob,
    ":temail"=>$_POST['email'],
    ":tpassword"=>$_POST['password']));
    echo "New records created successfully";
    } 
    catch(PDOException $e)
    {
    echo $e->getMessage();
    }
    }

    if(isset($_POST['btnSubmit']))
    {
    details();
    }

  ?>
</head>
<body >
<form name=f1 method="post" action="<?php echo $_POST["PHP_SELF"];?>">
<h1><font color= "red" size="70"> <center>&nbsp&nbsp&nbsp&nbsp&nbspREGISTERATION FORM </center></font></h1>

<div class="color">
<table border=0  ><center>
<tr>
<td> <center> FIRST NAME:<input type= text name=t1 select="ENTER YOUR FIRST NAME" maxlength=20></center></tr>
<tr>
<td><center>  LAST NAME:<input type= text name=t2 select="ENTER YOUR LAST NAME" maxlength=20  onBlur="a()"></center>
<br>
<center><input type="text" name=name ></center>

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
<td><center> EMAIL:<input type= text name=email ></center>

</tr>
<br>
<br>
 <tr><td><center>  USERNAME: <input type=text name=username select="ENTER USERNAME" maxlength=20></center></tr> 
<td> <center> PASSWORD: <input type=password name=password select="PASSWORD" maxlength=20></center></tr>
<td> <center> CONFIRM PASSWORD: <input type=password name=t6 select="CONFIRM PASSWORD" maxlength=20 onBlur="check()"></center></tr>


<tr>
<td>
By clicking register, you accept to our rules and regulations:
<input type="SUBMIT"value="REGISTER" >
<input type="RESET"  value="OOps!! want to reset?">
</tr>
</table></center>
</div>




</body>
</html>