<?php
 session_start();
 require '../connection/connection.php';
 $name=$_SESSION['user'];
 $admin=$name;
?>
<?php
    $sql="select * from book where count=1";
           
    $res=$con->query($sql);
    $total=$res->num_rows; 
    
    ?>
<html>
    <head>
        
        <link rel="stylesheet" type="text/css" href="../css/homepage.css">
        <link rel="stylesheet" type="text/css" href="../css/welcome.css">
        <link rel="stylesheet" type="text/css" href="../css/adminhome.css">
        <link rel="stylesheet" type="text/css" href="../css/userhome.css">
        <link rel="stylesheet" type="text/css" href="../css/commonforuser.css">
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
        <div class="center">
            <div id="c10001" style="height:100%; width: 95%;">
                <div class="codd" style="border-bottom: 1px solid #D4F3F7;">
                    <img src="../images/My-Seven-Books-1.ico" height="50px" width="50px" style="  ">
                    <label id="c0002" style="">LIBRARY MANAGEMENT SYSTEM</label> 
                    
                 </div>
                <div style="color:#071C1A; font-size: 30px; font-family:Georgia; position: absolute; top:40%;left: 35%">
                    
                <?php
                if($_POST)
                {
                    $book=$_POST['book'];
                    
                    $sql="UPDATE book SET count=0 where id='$book'";
                    
                    $sql1="select * from book where id='$book'";
                    $res=$con->query($sql1);
                    $row=$res->fetch_assoc();
                    
                    $author=$row['author'];
                    $title=$row['title'];
                    $user=$_SESSION['user'];
                    $sql2="INSERT INTO issuedbook values('$book','$user','$title','$author')";
                    
                    if($con->query($sql2))
                    {
                        echo 'Book Issued Successfully';
                        $con->query($sql);
                    }
                }
                ?>
               
                  </div>  
                    
                    
                </div>
            </div>
            
            
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