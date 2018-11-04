<?php

class db{
    function dbconn()
{
$servername = "localhost";
$username = "root";
$password = "loginDON";
$dbname="clinic_nd_phrmcy_coll_system";
$port="8000";
$conn=mysqli_connect($servername, $username, $password, $dbname, $port);
if(!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}
      return;
  }
}
  function loginquery($query,$requirephp){
 $servername = "localhost";
$username = "root";
$password = "loginDON";
$dbname="clinic_nd_phrmcy_coll_system";
$port="8000";
$conn=mysqli_connect($servername, $username, $password, $dbname, $port);
   $sql=$conn->query($query);
   $n=$sql->num_rows;
   if($n>0)
   {
       echo 'login successfully';
       headerl('Location:$requirephp');
   }
   else {
       echo 'INCORRECT ID AND PASSWORD';
   }
  }

?>