<?php
 session_start();
require '../connection/connection.php';
$name=$_SESSION['user'];

 $admin=$name;
            $sql="select * from user where user='$name'";
            $res=$con->query($sql);        
            //$total=$res->num_rows;
            //echo $total;
            $row=$res->fetch_assoc();
           // print_r($row);
            $id=$row['user'];
            $name=$row['first'];
            $mname=$row['middle'];
            $lname=$row['last'];
            $mobile=$row['mobile'];
            $email=$row['email'];
            $address=$row['address'];
            $city=$row['city'];
           
            $country=$row['country'];
            $pass=$row['password'];
            
?>
<html>
    <head>
        
        <link rel="stylesheet" type="text/css" href="../css/homepage.css">
        <link rel="stylesheet" type="text/css" href="../css/welcome.css">
        <link rel="stylesheet" type="text/css" href="../css/adminhome.css">
        
        <link rel="stylesheet" type="text/css" href="../css/userhome.css">
        <link rel="stylesheet" type="text/css" href="../css/commonforuser.css">
         <link rel="stylesheet" type="text/css" href="../css/profile.css">
        
        <style>
            
            
            
        </style>
    </head>
    <body>
        <div class="header">
            <div class="headereleent" style="left: 0px; background: rgba(4,33,40,0.4);">
                <label id="h0001">Library</label> 
                
            </div>
            <div class="headereleent" style="left:15%">
                
                <a href="userhomepage.php" id="h0002"><img src="../icons/home-solid.svg" width="25px" height="25px" style=""></a>
                
            </div>
            <!--
            <div class="headereleent" style="right:0%">
                <a href="" id="h0003">
                    <img src="../icons/power-off-solid.svg" width="20px" height="20px" style="margin: 5px">
                </a>
                
                
                
            </div>
            -->
        </div>
        
        <div class="editprofile" style="font-size:15px">
          
            <form method="post" action="confirmedituserprofile.php">
                <div >ID:<label class="editform"><input type="text" name="pass" placeholder="<?php echo $id?>"readonly></label>
                <span style="color: red; position: absolute;left:30%;font-family: Courier New">(*id can't be change)</span><br>

                </div><br>
                <div >First:<label class="editform"><input type="text" name="name" placeholder="<?php echo $name?>"></label></div><br>
                <div >Middle:<label class="editform"><input type="text" name="mname" placeholder="<?php echo $mname?>"></label></div><br>
                <div >Last:<label class="editform"><input type="text" name="lname" placeholder="<?php echo $lname?>"></label></div><br>

                <div >Old Pass:<label class="editform"><input type="text" name="" placeholder="<?php echo $pass?>" readonly></label></div><br>
                
                <div >New Pass:<label class="editform"><input type="password" name="pass" ></label></div><br>
                
                <div >Mobile:<label class="editform"><input type="text" name="mobile" placeholder="<?php echo $mobile?>"></label></div><br>
                <div >Email:<label class="editform"><input type="text" name="email" placeholder="<?php echo $email?>"></label></div><br>
                <div >Address:<label class="editform"><textarea rows="2" cols="30" name="address" placeholder="<?php echo $address?>"></textarea></label></div><br><br><br>
                <div >City:<label class="editform"><input type="text" name="city" placeholder="<?php echo $city?>"></label></div><br>
                <div >Country:<label class="editform">
                        <select  name="country">
                            <option>INDIA</option>
                            <option>USA</option>
                            <option>UK</option>
                            <option>AUS</option>
                            <option>ITLY</option>
                            
                        </select>
                        
                    
                    </label></div><br><br>
                <input type="submit" value="update" name="submit" style="text-decoration: none; color:D4F3F7; background: #195058; font-family:Helvetica;font-size:15px; height: 32px;">
                
                
                
            </form>
           
           
        </div>
        
        <div class="left" style="background: rgba(4,33,40,0.9);">
            <div id="L001" style="margin-left:0;background: rgba(4,33,40,0.9);position: absolute; height: 75px; width:100%   ">
                    <?php echo "<img src=\"../upload/".$admin.".jpeg\" width=\"50px\" height=\"50px\"  style=\" border-radius: 50%;\" alt=\"Upload pofile pic\"> ";?>
                <label style="position: absolute; top:12px; font-family: Helvetica; font-size: 15px; color:#EEFDFC;left:75px" ><?php
                       
                        echo 'WELCOME<br>'.$_SESSION['user'];

                        ?>
                </label>
                
            </div>
            <div class="leftElement" style="background: rgba(15,43,41,0.8); left:0; top:11.9%; height: 30px">
                <label style="position: absolute; top:4px; left: 25%">Menu Bar</label>
                
                
            </div>
            <div class="leftElement" style="top:20%;" >
                <img src="../icons/user-solid.svg" width="20px" height="20px" style="margin: 5px ">
                <a href="userprofile.php">profile</a>
            </div>
            <div class="leftElement" style="top:27%; ">
                <img src="../icons/home-solid.svg" width="20px" height="20px" style="margin: 5px">
                <a href="userhomepage.php">HOME</a>
            </div>
            <div class="leftElement" style="top:34%;" >
                <img src="../icons/book-solid.svg" width="20px" height="20px" style="margin: 5px">
                <a href="books.php">Books</a>
            </div>
            <div class="leftElement" style="top:41%; ">
                <img src="../icons/bars-solid.svg" width="20px" height="20px" style="margin: 5px">
                <a href="usercategory.php">Category</a>
            </div>
            <div class="leftElement" style="top:48%;">
                <img src="../icons/address-book-solid.svg" width="20px" height="20px" style="margin: 5px">
                <a href="bookissue.php">Books Issue</a>
            </div>
            <div class="leftElement" style="top:55%; ">
                <img src="../icons/about.svg" width="20px" height="20px" style="margin: 5px">
                <a href="about.php">About</a>
            </div>
            <div class="leftElement" style="top:62%; ">
                <img src="../icons/sign-out-alt-solid.svg" width="20px" height="20px" style="margin: 5px">
                <a href="userlogout.php">Logout</a>
            </div>
            
                
        </div>
        
    </body>
    
</html>

