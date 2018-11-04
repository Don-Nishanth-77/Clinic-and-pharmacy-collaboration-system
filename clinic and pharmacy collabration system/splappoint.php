<?php
    session_start();
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Expires: Sat, 26 Jan 1997 05:00:00 GMT");
    if(isset($_SESSION['user']))
          //header("Location:Home1.php");
?>
<html>
    <head>
        <title>Doctor Home</title>
        <link rel="stylesheet" type="text/css" href="maincss.css">
          <link rel="stylesheet" href="font-awesome.min_1.css">
    </head>
    <body>
        <?php
            $usd=$_SESSION['doctor']['doctorname'];
            ?>    
       <div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
      <a href="Dochome.php">Home</a>
    <a href="prescrip.php">Prescription</a>
    <a href="patappoint.php">Today's Patient Lists</a>
    <a href="repappoint.php">Rep's Appointment Details</a>
    <a href="splappoint.php">Special Appointments Details</a>
    
  </div>
       </div><br><br>
    <center><div id='h4'><?php echo "$usd";?><br><div id="red">Today's Special Appointments</div></div></center><p id="date" align="right" style="font-size: 15px; color:darked"></p>

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

