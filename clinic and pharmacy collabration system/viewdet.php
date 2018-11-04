

<?php
    
    session_start();

   $usd=$_SESSION['user'];
     $id= $_SESSION['cus_id'];
       
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>View Detail page</title>
        <link rel="stylesheet" type="text/css" href="maincss.css">
    </head>
    <body>
        <div class="topnav" id="nav">
         
          <a href="Home1.php">Home</a>
                <a href="docdetail.php">Doctors Detail</a>
                <a href="cuslogin.php">Login</a>
                <a href="customersignup.php">Sign Up</a>
                <a href="aboutus.html">About Us</a>
                <a href="viewdet.php">Hi <?php echo "$usd"; ?></a>
                <a href="logout.php">Logout</a><br><br><br>
                   
        </div><br>
 <center><div id="red">Your Appointments</div></center>  


  <?php
         include './db.php'; 
         $conn=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(mysql_error());
         if(!$conn)
         {
               die("Connection failed: " . mysqli_connect_error());
         }
          $res= mysqli_query($conn,"select  * from customer_appt where cus_id=$id");
          echo "<table>
            <tr>
                <th>Token No</th>
                <th>Fixed Day</th>
                <th>Fixed Session</th>
                <th>Doctor Name</th>
                <th>Specialist In</th>
                <th>
            </tr>";
          while ($row= mysqli_fetch_array($res)){
     echo '<tr>';
    echo '<td>'. $row['token_id'] ."</td>";
    echo '<td>'. $row['fix_day'] .'</td>';
    echo '<td>'. $row['fix_session'] ."</td>";
    $docid=$row['doc_id'];}
    $res1= mysqli_query($conn,"select *  from doctortable where doc_id=$docid");
    while ($row1= mysqli_fetch_array($res1)){
    echo '<td>'. $row1['doc_name'] ."</td>";
    echo '<td>'. $row1['doc_spl'] ."</td>";
    }
echo '</table>';
 
?><br><br>
<center><div id="red">Your Prescriptions</div></center><br>
 <?php
 include './db.php'; 
         $conn=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(mysql_error());
         if(!$conn)
         {
               die("Connection failed: " . mysqli_connect_error());
         }
          $res= mysqli_query($conn,"select  * from prescrib where cus_id=$id");
          echo "<table>
            <tr>
                <th>Patient Name</th>
                <th>Problem</th>
                <th>Weight</th>
                <th>BP</th>
                <th>Type of Medicine</th>
                <th>Medicine</th>
                <th>MG/ML</th>
                <th>Dosage</th>
                <th>Doctor Comment</th>
                <th>Test Type</th>
                <th>Test Decription</th>
                <th>Overall Advice</th>
            </tr>";
          while ($row= mysqli_fetch_array($res)){
     echo '<tr>';
   // echo '<td>'. $row[''] ."</td>";
    echo '<td>'. $row['pat_name'] .'</td>';
    echo '<td>'. $row['pat_prob'] ."</td>";
    echo '<td>'. $row['wght'] ."</td>";
    echo '<td>'. $row['bp'] ."</td>";
    echo '<td>'. $row['med_type'] ."</td>";
    echo '<td>'. $row['med_nme'] ."</td>";
    echo '<td>'. $row['med_mes'] ."</td>";
    echo '<td>'. $row['med_dos'] ."</td>";
     echo '<td>'. $row['med_com'] ."</td>";
    echo '<td>'. $row['test_type'] ."</td>";
    echo '<td>'. $row['test_des'] ."</td>";
    echo '<td>'. $row['adv'] ."</td>";
    
    }
echo '</table>';
             
 ?>
 
        <div class="footer">
            <p>Designed and Developed By Don Nishanth</p>
        </div>
    </body>
</html>