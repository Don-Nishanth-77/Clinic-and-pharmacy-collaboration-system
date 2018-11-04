<!DOCTYPE html>

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
   	  	 <h1>Doctor Login</h1>
                 <form action="condoclog.php" method="POST">
   	  	   	<p>User-Id</p>
   	  	   	<input type="text" name="doc_id" placeholder="User-id">
   	  	   	 <p>Password</p>
   	  	   	  <input type="password" name="doc_pswd" placeholder="Password">
   	  	   	  <input type="submit" name="login" value="login">
   	  	   	  <a href="#">Forget Password</a>
                         
   	  	   	 
   	  	   </form>
   	  </div> 
    </body>
</html>
