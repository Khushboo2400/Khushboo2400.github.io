 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "details";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: ".$conn->connect_error);
}
$sql = "SELECT ROLLNO,SNAME,DOB,SEX,EMAIL FROM SD";
echo"132";
if ($conn->query($sql) === TRUE) {
   While($row = mysql_fetch_array($sql)){
 echo $row['rollno']."<br>";
 echo $row['name']."<br>";
 echo $row['dob']."<br>";
 echo $row['sex']."<br>";
 echo $row['emailid']."<br>";
}
}
 else {
    echo "Error displaying record: " . $conn->error;
}

$conn->close();
?> 