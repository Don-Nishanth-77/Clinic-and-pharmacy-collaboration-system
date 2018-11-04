<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
         <link rel="stylesheet" type="text/css" href="signlogin.css">
               <link rel="stylesheet" type="text/css" href="maincss.css">   
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
      
        
         <div class="topnav" id="nav">
                
             <a href="adminhome.php">Home</a>
                <a href="mngdoc.php">Manage Doctors </a>
                <a href="mngpat.php">Manage Patients</a>
                <a href="mngphar.php">Manage Pharmacists</a>
                 
                <a href="logout.php">Logout</a></div>
        <br><br>
    <center><div id="red">ADD DOCTORS </div></center><br><br>
    <form action=" " method="POST">
    <label>Doctor Id :
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input type="text" name="doc_id" required><br><br>
    </label>
    <label>Doctor Name :
        &nbsp; &nbsp; <input type="text" name="doc_name" required><br><br>
    </label>
    <label>Doctor Degree :
         &nbsp; &nbsp;<input type="text" name="doc_degree" required><br><br>
    </label>
    <label>Doctor Specialist:
        <input type="text" name="doc_spl" required><br><br>
    </label>
    <label>Doctor Mail :
         &nbsp; &nbsp; &nbsp; &nbsp;<input type="text" name="doc_mail" required><br><br>
    </label>
    <label>Doctor Number :
         &nbsp;<input type="text" name="doc_num" required><br><br>
    </label>
    <label>Doctor Pswd :
         &nbsp; &nbsp; &nbsp;<input type="text" name="doc_pswd" required><br><br>
    </label>
    <input type="submit" name="add" value="ADD"/>
</form>
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

if(isset($_POST["add"])){
   
 $res = mysqli_query($conn,"insert into doctortable (doc_id,doc_name,degree,doc_spl,doc_mail,doc_number,doc_pswd) values('$_POST[doc_id]','$_POST[doc_name]','$_POST[doc_degree]','$_POST[doc_spl]',$_POST[doc_mail],'$_POST[doc_num]','$_POST[doc_pswd]')");
 echo 'added successfully';
 if($res==1){
// header("Location: cuslogin.php");}
   if(!$res){
       echo mysqli_error($conn);
   }
  }
}
