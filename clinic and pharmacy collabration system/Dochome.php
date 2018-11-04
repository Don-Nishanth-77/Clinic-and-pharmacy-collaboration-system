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
    <center><div id='h4'>Welcome <?php echo "$usd";?></div></center><p id="date" align="right" style="font-size: 15px; color:darked"></p>

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

