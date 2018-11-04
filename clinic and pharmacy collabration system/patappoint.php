<?php
    session_start();
 
?>
<html>
    <head>
        <title>Doctor Home</title>
        <link rel="stylesheet" type="text/css" href="maincss.css">
           <link rel="stylesheet" href="font-awesome.min_1.css">
    </head>
    <body>
        <?php
            $usd=$_SESSION['doctor'];
            ?>    
       <div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
      <a href="Dochome.php">Home</a>
    <a href="prescrip.php">Prescription</a>
    <a href="patappoint.php">Today's Patient Lists</a>
    <a href="repappoint.php">Rep's Appointment Details</a>
     <a href="logout.php">Sign-Out</a>
   
    
  </div>
       </div><br><br>
    <center><div id='h4'><?php echo "$usd";?><br><div id="red">Today's Regular Patients Appointments</div></div></center><p id="date" align="right" style="font-size: 15px; color:darked"></p>

    <pre>   
    <span style="font-size:50px;cursor:pointer" onclick="openNav()"><img src="seth.png"  style="width:90px;height:90px;border-radius:50%;right: 160px"></span>
    </pre>
<script>
function openNav() {
  document.getElementById("myNav").style.width = "50%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
</script>
<script>
var d = new Date();
document.getElementById("date").innerHTML = d;
</script>
   </body>
</html>

 <?php
        
         include './db.php'; 
             $id=$_SESSION['doc_id'];
         $conn=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(mysql_error());
         if(!$conn)
         {
               die("Connection failed: " . mysqli_connect_error());
         }
          $res= mysqli_query($conn,"select  * from customer_appt where doc_id=$id");
        
      //    $cus_id=$row['cus_id'];
         
          //$res1=mysqli_query($conn,"select  * from customer_detail where cus_id=$cus_id");
          echo "<table>
            <tr>
                <th>Token No</th>
                <th>Fixed Session</th>
                <th>Patient id</th>
                  <th>Patient Name</th>
                  <th>Patient Mail</th>
               
              
            </tr>";
             while ($row= mysqli_fetch_array($res)){
     echo '<tr>';
    echo '<td>'. $row['token_id'] ."</td>";
    echo '<td>'. $row['fix_session'] ."</td>";
             echo '<td>'. $row['cus_id'] ."</td>";
             $cuid=$row['cus_id'];
             }
               $res1= mysqli_query($conn,"select  * from customerdetail where cus_id=$cuid");
                while ($row= mysqli_fetch_array($res1)){
                    echo '<td>'. $row['cus_name'] ."</td>";
                    echo '<td>'. $row['email'] ."</td>";
                }
             echo '</table>';
          ?>
