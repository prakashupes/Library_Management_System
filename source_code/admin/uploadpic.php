<?php
 session_start();

$name=$_SESSION['user'];

if(isset($_POST['upload']))
{
    $tar= "../upload/".$name.".jpeg";
    $name=$_FILES['image']['name'];
    //$sql="INSERT into image values ('$name','admin')";
    //$con->query($sql);
    if(move_uploaded_file($_FILES['image']['tmp_name'], $tar))
    {
        echo 'successfully updated';
        header("location: profile.php");
    }
    else
    {
        echo 'Problem!!';
    }
}
$admin="abc.jpeg";
?>
<html>
    
    <body>
        <form  method="post" enctype="multipart/form-data">
    Select image to upload:<br><br>
    <input type="file" name="image" id="fileToUpload"><br><br>
    <input type="submit" value="Change Photo" name="upload">
        </form>
        
    </body>
    
</html>