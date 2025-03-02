<?php 
include("connection.php"); 

session_start();

if(isset($_POST['loginbtn']))
{
	$position = $_POST['position'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	$select = "SELECT * FROM login WHERE username = '$username' && password = '$password' ";

	$result = mysqli_query($conn, $select);

	if(mysqli_num_rows($result)>0)
	{
		$row = mysqli_fetch_array($result);

		 if($row['position'] == 'Admin')
		 {
		 	$_SESSION['admin_name'] = $row['username'];
		 	header('location:admin.php');
		 }
		 elseif($row['position'] == 'Staff')
		 {
		 	$_SESSION['staff_name'] = $row['username'];
		 	header('location:staff.php');
		 }
		 elseif($row['position'] == 'Student')
		 {
		 	$_SESSION['student_name'] = $row['username'];
		 	header('location:student.php');
		 }
		 elseif($row['position'] == 'Member')
		 {
		 	$_SESSION['member_name'] = $row['username'];
		 	header('location:member.php');
		 }
		 elseif($row['position'] == 'Accountant')
		 {
		 	$_SESSION['accountant_name'] = $row['username'];
		 	header('location:accountant.php');
		 }
		 else
		 {
		 	$error[] = 'incorrect email or password';
		 }
	}
	

}
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



<div class="log" id="log">
		<div class="right"> 
			
			<br><br><br><br><br><br>
			<h1> Login</h1>
			
		</div>

<div class="left">
			<br>
			<br>
<form action="login.php" method="POST">
			<br><br>
			<?php
			if(isset($error))
			{
				foreach ($error as $error) 
				{
					echo "error";
				};
			};

			?>
			
  	<label for="position">Position:</label><br><br>
  	<select name="position">
			<option value="Admin" > Admin </option>
			<option value="Admin" > Accountant </option>
			<option value="Staff" > Staff </option>
			<option value="Member" > Member </option>
			<option value="Student" > Student </option>
	</select>
  	<br><br>
  	<label for="username">Username:</label><br><br>
  	<input type="text" id="username" name="username"><br><br>
   	<label for="password">Password:</label><br><br>
  	<input type="password" id="password" name="password"><br><br>

  <button type="submit" value="Login" name="loginbtn">Login</button> 
 
</form>
<br>
<br>

</div>
</div>	
	
</body>
</html>


