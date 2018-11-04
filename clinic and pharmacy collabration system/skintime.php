 <?php
      session_start();
      $usd=$_SESSION['user'];
        $id= $_SESSION['cus_id'];
 ?>
<html>
    <head>
        <title>Dentist</title>
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
             </div>
    <center>
      <a href="skintime.php"><abbr title="Dermatologist"><img src="skin1.jpg" alt="childspl" style="width:90px;height:90px;border-radius:50%;right: 160px"></abbr></a>
    <br>
    <div id='h4'>
        <h3><u>Dermatologist </u></h3><h4>Dr.Wilson Raj MBBS,M.D</h4><br>
        <h5><b>Time Shedule</b></h5></div>
    
        <table>
            <tr>
                <th>Days</th>
                <th>Morning Session</th>
                <th>Evening Session</th>
            </tr>
            <center>
            <tr>
                <td>Monday</td>
                <td>10:00 A.M to 1:00 P.M</td>
                <td>7:00 P.M to 11:00 P.M</td>
           </tr>
            </center>
           <tr>
               <td>Wednsday</td>
               <td>10:00 A.M to 1:00 P.M</td>
               <td>7:00 P.M to 11:00 P.M</td>
           </tr>
           <tr>
               <td>Friday</td>
               <td>10:00 A.M to 2:00 P.M</td>
               <td>7:00 P.M to 11:00 P.M</td>
           </tr>
    <tr>
               <td>Sunday</td>
               <td>10:00 A.M to 12:00 P.M</td>
               <td><div id="red">No Appointments</div></td>
          </tr>
    </table>
    <form action=" " method="POST">
    <div id="h4">
    <h5><u>Fix Appointment</u></h5>   
    <h3>Day</h3> <select name="fix_day">
        <option value="Mon">Monday</option>
    
        <option value="Wed">Wednesday</option>
       
        <option value="Fri">Friday</option>
    
        <option value="sun">Sunday</option>
    </select>
    <h3>Session</h3>
    <select name="fix_session">
            <option value="Morning">Morning </option>
            <option value="Evening">Evening</option>
    </select><br><br>
    
     <input type="submit" value="Fix" name="fix">  <input type="button" value="Back" name="back">
    </div>
    </form>
    </center>
      <div class="footer">
            <p>Designed and Developed By Don Nishanth</p>
        </div>
    </body>
</html>
  <?php
         include './db.php'; 
         $conn=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(mysql_error());

if(isset($_POST["fix"])){
    $docid=12123;
    $id=$_SESSION['cus_id'];
 $res = mysqli_query($conn,"insert into customer_appt (cus_id,doc_id,fix_day,fix_session) values($id,$docid,'$_POST[fix_day]','$_POST[fix_session]')");
 if($res==1){
 echo 'Your Appointment Fixed successfully';
 header("Location:viewdet.php");}
if (!$res){
       echo mysqli_error($conn);
   }
  }
  elseif (isset($_POST['back'])) {
  header("Location:Home1.php");}
  

 // header("Location:Home1.php");
 
?>
        

