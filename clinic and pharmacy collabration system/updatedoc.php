<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="maincss.css">
           <link rel="stylesheet" href="font-awesome.min_1.css">
    </head>
    <body>
        <div class="topnav" id="nav">
                
             <a href="adminhome.php">Home</a>
                <a href="mngdoc.php">Manage Doctors </a>
                <a href="mngpat.php">Manage Patients</a>
                <a href="mngphar.php">Manage Pharmacists</a>
                 
                <a href="logout.php">Logout</a></div>
        <br><br>
        <form action=" " method="POST">
    <label>Doctor Id :
         &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="text" name="doc_id" required><br><br>
    </label>
    
    <label>Rep Name :
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="text" name="rep_nme" required><br><br>
    </label>
    <label>Rep Company:
        &nbsp; &nbsp; &nbsp; <input type="text" name="rep_cpy" required><br><br>
    </label>
    <label>Rep Number :
         &nbsp; &nbsp; &nbsp; &nbsp;<input type="text" name="rep_num" required><br><br>
    </label>
   
    <input type="submit" name="add" value="ADD"/>
    <input type="submit" name="delete" value="del"/>
</form>

      
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

if(isset($_POST["add"])){
   
 $res = mysqli_query($conn,"insert into rep_appt (doc_id,rep_name,rep_comp,rep_cell) values('$_POST[doc_id]','$_POST[rep_nme]','$_POST[rep_cpy]','$_POST[rep_num]')");
echo 'added successfully';}
 else if(isset($_POST["delete"])){
     $res=mysqli_query($conn,"truncate rep_appt");
 }
 //if($res==1){
// header("Location: cuslogin.php");}
   if(!$res){
       echo mysqli_error($conn);
   }
  
?>

