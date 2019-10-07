<?php
session_start();
require '../connection/connection.php';

?>
<html>
    <head>
        
        <link rel="stylesheet" type="text/css" href="../css/homepage.css">
        <link rel="stylesheet" type="text/css" href="../css/adminhome.css">
        <link rel="stylesheet" type="text/css" href="../css/formerror.css">

        <script type="text/javascript" src="../javascript/validate.js"></script>
        
        <style>
             #h0001
            {
                position: absolute;
                color: #fff;
                font-family: Helvetica;
                font-size: 30px;
                top:5px;
                left:25px;
            }
           .userinput
           {
               position: absolute;
               width: 250px;
               height: 25px;
               font-family: Bookman;
               font-size: 15px;
               left: 8%;
           }
           #form001
           {
               position: absolute;
               height: 100%;
               left: 10%;
               width: 100%;
               background: white;
                   
               
           }
            #submit0001
           {
               background: rgba(16,56,63,0.6);
               color: black;
           }
           
        </style>
    </head>
    <body>
        <div class="header">
            <div class="headereleent" style="left: 0px; background: rgba(4,33,40,0.4);">
                <label id="h0001">Library</label> 
                
            </div>
            <div class="headereleent" style="left:15%">
                
                <a href="adminhomepage.php" id="h0002"><img src="../icons/home-solid.svg" width="25px" height="25px" style=""></a>
                
            </div>
            <!--
            <div class="headereleent" style="right:0%">
                <a href="" id="h0003">
                    <img src="../icons/power-off-solid.svg" width="20px" height="20px" style="margin: 5px">
                </a>
                
                
                
            </div>
            -->
        </div>
        <div class="center">
            
            <div id="form001">
                <div style="position:absolute; top:4px; left:5%; font-family: Bookman;font-size: 20px; color: #195058"> Fill Detail of User </div>
                <form action="adduservalidate.php" method="POST" onsubmit="return validate()">
                    <br><br><span style="color:red">(* stands for required field)</span>
                    <br><br>
                    <label class="formelement">User:</label><input type="text" name="user" class="userinput" placeholder="username"  autocomplete="off" id="user">
                    <label id="error1" class="errorlabel" >*</label>
                    <br><br>
                    
                    <label class="formelement">Password:</label><input type="password" name="pass" class="userinput" placeholder="password"  id="pass"><br><br>
                    <label class="formelement">Confirm:</label><input type="password" name="pass" class="userinput" placeholder="Confirm password" id="conpass">
                    <label id="error2" class="errorlabel" >*</label><br><br>

                    <label class="formelement">Email:</label><input type="email" name="email" class="userinput" placeholder="Email"  id="email">
                    <label id="error3" class="errorlabel" >*</label><br><br>
                    
                    <label class="formelement">First:</label><input type="text" name="fname" class="userinput" placeholder="First Name"  id="fname">
                    <label id="error4" class="errorlabel" >*</label><br><br>
                    <label class="formelement">Middle:</label><input type="text" name="mname" class="userinput" placeholder="Middle Name"  ><br><br>
                    
                    <label class="formelement">Last:</label><input type="text" name="lname" class="userinput" placeholder="Last Name"  id="lname">
                    <label id="error5" class="errorlabel" >*</label><br><br>
                    
                    <label class="formelement">Mobile:</label><input type="text" name="mobile" class="userinput" placeholder="mobile" maxlength="10"  id="mobile">
                    <label id="error6" class="errorlabel" >*</label>
                    <br><br>
                    
                     <label class="formelement">Address:</label><textarea class="userinput" rows="2" cols="30" name="address"></textarea><br><br>
                    <label class="formelement">City:</label><input type="text" name="city" class="userinput" placeholder="City"  ><br><br>
                    <label class="formelement">Country:</label>
                    <select   class="userinput" name="country">
                            <option>INDIA</option>
                            <option>USA</option>
                            <option>UK</option>
                            <option>AUS</option>
                            <option>ITLY</option>
                            
                        </select>
                    
                    <br><br>
                   
                    
                    <input type="submit" value="Adduser"  class="userinput" style="cursor: pointer" id="submit0001">
                    <br><br>
                       
                    
                    
                    
                </form>
                
                
                
                
            </div>
                
        </div>
        
            
            
        </div>
        <div class="left" style="background: rgba(4,33,40,0.9);">
            <div id="L001" style="margin-left:0;background: rgba(4,33,40,0.9);position: absolute; height: 75px; width:100%   ">
                <img src="../icons/user-solid.svg" width="50px" height="50px"> 
                <label style="position: absolute; top:12px; font-family: Helvetica; font-size: 15px; color:#EEFDFC;left:75px" >
                    <?php
                        
                        echo 'WELCOME<br>'.$_SESSION['user'];

                        ?>
                </label>
                
            </div>
            <div class="leftElement" style="background: rgba(15,43,41,0.8); left:0; top:11.9%; height: 30px">
                <label style="position: absolute; top:4px; left: 25%">Menu Bar</label>
                
                
            </div>
            <div class="leftElement" style="top:20%;" >
                <img src="../icons/user-solid.svg" width="20px" height="20px" style="margin: 5px ">
                <a href="profile.php">profile</a>
            </div>
            <div class="leftElement" style="top:27%; ">
                <img src="../icons/home-solid.svg" width="20px" height="20px" style="margin: 5px">
                <a href="adminhomepage.php">HOME</a>
            </div>
            <div class="leftElement" style="top:34%;" >
                <img src="../icons/book-solid.svg" width="20px" height="20px" style="margin: 5px">
                <a href="addbook.php">Add Books</a>
            </div>
            <div class="leftElement" style="top:41%; ">
                <img src="../icons/bars-solid.svg" width="20px" height="20px" style="margin: 5px">
                <a href="category.php">Category</a>
            </div>
            <div class="leftElement" style="top:48%;">
                <img src="../icons/user-plus-solid.svg" width="20px" height="20px" style="margin: 5px">
                <a href="adduser.php">Add Users</a>
            </div>
            <div class="leftElement" style="top:55%;">
                <img src="../icons/user-cog-solid.svg" width="20px" height="20px" style="margin: 5px">
                <a href="manageuser.php">Manage Users</a>
            </div>
            <div class="leftElement" style="top:62%; ">
                <img src="../icons/about.svg" width="20px" height="20px" style="margin: 5px">
                <a href="about.php">About</a>
            </div>
            <div class="leftElement" style="top:69%; ">
                <img src="../icons/sign-out-alt-solid.svg" width="20px" height="20px" style="margin: 5px">
                <a href="logout.php">Logout</a>
            </div>
            
                
        </div>
    </body>
    
</html>

