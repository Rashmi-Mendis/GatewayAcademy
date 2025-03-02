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
		
			<h1>Account Details</h1>
			
		</div>

		<div class="content">
			<table>
				<tr> 
					<th>NIC</th> 
					<th>Holder's Name</th>
					<th>Account Number</th>
					<th>Branch Name</th>
					<th>Bank Name</th>
				</tr>

				<?php
				$query = "SELECT * FROM staffmemberinfo";
				$result = mysqli_query($conn, $query);


				while ($row=mysqli_fetch_assoc($result))
				{
					echo "
					<tr> 
					<th>".$row['nic']."</th>
					<th>".$row['holderName']."</th>
					<th>".$row['accountNumber']." </th>
					<th>".$row['bankName']."</th>
					<th>".$row['branchName']." </th>
				    </tr>";
				}

				?>
			</table>
		</div>
<br>
<br>	
</div>	
</body>
</html>