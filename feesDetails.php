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



<div class="topic"> 		
			<h1>Fees Details</h1>			
</div>

<div class="fee" id="fee">
		

		<div class="right">
			<table>
				<tr> 
					<th>Date</th>
					<th>NIC</th> 
					<th>Relevant Month</th>
					<th>Fee</th>
					<th>Discount Fee</th>
					<th>Net Fee</th>
				</tr>
				<?php

				$query = "SELECT * FROM feesinfo";
				$result = mysqli_query($conn, $query);


				while ($row=mysqli_fetch_assoc($result))
				{
					echo "
					<tr> 
					<td>".$row['date']."</td> 
					<td>".$row['nic']."</td>
					<td>".$row['relevantMonth']."</td>
					<td>".$row['fee']."</td>
					<td>".$row['discount']."</td>
					<td>".$row['netFee']." </td>
				    </tr>";
				}
				?>
			</table>
		</div>

		<div class="left">
			<br>
			<br>
<form action="" method="POST">
  	<label for="date">Date:</label><br>
  	<input type="date" id="date" name="date"><br>
  	   	
	<label for="nic">NIC:</label><br>
  	<input type="text" id="nic" name="nic"><br>

  	<label for="relevantMonth">Relevant Month:</label><br>
  	<input type="text" id="relevantMonth" name="relevantMonth"><br>

  	<label for="fee">Fee:</label><br>
  	<input type="number" id="fee" name="fee"><br>

  	<label for="discount">Discount Fee:</label><br>
  	<input type="number" id="discount" name="discount"><br>

  	<label for="netFee">Net Fee:</label><br>
  	<input type="number" id="netFee" name="netFee"><br>
<br>
<br>
		<button type="submit" class="btn"  name="addbtn" id="addbtn">Add</button>
		<button type="submit" class="btn"  name="deletebtn" >Delete</button>
		<button type="submit" class="btn"  name="updatebtn" >Update</button>
		
</form>
</div>	
</div>
</body>
</html>

<?php  
//add
if(isset($_POST['addbtn']))
{
	$date = $_POST['date'];
	$nic = $_POST['nic'];
	$relevantMonth = $_POST['relevantMonth'];
	$fee = $_POST['fee'];
	$discount = $_POST['discount'];
	$netfee = $_POST['netFee'];


$query = "INSERT INTO feesinfo VALUES('$date', '$nic', '$relevantMonth', '$fee', '$discount', '$netFee' )";

$data = mysqli_query($conn, $query);

	if($data)
	{
	echo "Data Inserted into Database";
	}
	else
	{
	echo "Failed";
	}

} 

//delete
elseif(isset($_POST['deletebtn']))
{
	$date = $_POST['date'];
	$nic = $_POST['nic'];
	$relevantMonth = $_POST['relevantMonth'];
	$fee = $_POST['fee'];
	$discount = $_POST['discount'];
	$netfee = $_POST['netFee'];


$query = "DELETE FROM feesinfo WHERE nic='$nic'";

$data = mysqli_query($conn, $query);

	if($data)
	{
	echo "Data Deleted from Database";
	}
	else
	{
	echo "Failed";
	}

} 

//update
elseif(isset($_POST['updatebtn']))
{
	$date = $_POST['date'];
	$nic = $_POST['nic'];
	$relevantMonth = $_POST['relevantMonth'];
	$fee = $_POST['fee'];
	$discount = $_POST['discount'];
	$netfee = $_POST['netFee'];


$query = "UPDATE feesinfo SET `date`='$date', `nic`='$nic', `relevantMonth`='$relevantMonth', `fee`='$fee', `discount`='$discount', `netFee`='$netfee' WHERE nic='$nic'";

$data = mysqli_query($conn, $query);

	if($data)
	{
	echo "Data Updated into Database";
	}
	else
	{
	echo "Failed";
	}

} 


?>