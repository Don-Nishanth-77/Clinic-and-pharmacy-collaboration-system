<?php
    session_start();
   
?>
<html>
    <head>
        <title>Doctor Home</title>
        <link rel="stylesheet" type="text/css" href="maincss.css">
           <link rel="stylesheet" href="font-awesome.min_1.css">
           <style>
               button,submit{
                   background-color:#00cccc;
              color: white;
             padding: 14px 20px;
            margin: 8px 0;
           border: none;
          cursor: pointer;
        width: 50%;
    opacity: 0.9;
}
  button:hover {
    opacity:1;
}
.cancelbtn, .signupbtn {
  float:end;  width: 30%;
}
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

           </style>
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
    <center><div id='h4'><?php echo "$usd";?><br><div id="red">PRESCRIPTION</div></div></center><p id="date" align="right" style="font-size: 15px; color:darked"></p>

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
<center>
<form action=" " method="POST">
    
    <label>Token-No :
        <input type="number" name="pat_token" style="width:55px;" required>&nbsp; &nbsp; 
    </label> 
   <label>Patient Name :
<input type="text" name="pat_name" required>
   </label>
    <label>Patient_ID :
        <input type="number" name="pat_id" style="width:75px;" required></label><br>
   <pre> 
<label>Patient Problem C/C : 
   <input type="text" name="pat_prob" style="width:600px;" required>
   </label></pre>
<label>Patient BP :
    <input type="Number" name="pat_bp" style="width: 50px;" >
   </label>
   <label>Patient Weight :
    <input type="Number" name="pat_wght" style="width: 50px;" >
    
   </label><br><br>
       <label>MEDICINES</label></center><br>
   &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  <label>Type :
       <select name="type">
           <option value="Capsule">Cap</option>
           <option value="Tablet">Tab</option>
           <option value="Syringe">Syringe</option>
           <option value="Powder">Pow</option>
           <option value="Syrup">Syr</option>
           <option value="Ointment">Oint</option>
       </select>
       &nbsp; &nbsp; &nbsp; 
       <label>
           <input type="text" name="medicine" placeholder="Medicine Name" style="width:300px;" required>
       </label>
   &nbsp; &nbsp; &nbsp; 
       <label>
           <input type="text" name="quan" placeholder="MG/ML" style="width:120px;" required>
       </label>
    &nbsp; &nbsp; &nbsp; 
       <label>
           <input type="text" name="dose" placeholder="Dose" style="width:90px;" required>
       </label>
    &nbsp; &nbsp; &nbsp; 
       <label>
           <input type="text" name="medcom" placeholder="Medicine Comments" style="width:230px;" required>
       </label><br><br>
     &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  <label>Type :
       <select name="type">
           <option value="Capsule">Cap</option>
           <option value="Tablet">Tab</option>
           <option value="Syringe">Syringe</option>
           <option value="Powder">Pow</option>
           <option value="Syrup">Syr</option>
           <option value="Ointment">Oint</option>
       </select>
       &nbsp; &nbsp; &nbsp; 
       <label>
           <input type="text" name="medicine1" placeholder="Medicine Name" style="width:300px;" >
       </label>
   &nbsp; &nbsp; &nbsp; 
       <label>
           <input type="text" name="quan1" placeholder="MG/ML" style="width:120px;" >
       </label>
    &nbsp; &nbsp; &nbsp; 
       <label>
           <input type="text" name="dose1" placeholder="Dose" style="width:90px;" >
       </label>
    &nbsp; &nbsp; &nbsp; 
       <label>
           <input type="text" name="medcom1" placeholder="Medicine Comments" style="width:230px;" >
       </label><br><br>
       &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  <label>Type :
       <select name="type">
           <option value="Capsule">Cap</option>
           <option value="Tablet">Tab</option>
           <option value="Syringe">Syringe</option>
           <option value="Powder">Pow</option>
           <option value="Syrup">Syr</option>
           <option value="Ointment">Oint</option>
       </select>
       &nbsp; &nbsp; &nbsp; 
       <label>
           <input type="text" name="medicine2" placeholder="Medicine Name" style="width:300px;" >
       </label>
   &nbsp; &nbsp; &nbsp; 
       <label>
           <input type="text" name="quan2" placeholder="MG/ML" style="width:120px;" >
       </label>
    &nbsp; &nbsp; &nbsp; 
       <label>
           <input type="text" name="dose2" placeholder="Dose" style="width:90px;">
       </label>
    &nbsp; &nbsp; &nbsp; 
       <label>
           <input type="text" name="medcom2" placeholder="Medicine Comments" style="width:230px;">
       </label><br><br>
     &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  <label>Type :
       <select name="type">
           <option value="Capsule">Cap</option>
           <option value="Tablet">Tab</option>
           <option value="Syringe">Syringe</option>
           <option value="Powder">Pow</option>
           <option value="Syrup">Syr</option>
           <option value="Ointment">Oint</option>
       </select>
       &nbsp; &nbsp; &nbsp; 
       <label>
           <input type="text" name="medicine3" placeholder="Medicine Name" style="width:300px;" >
       </label>
   &nbsp; &nbsp; &nbsp; 
       <label>
           <input type="text" name="quan3" placeholder="MG/ML" style="width:120px;" >
       </label>
    &nbsp; &nbsp; &nbsp; 
       <label>
           <input type="text" name="dose3" placeholder="Dose" style="width:90px;" >
       </label>
    &nbsp; &nbsp; &nbsp; 
       <label>
           <input type="text" name="medcom3" placeholder="Medicine Comments" style="width:230px;" >
       </label><br><br>
     &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  <label>Type :
       <select name="type">
           <option value="Capsule">Cap</option>
           <option value="Tablet">Tab</option>
           <option value="Syringe">Syringe</option>
           <option value="Powder">Pow</option>
           <option value="Syrup">Syr</option>
           <option value="Ointment">Oint</option>
       </select>
       &nbsp; &nbsp; &nbsp; 
       <label>
           <input type="text" name="medicine4" placeholder="Medicine Name" style="width:300px;" >
       </label>
   &nbsp; &nbsp; &nbsp; 
       <label>
           <input type="text" name="quan4" placeholder="MG/ML" style="width:120px;" >
       </label>
    &nbsp; &nbsp; &nbsp; 
       <label>
           <input type="text" name="dose4" placeholder="Dose" style="width:90px;" >
       </label>
    &nbsp; &nbsp; &nbsp; 
       <label>
           <input type="text" name="medcom4" placeholder="Medicine Comments" style="width:230px;" >
       </label><br><br>
     
       <center><label>TEST</label></center><br>
         &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<label>Test :
           <input type="text" name="testype" placeholder="Test Type" style="width: 190px;">
       </label>
        &nbsp; &nbsp; &nbsp; 
         <label>
           <input type="text" name="testdes" placeholder="Test Description" style="width: 230px;">
       </label>
        &nbsp; &nbsp; &nbsp; 
         <label>
           <input type="text" name="advice" placeholder="Advice" style="width: 430px;">
         </label><br><br><center>
           <div class="clearfix">
         <button type="submit" name="subpres" class="signupbtn" name="signin">SUBMIT</button>
         <button type="button" name="can" onclick="location.href = 'Dochome.php';" class="cancelbtn" id="can">CANCEL</button>
           </div>
         </center>
   
</form>
</center>
        
    </body>
</html>

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

if(isset($_POST["subpres"])){
   
 $res = mysqli_query($conn,"insert into prescrib (cus_id,pat_name,pat_prob,wght,bp,med_type,med_nme,med_mes,med_dos,med_com,test_type,test_des,adv) values('$_POST[pat_id]','$_POST[pat_name]','$_POST[pat_prob]','$_POST[pat_wght]',$_POST[pat_bp],'$_POST[type]','$_POST[medicine]','$_POST[quan]','$_POST[dose]','$_POST[medcom]','$_POST[testype]','$_POST[testdes]','$_POST[advice]')");
 echo 'prescribed successfully';
 if($res==1){
// header("Location: cuslogin.php");}
   if(!$res){
       echo mysqli_error($conn);
   }
  }
}
