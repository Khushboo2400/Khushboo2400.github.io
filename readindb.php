<?php
$servername="localhost";
$username="root";
$password="";
$dbname="form";
$conn= new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
die("unable to connect".$conn->connect_error);
}
$sql="select name,gender,DOB,email,password from details;";
if($conn->query($sql)===true)
{
while($row==mysql_fetch_array($sql))
{
echo $row['name']."<br>";
echo $row['gender']."<br>";
$a=$row['DOB'];
$b=date_create($a);
echo date_format($b,"d-m-Y")."<br>";
echo $row['email']."<br>"; 
echo $row['password']."<br>";
}
}
else {
echo $conn->connect_error;
}
$conn-close;
?>