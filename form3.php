<html>
    <head>
    <title>data entry form</title>
    </head>
    <?php
    function details()
    {
    $username = "root";
    $password = "";
    
    
    try{
    $conn = new PDO('mysql:host=localhost;dbname=details',$username,$password);
    $stm="INSERT INTO SD(ROLLNO,SNAME,DOB,SEX,EMAIL) VALUES(:troll,:tname,:tdob,:tsex,:temail);" ;
    $sql= $conn->prepare($stm);
    $inst=$sql->execute(array(
    ":troll"=>$_POST['rollno'],
    ":tname"=>$_POST['name'],
    ":tdob"=>$_POST['dob'],
    ":tsex"=>$_POST['sex'],
    ":temail"=>$_POST['emailid']));
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
    <body>
    <h2>ENTER STUDENT DETAILS</H2>
    <hr>
    <font size ="4" face="comic sans ms">
    <form name="f" method="post" action="<?php echo $_POST["PHP SELF"];?>" >
    Roll no. : <input type= "text" name="rollno" size=5><br>
    Name: <input type ="text " name="name"><br>
    Date of birth :<input type="text" name="dob" size ="10"><br>
    Sex:<input type="text" name="sex" size="5"><br>
    E-Mail:<input type="text" name="emailid" size="25"><br>
    <input type="submit" name="btnSubmit" id="btnSubmit" value="submit" ><br>
    </form>
    
    </body>
    </html> 