<?php
    session_start();
    $use=$_SESSION['user'];
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
         <link rel="stylesheet" type="text/css" href="maincss.css">
        <link rel="stylesheet" href="font-awesome.min_1.css">
    </head>
    <body><br>
    <center><div id="red">PHARMACY</div>
        <p>Hello <?php echo $use;?></p>
    </center>
         <div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
      <a href="pharmacist.php">Home</a>
    <a href="viewpatlist.php">View Patient details</a>
    <a href="chat.php">Chat</a>
   
    <a href="logout.php">Sign-Out</a>
   
    
  </div>
       </div><br><br>
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

        <?php
             
        ?>
    </body>
</html>
