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
<body>

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



<div class="reg" id="reg">
		<div class="right"> 
			
			<br><br><br><br><br><br>
			<h1> Registration</h1>
			
		</div>

<div class="left">
			<br>
			<br>
<form action="register.php" method="POST">
  	<label for="fullName">Full Name:</label><br>
  	<input type="text" id="fullName" name="fullName"><br>
  	<label for="initName">Name with Initials:</label><br>
  	<input type="text" id="initName" name="initName"><br>
   	
  	<label for="gender">Gender:</label><br>
			<select name="gender">
			<option value="female" selected=""> Female </option>
			<option value="male"> Male </option>
			</select>
			<br>
	<label for="nic">NIC:</label><br>
  	<input type="text" id="nic" name="nic"><br>

  	

  	<label for="email">E-mail:</label><br>
  	<input type="text" id="email" name="email"><br>

  	<label for="mobile">Mobile Number:</label><br>
  	<input type="text" id="mobile" name="mobile"><br>

  	<label for="password">Password:</label><br>
  	<input type="password" id="password" name="password"><br>

  	<label for="confirmpassword">Confirm Password:</label><br>
  	<input type="password" id="confirmpassword" name="confirmpassword"><br>

  <button type="submit" value="Register" class="btn" name="registerbtn" >Register</button> 
  
</form>
<br>
<br>

</div>
</div>	
</body>
</html>

<?php  
if(isset($_POST['registerbtn']))
{
	$fullName = $_POST['fullName'];
	$initName = $_POST['initName'];
	$gender = $_POST['gender'];
	$nic = $_POST['nic'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$password = $_POST['password'];
	$confirmpassword = $_POST['confirmpassword'];

$query = "INSERT INTO REGISTER VALUES('$fullName', '$initName', '$gender', '$nic', '$email', '$mobile', '$password', '$confirmpassword')";

$data = mysqli_query($conn, $query);

	if($data)
	{
	//echo "Data Inserted into Database";
	}
	else
	{
	//echo "Failed";
	}

} 
?>

