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
		
			<h1>Salary Details</h1>
			
</div>

<div class="salary" id="salary">
		

		<div class="right">
			<table>
				<tr> 
					<th>Date</th>
					<th>NIC</th> 
					<th>E-mail</th>
					<th>Relevant Month</th>
					<th>Basic Salary</th>
					<th>Bonus</th>
					<th>Net Salary</th>
				</tr>

				<?php

				$query = "SELECT * FROM salary";
				$result = mysqli_query($conn, $query);


				while ($row=mysqli_fetch_assoc($result))
				{
					echo "
					<tr> 
					<td>".$row['date']."</td> 
					<td>".$row['nic']."</td>
					<td>".$row['email']."</td>
					<td>".$row['relevantMonth']."</td>
					<td>".$row['basicSalary']."</td>
					<td>".$row['bonus']."</td>
					<td>".$row['netSalary']." </td>
				    </tr>";
				}
				?>

			</table>
		</div>

		<div class="left">
			<br>
			<br>
<form action="salaryDetail.php" method="POST">
  	<label for="date" >Date:</label><br>
  	<input type="date" id="date" name="date"><br>
  	   	
	<label for="nic">NIC:</label><br>
  	<input type="text" id="nic" name="nic"><br>

  	<label for="email">E-mail:</label><br>
  	<input type="text" id="email" name="email"><br>


  	<label for="relevantMonth">Relevant Month:</label><br>
  	<input type="text" id="relevantMonth" name="relevantMonth"><br>

  	<label for="basicSalary">Basic Salary:</label><br>
  	<input type="number" id="basicSalary" name="basicSalary"><br>

  	<label for="bonus">Bonus:</label><br>
  	<input type="number" id="bonus" name="bonus"><br>

  	<label for="netSalary">Net Salary:</label><br>
  	<input type="number" id="netSalary" name="netSalary"><br>
<br>
<br>
		<button type="submit" class="btn"  name="addbtn" >Add</button>
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
	$email = $_POST['email'];
	$relevantMonth = $_POST['relevantMonth'];
	$basicSalary = $_POST['basicSalary'];
	$bonus = $_POST['bonus'];
	$netSalary = $_POST['netSalary'];

$query = "INSERT INTO SALARY VALUES('$date', '$nic', '$email', '$relevantMonth', '$basicSalary', '$bonus', '$netSalary')";

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
	$email = $_POST['email'];
	$relevantMonth = $_POST['relevantMonth'];
	$basicSalary = $_POST['basicSalary'];
	$bonus = $_POST['bonus'];
	$netSalary = $_POST['netSalary'];

$query = "DELETE FROM SALARY WHERE nic='$nic' ";

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
	$email = $_POST['email'];
	$relevantMonth = $_POST['relevantMonth'];
	$basicSalary = $_POST['basicSalary'];
	$bonus = $_POST['bonus'];
	$netSalary = $_POST['netSalary'];

$query = "UPDATE SALARY SET `date`='$date', nic='$nic' ,`email`='$email',`relevantMonth`='$relevantMonth',`basicSalary`='$basicSalary',`bonus`='$bonus',`netSalary`='$netSalary' WHERE nic='$nic' ";

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

