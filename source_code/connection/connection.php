<?php
$server="localhost";
$user="root";
$pass="";
$db="lms";
$con=new mysqli($server,$user,$pass,$db);
if(!$con)
{
    die("Connection Failed !!");
}

        
?>

