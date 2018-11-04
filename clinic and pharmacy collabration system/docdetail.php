<?php
      session_start();
      $usd=$_SESSION['user'];
 ?>
<!DOCTYPE html>

<html>
    <head>
        <title>Doctors Detail</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <link rel="stylesheet" type="text/css" href="maincss.css">
    </head>
    <body>
         <div class="topnav" id="nav">
                
                <a href="Home1.php">Home</a>
                <a href="docdetail.php">Doctors Detail</a>
                <a href="cuslogin.php">Login</a>
                <a href="customersignup.php">Sign Up</a>
                <a href="aboutus.html">About Us</a>
                <a href="viewdet.php">HI <?php echo "$usd"; ?></a>
         </div><br>
        <div id="h4">
            <h4><u>Doctors Detail's</u></h4><br>
        </div>
         <table>
             <tr>
                 <th>Doctor Name</th>
                 <th>Specialization</th>
                 <th>Degree</th>
                 <th>Contact No</th>
             </tr>
             <tr>
                 <td>Dr.J.Thompson</td>
                 <td>Child Specialist</td>
                 <td>MBBS,M.D</td>
                 <td>8967452345</td>
             </tr>
             <tr>
                 <td>Dr.Bagirathan</td>
                 <td>Dentist</td>
                 <td>M.D.S</td>
                 <td>7865454667</td>
             </tr>
             <tr>
                 <td>Dr.Wilson Raj</td>
                 <td>Dermatologist</td>
                 <td>MBBS,M.D</td>
                 <td>6556589769</td>
             </tr>
             <tr>
                 <td>Dr.M.Daisy Louis</td>
                 <td>General Doctor</td>
                 <td>MBBS,M.D</td>
                 <td>87760856586</td>
             </tr>
         </table>
         <br>
          <center>
    <div id="imagedoctors">
        <div id='h4'><u>SELECT DOCTOR'S CATEGORIES</u></div><br>
        <a href="allotime.php"><abbr title="Child Specialist"><img src="childspl.png" alt="childspl" style="width:90px;height:90px;border-radius:50%;right: 160px"></abbr></a>
        <a href="toothtime.php"><abbr title="Dentist"><img src="tooth.png" alt="childspl" style="width:90px;height:90px;border-radius:50%;right: 160px"></abbr></a>
        <a href="skintime.php"><abbr title="Dermatologist"><img src="skin1.jpg" alt="childspl" style="width:90px;height:90px;border-radius:50%;right: 160px"></abbr></a>
        <a href="genertime.php"><abbr title="General Doctor"><img src="mbbs.png" alt="childspl" style="width:90px;height:90px;border-radius:50%;right: 160px"></abbr></a><br>
    
    </div>
    </center>
           <div class="footer">
            <p>Designed and Developed By Don Nishanth</p>
        </div>
    </body>
</html>
