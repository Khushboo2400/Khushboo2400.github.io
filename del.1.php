 <?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="test";
    $conn= new mysqli($servername,$username,$password,$dbname);

    if($conn->connect_error)
    {
     die("connection failed:".$conn->connect_error);
    }
     $sql="DELETE from student where rno='5'";
     if($conn->query($sql)===TRUE)
    {
     echo "Record deleted successfully";
    }
     else
    {
     echo "error deleting record:".$conn->error;
    }
     $conn->close();
    ?>





