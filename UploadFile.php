<html>
<?php
if((is_uploaded_file($_FILES['fileToUpload']['tmp_name'])) && ($_FILES['fileToUpload']['error'])==0)
{
echo " the file was uploaded successfully but has not been saved"."<br>";
echo "the file name was:".$_FILES['fileToUpload']['name']."<br>";
echo "the file type is:".$_FILES['fileToUpload']['type']."<br>";
echo "the file size is :".$_FILEs['fileToUplaod']['size']."<br>";
}
else
{
echo "The file was not uploaded successfully";
echo "Error code:".$_FILES['fileToUpload']['error'];
}
?>
</html>