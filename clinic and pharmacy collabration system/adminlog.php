<!DOCTYPE html>

<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Doctor login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="signlogin.css">
        
    </head>
    <body>
        
               <div class="loginbox">
   	  	<img src="doc.png" class="avatar">
   	  	 <h1>Admin Login</h1>
                 <form action="adminconn.php" method="POST">
   	  	   	<p>ADMIN-ID</p>
   	  	   	<input type="text" name="ad_id" placeholder="ADMIN-ID">
   	  	   	 <p>Password</p>
   	  	   	  <input type="password" name="ad_pswd" placeholder="Security code">
   	  	   	  <input type="submit" name="login" value="login">
   	  	   	  <a href="#">Forget Password</a>
                         
   	  	   	 
   	  	   </form>
   	  </div> 
    </body>
</html>
