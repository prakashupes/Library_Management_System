<?php
require '../connection/connection.php';
if(isset($_POST))
{
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    $sql="SELECT user, password FROM user WHERE user='$user' AND password='$pass'";
    $res=$con->query($sql); //or die("Failed to connect");
    if($res->num_rows>0)
    {
        session_start();
        $_SESSION['user']=$user;
        header("location: userhomepage.php");
    }
    else
    {
        
        header("location: userlogin.html");
    }
}
?>
