


<?php
 session_start();
require '../connection/connection.php';
$name=$_SESSION['user'];
            $sql="select * from admin where user='$name'";
            $res=$con->query($sql);        
            //$total=$res->num_rows;
            //echo $total;
            $row=$res->fetch_assoc();
           // print_r($row);
            $id=$row['user'];
            $name=$row['name'];
            $mobile=$row['mobile'];
            $email=$row['email'];
            $address=$row['address1'];
            $city=$row['city'];
            $zip=$row['zip'];
            $country=$row['country'];
            $pass=$row['password'];
            
?>