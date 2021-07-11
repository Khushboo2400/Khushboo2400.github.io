<html><body>
<form enctype="multipart/form-data" method= "post"
action ="<?php echo $_REQUEST['PHP_SELF']; ?>">
choose a file <input type="file" name="filetoupload" >
<input type= submit value= "upload">
</form>
//<?php
if((is_uploaded_file($_FILES['filetoupload'])) && ($_FILES['filetoupload']['error']==0))
{
echo $_FILES['filetoupload']['name'];
}
?>
</body>
</html>