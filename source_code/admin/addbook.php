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
           .userinput
           {
               position: absolute;
               width: 300px;
               height: 35px;
               font-family: Bookman;
               font-size: 20px;
               left: 0%;
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
                <div style="position:absolute; top:4px; left:5%; font-family: Bookman;font-size: 20px; color: #195058"> Fill Detail of Book </div>
                <form action="addbookvalidate.php" method="POST">
                    <input type="text" name="id" class="userinput" placeholder="Book ID" style="top:8%" autocomplete="off">
                    
                    <input type="text" name="isbn" class="userinput" placeholder="ISBN" style="top:15%">
                    <input type="text" name="title" class="userinput" placeholder="Title" style="top:22%">
                    <input type="text" name="author" class="userinput" placeholder="Author" style="top:29%">
                    <input type="text" name="price" class="userinput" placeholder="price" style="top:36%">
                    <select class="userinput" name="branch" style="top:43%">
                        
                        <option>Computer Science Engineering</option>
                        <option>Electronics and Communication Engineering</option>
                        <option>Electrical engineering</option>
                        <option>Mechanical Engineering</option>
                        <option>Civil Engineering</option>
                        <option>Information Technology Engineering</option>
                        <option>Chemical Engineering</option>
                        <option>Aeronautical Engineering</option>
                        <option>Other</option>
                        
                    </select>
                    <select class="userinput" name="category" style="top:50%">
                        <option>Course Book</option>
                        <option>Novel</option>
                        <option>GATE</option>
                        <option>Other</option>
                        
                    </select>
                    <input type="submit" value="AddBook" style="top:57%" class="userinput" style="cursor: pointer" id="submit0001">
                       
                    
                    
                    
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

