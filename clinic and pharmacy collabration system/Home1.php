<?php
    
    session_start();
  
   $usd=$_SESSION['user'];
       
?>
<html>
    <head>
        <title>HOME PAGE</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <link rel="stylesheet" type="text/css" href="maincss.css">
    </head>
    <body>
      <!-- <div class="header">-->
      <div class="topnav" id="nav">
         
          <a href="Home1.php">Home</a>
                <a href="docdetail.php">Doctors Detail</a>
                <a href="cuslogin.php">Login</a>
                <a href="customersignup.php">Sign Up</a>
                <a href="aboutus.html">About Us</a>
                
                 <a href="viewdet.php"><?php echo "$usd"; ?></a>
                

            
            </div>
   
    <center>
        <br>
        <br>
        
      <div class="w3-content w3-section" style="max-width:500px">
          
  

  <img class="mySlides w3-animate-fading" src="medihome1.jpg" style="width:100%">
  <img class="mySlides w3-animate-fading" src="medihome2.jpg" style="width:100%">
 
         
      </div>
         </center>
    <br>
    <center>
    <div id="imagedoctors">
        <div id='h4'><u>SELECT DOCTOR'S CATEGORIES </u></div><br>
         <a href="allotime.php" name="allo"><abbr title="Child Specialist"><img src="childspl.png" alt="childspl" style="width:90px;height:90px;border-radius:50%;right: 160px"></abbr></a>
        <a href="toothtime.php"><abbr title="Dentist"><img src="tooth.png" alt="childspl" style="width:90px;height:90px;border-radius:50%;right: 160px"></abbr></a>
        <a href="skintime.php"><abbr title="Dermatologist"><img src="skin1.jpg" alt="childspl" style="width:90px;height:90px;border-radius:50%;right: 160px"></abbr></a>
        <a href="genertime.php"><abbr title="General Doctor"><img src="mbbs.png" alt="childspl" style="width:90px;height:90px;border-radius:50%;right: 160px"></abbr></a><br>
    
    </div>
    </center>
    <script type="text/javascript">
        var nav=document.getElementById('topnav');
        window.onscroll=function(){
            if(window.pageYOffset >100)
            {
                nav.style.background=white;
                nav.style.boxShadow=2px 4px 2px blue;
            }
            else {
                nav.style.background=transparent;
                      nav.style.boxShadow=none;
            }
        }
        </script>
        
        <script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 4000);    
}
</script>
        <div class="footer">
            <p>Designed and Developed By Don Nishanth</p>
        </div>
    </body>
</html>