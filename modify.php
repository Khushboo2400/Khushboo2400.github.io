<html>
<body>
<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="test";
$conn= new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
die("connection failed".$conn->connect_error);
}
$sql="UPDATE STUDENT SET name1='SIM' WHERE rno='1'";
if($conn->query($sql)===TRUE)
{
echo "record updated successfully";
}
else
{
echo "error updating record:".$conn->error;
}
$conn->close();
?>
</body>
</html>