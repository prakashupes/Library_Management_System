<?php
session_start();
require '../connection/connection.php';
if(isset($_POST))
{
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    $sql="SELECT user, password FROM admin WHERE user='$user' AND password='$pass'";
    $res=$con->query($sql); //or die("Failed to connect");
    if($res->num_rows>0)
    {
        
        $_SESSION['user']=$user;
        header("location: adminhomepage.php");
    }
    else
    {
        
        header("location: adminlogin.php");
    }
}
?>
