<?php 
include("connection.php"); 
 


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Gateway Academy</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='https://fonts.googleapis.com/css?family=Philosopher' rel='stylesheet'>
</head>
<body class="login">

	<div>
		<nav>
			<img class="logoo" src="images\logoo.png"  width="160px" height="160px">
			<ul>
				<li><a href="index.php">Home</a>  </li>
				<li><a href="second.php">About Us</a> </li>
				<li><a href="contact.php">Contact Us</a> </li>		
				<button><a href="login.php">Login</a> </button> 
			    <button><a href="register.php">Register</a></button>
			</ul>		
		</nav>
	</div>



<div class="admin" id="admin">
		<div class="right"> 
			
			<br><br><br><br><br>
			<h1>Admin<br>Page</h1>
			
		</div>

<div class="left">
			<br>

			
  	<label> <a href="staffMemberDetails.php">Staff Member Details</a></label><br><br>
  	<label> <a href="staffRegister.php">Staff Member Register</a></label><br><br>
  	<!--<label> <a href="studentDetails.php">  Student Details</a></label><br><br>-->
  	<label> <a href="memberDetails.php"> Student/Member Details</a></label><br><br>
  	<label> <a href="accountDetails.php"> Account Details</a></label><br><br>
  	<label> <a href="salaryDetail.php"> Salary Details</a></label><br><br>
  	<label> <a href="feesDetails.php"> Fees Details</a></label><br><br> 
<br>
<br>
<button> <a href="index.php">Logout</a> </button>
</div>
</div>	
	
</body>
</html>