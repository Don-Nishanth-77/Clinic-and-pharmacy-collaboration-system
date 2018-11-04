<!DOCTYPE html>
<?php
session_start();
 $adid=$_SESSION['adid'];
 $name=$_SESSION['adname'];
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin Home</title>
        <link rel="stylesheet" type="text/css" href="signlogin.css">
               <link rel="stylesheet" type="text/css" href="maincss.css">   
    </head>
    <body>
        
         <div class="topnav" id="nav">
                
             <a href="adminhome.php">Home</a>
                <a href="mngdoc.php">Manage Doctors </a>
                <a href="mngpat.php">Manage Patients</a>
                <a href="mngphar.php">Manage Pharmacists</a>
                 
                <a href="logout.php">Logout</a>
             </div> 
    <br><br><center><div id="red">Welcome Admin</div><?php echo $name?></center>
    </body>
</html>
