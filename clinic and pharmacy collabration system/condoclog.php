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
				if(!empty($_POST['doc_id'])){   //checking the 'user' name which is from Sign-In.html, is it empty or have some text
					include './db.php'; 
					$ID = $_POST['doc_id'];
					$Password = $_POST['doc_pswd'];
					//echo"$ID";
					$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(mysql_error());
					$query = mysqli_query($con,"SELECT *  FROM  doctortable where doc_id = '$ID' AND doc_pswd = '$Password'") or die(mysql_error());
					$row=mysqli_fetch_assoc($query);
					$num_result=mysqli_num_rows($query);
					if($num_result == 1){
						//echo $_POST['email'];
						session_start();
						$_SESSION['doctor']=$row['doc_name'];
                                                                                                            $_SESSION['doc_id']=$ID;
                                                                                                           // $_SESSION['SGB']=$ID;
						echo "<center><h2><br><br><br><br><br><br><br><br><br>You have been logged in successfully</center>";
						header("Location:Dochome.php");
					}
					else{
						echo "<center><h2><br><br><br><br><br><br><br><br><br>SORRY... YOU ENTERD WRONG ID Or PASSWORD... PLEASE RETRY...</center>";
						header("refresh:1;url=doclogin1.php");
					}
				}
			}
			if(isset($_POST['login'])){
				SignIn();
			}
		?>
	</body>
</html>