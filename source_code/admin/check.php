<?php
require '../connection/connection.php';
if(isset($_POST['upload']))
{
    $tar= "../upload/"."adinnn".".jpeg";
    $name=$_FILES['image']['name'];
    //$sql="INSERT into image values ('$name','admin')";
    //$con->query($sql);
    if(move_uploaded_file($_FILES['image']['tmp_name'], $tar))
    {
        echo 'successfully updated';
    }
    else
    {
        echo 'Poblem!!';
    }
}
$admin="abc.jpeg";
?>
<html>
    
    <body>
        <form  method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="image" id="fileToUpload">
    <input type="submit" value="Upload Image" name="upload">
        </form>
        
    </body>
    
    <?php echo "<img src=\"../upload/".$admin."\" width=\"100px\" height=\"100px\" radius=\"2px\" style=\" border-radius: 50%;\"> ";?>
</html>