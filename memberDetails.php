<?php
include 'connection.php';

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



<div class="studentInfo" id="studentInfo">
		<div class="topic"> 
		
			<h1>Student/Member<br>Details</h1>
			
		</div>

		<div class="content">
			<table>
				<tr> 
					<th>Full Name</th> 
					<th>Name with Initials</th>
					<th>Gender</th>
					<th>NIC</th>
					<th>E-mail</th>
					<th>Mobile Number</th>
			
				</tr>

				<?php

				$query = "SELECT * FROM register";
				$result = mysqli_query($conn, $query);


				while ($row=mysqli_fetch_assoc($result))
				{
				echo "
				<tr> 
					<td>".$row['fullName']."</td> 
					<td>".$row['initName']."</td>
					<td>".$row['gender']."</td>
					<td>".$row['nic']."</td>
					<td>".$row['email']."</td>
					<td>".$row['mobile']."</td>
				</tr>";
				}

				?>
			</table>
		</div>	
		<a href=""></a>
</div>
<br>
<br>	
</body>
</html>