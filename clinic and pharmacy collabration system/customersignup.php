
<html>
    <head>
        <meta charset="UTF-8">
        <title>Singup page</title>
        <link rel="stylesheet" type="text/css" href="maincss.css">
  
   
            
           <style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Set a style for all buttons */
button,submit{
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: #474e5d;
    padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
    background-color:#cccccc;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
    position: absolute;
    right: 35px;
    top: 15px;
    font-size: 40px;
    font-weight: bold;
    color: #f1f1f1;
}

.close:hover,
.close:focus {
    color: #f44336;
    cursor: pointer;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 100px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}

</style>
    </head>
<body>



<!--<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign Up</button>-->

<!--<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>-->
<form class="modal-content" action="" method="POST">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <label for="Name"><b>Name</b></label>
      <input type="text" placeholder="Enter Name" name="Name" required>
      <label for="gender"><b>Male</b></label>
      <input type="radio" value="Male" name="gender" required>
      <label for="gender"><b>Female</b></label>
      <input type="radio" value="Female" name="gender" required><br><br>
      <label for="address"><b>Address</b></label>
      <textarea name="address" placeholder="Address"  rows="5" cols="30" required></textarea><br><br>
      <label for="email"><b>Email</b></label>    
      <input type="text" placeholder="Enter Email" name="email" required>
      <label for="cell"><b>Cell-No</b></label>
      <input type="number" placeholder="Enter Cell-No" name="cell" required><br><br>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
          <button type="button" onclick="location.href = 'Home1.php';" class="cancelbtn" id="can">Cancel</button>
          <button type="submit" class="signupbtn" name="signin">Sign Up</button>
          
      </div>
    </div>
  </form>
</div>



</body>
</html>

     
  
       
  <?php
 $servername = "localhost";
$username = "root";
$password = "loginDON";
$dbname="clinic_nd_phrmcy_coll_system";
$port="8000";
$conn = mysqli_connect($servername, $username, $password, $dbname, $port);
if(!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST["signin"])){
   
 $res = mysqli_query($conn,"insert into customerdetail (cus_name,gender,address,email,cell,password) values('$_POST[Name]','$_POST[gender]','$_POST[address]','$_POST[email]',$_POST[cell],'$_POST[psw]')");
 if($res==1){
 header("Location: cuslogin.php");}
   if(!$res){
       echo mysqli_error($conn);
   }
  }
 
 
?>
