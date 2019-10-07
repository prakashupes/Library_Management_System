<?php
 session_start();
require '../connection/connection.php';
?>
<html>
    <head>
        
        <link rel="stylesheet" type="text/css" href="../css/homepage.css">
        <link rel="stylesheet" type="text/css" href="../css/adminhome.css">
        
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
            #h0002
            {
                position: absolute;
                top:10px;
                
                
            }
            #h0003
            {
                position: absolute;
                top:5px;
                color: #fff;
                font-family: Helvetica;
                font-size: 15px;
                text-decoration: none;
               
            }
            #c0002
            {
                font-size: 170%;
                font-family: Helvetica;
                color:#3F4B4B;
                position: absolute;
                top:11px;
                left: 60px;
                
            }
            #c0003
            {
                
                top:20%;
                width: 100%
            }
            #c0004
            {
              
                top:27%px;
                width: 100%
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
            <div id="c10001">
                <div class="c1000011">
                    <img src="../images/My-Seven-Books-1.ico" height="50px" width="50px" style="  ">
                    <label id="c0002" style="">LIBRARY MANAGEMENT SYSTEM</label> 
                 </div>
                
                <div class="c1000012" style="top:13% ">
                <label style="position: absolute;top:15% ">
                    Total Members :
                    <?php
                      $sql="select * from user";
                      $res=$con->query($sql);
                      echo $res->num_rows;
                     ?>
                    
                </label>
                
                
            </div>
            
            <div class="c1000012" style="top:23% ">
                
                <label style="position: absolute;top:15% ">
                    Total Books :
                     <?php
                      $sql="select * from book";
                      $res=$con->query($sql);
                      echo $res->num_rows;
                     ?>
                    
                </label>
                
            </div >
            <div class="c1000012" style="top:33% ">
                
                <label style="position: absolute;top:15% ">
                    Total Issued Book :
                    
                    
                </label>
                
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

