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
        <form action=" " method="POST"/>
    <center><div id="red">Clear Daily Appointment List</div><br>
        <input type="submit" name="clear"  value="CLEAR"/>
    </center>
</body></html>

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

if(isset($_POST["clear"])){
   
 $res = mysqli_query($conn,"truncate customer_appt");
echo 'Cleared Successfully';}
 if(!$res){
       echo mysqli_error($conn);
   }
  
?>
