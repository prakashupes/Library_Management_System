<?php
 session_start();
require '../connection/connection.php';

            
?>
<html>
    <head>
        
        <link rel="stylesheet" type="text/css" href="../css/homepage.css">
        <link rel="stylesheet" type="text/css" href="../css/adminhome.css">
        <link rel="stylesheet" type="text/css" href="../css/commonforuser.css">
        
       
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
        <div class="about" style="z-index: 10000;position: absolute;left:15%;top:0%;background: black;width: 100%;height: 100%;color: green;font-family: Courier New">
            <p style="font-size: 25px">Project: Library Management System</p>
            <div style="position: absolute; left:10px;">
            <p>
                -Developed By:Prakash Tiwari<br>
                This project is developed for college Major project. <br>Our aim to design this project is to maintain books of library.<br>
                Data Based Used: MySQL<br>
                Server Used: Apache<br>
                Software Used: Xaamp<br>
                © 2019 - Major project,Library Management System<br>
            </p>
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

            
