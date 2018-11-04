<!--< ?php
    session_start();
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Expires: Sat, 26 Jan 1997 05:00:00 GMT");        
    if(!isset($_SESSION['user'])){
        header("Location:Home1.html");
    exit();
    }
?>-->
    
<!DOCTYPE html>
<html>
    <head>
        <title>Customer Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="signlogin.css">
         <link rel="stylesheet" type="text/css" href="maincss.css">
    </head>
    <body>
           <div class="topnav" id="nav">
                
               <a href="Home1.php">Home</a>
                <a href="docdetail.php">Doctors Detail</a>
                <a href="cuslogin.php">Login</a>
                <a href="customersignup.php">Sign Up</a>
                <a href="aboutus.html">About Us</a>
            </div><br><br>
       <div class="loginbox">
           <img src="logpat.png" class="avatar">
   	  	 <h1>Patient Login</h1>
                 <form action="Connectivity.php" method="post">
   	  	   	<p>E-Mail</p>
   	  	   	<input type="text" name="email" placeholder="Enter Name">
   	  	   	 <p>Password</p>
   	  	   	  <input type="password" name="password" placeholder="Password">
   	  	   	  <input type="submit" name="login" value="login">
   	  	   	  <a href="#">Forget Password</a>
                         
   	  	   	 
   	  	   </form>
   	  </div> 
                  
    </body>
</html>
<!--
< ?php
session_start();
include './db.php';
$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME,DB_PORT)or die(mysql_error());
if(!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['login'])){
  $_SESSION['email'];
   $query = "SELECT * FROM customerdetail WHERE email='".$_POST['email']."' AND password='".$_POST['password']."'";
   
   $sql=$conn->query($query);
   $n=$sql->num_rows;
   if($n>0)
   {
      
       header("Location:Home1.html");
       echo SESSION['email'];
   }
   else {
       echo 'INCORRECT ID AND PASSWORD';
   }
}
 */
   
?> 

-->