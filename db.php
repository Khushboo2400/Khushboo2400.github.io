 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT rno,name1,marks from student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc())
 {
        echo "<b>rollno:</b> " . $row["rno"]. " <b>- Name:</b> " . $row["name1"]. " " ."<b>marks- </b>"." " . $row["marks"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?> 