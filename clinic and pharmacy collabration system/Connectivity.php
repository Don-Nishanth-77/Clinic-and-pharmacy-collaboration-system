<?php session_start();?>
<html>
	<head>
		
		<script type="text/javascript">
			window.history.forward(1);
			function noBack(){
				window.history.forward();
			}
		</script>
	</head>
	<body>
		<?php
                                              function SignIn(){
				//starting the session for user profile page
				if(!empty($_POST['email'])){   //checking the 'user' name which is from Sign-In.html, is it empty or have some text
					include './db.php'; 
					$ID = $_POST['email'];
					$Password = $_POST['password'];
					//echo"$ID";
					$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(mysql_error());
					$query = mysqli_query($con,"SELECT *  FROM  customerdetail where email = '$ID' AND password = '$Password'") or die(mysql_error());
					$row=mysqli_fetch_assoc($query);
					$num_result=mysqli_num_rows($query);
					if($num_result == 1){
						//echo $_POST['email'];
						
						$_SESSION['user']=$row['cus_name'];
                                                                                                            $_SESSION['cus_id']=$row['cus_id'];
                                                                                                           // $_SESSION['SGB']=$ID;
						echo "<center><h2><br><br><br><br><br><br><br><br><br>You have been logged in successfully</center>";
						header("Location:Home1.php");
					}
					else{
						echo "<center><h2><br><br><br><br><br><br><br><br><br>SORRY... YOU ENTERD WRONG ID Or PASSWORD... PLEASE RETRY...</center>";
						header("refresh:1;url=cuslogin.php");
					}
				}
			}
			if(isset($_POST['login'])){
				SignIn();
			}
                                                  $usd=$_SESSION['user'];
		?>
	</body>
</html>