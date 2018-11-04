<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    session_start();
    $use=$_SESSION['user'];
?>
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
        <center><div id="red">ADD Pharmacist </div></center><br><br>
         <form action=" " method="POST">
    <label>Pharmacist Id :
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="text" name="ph_id" required><br><br>
    </label>
    <label>Pharmacist Name :
        &nbsp; &nbsp; <input type="text" name="ph_name" required><br><br>
    </label>
    <label>Paharmacist Password :
         &nbsp; &nbsp;<input type="text" name="ph_pwd" required><br><br>
    </label>
    <label>Pharmacy Name:
        <input type="text" name="ph_spl" required><br><br>
    </label>
      </label>
    <input type="submit" name="add" value="ADD"/>
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
   
 $res = mysqli_query($conn,"insert into pharmacist (phar_id,name,pha_pwd,phar_name) values('$_POST[ph_id]','$_POST[ph_name]','$_POST[ph_pwd]','$_POST[ph_spl]')");
 echo 'added successfully';
 if($res==1){
// header("Location: cuslogin.php");}
   if(!$res){
       echo mysqli_error($conn);
   }
  }
}
