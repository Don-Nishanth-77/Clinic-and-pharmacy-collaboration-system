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
            $id=$_SESSION['doc_id'];
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
    <center><div id='h4'><?php echo "$usd";?><br><div id="red">Today's REP Appointments</div></div></center><p id="date" align="right" style="font-size: 15px; color:darked"></p>

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
         $conn=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(mysql_error());
         if(!$conn)
         {
               die("Connection failed: " . mysqli_connect_error());
         }
          $res= mysqli_query($conn,"select  * from rep_appt where doc_id=$id");
          echo "<table>
            <tr>
                <th>REP NAME</th>
                <th>REP COMPANY</th>
                <th>REP CELL</th>
              
            </tr>";
          while ($row= mysqli_fetch_array($res)){
     echo '<tr>';
    echo '<td>'. $row['rep_name'] ."</td>";
    echo '<td>'. $row['rep_comp'] .'</td>';
    echo '<td>'. $row['rep_cell'] ."</td>";
          }
echo '</table>';
          ?>

