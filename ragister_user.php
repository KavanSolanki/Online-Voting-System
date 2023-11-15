<?php
    include "home.php";
	include "conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
	<title>|| VOTING ||</title>
</head>
<body>
<form action="" method="post" id="myform" enctype="multipart/form-data">
	<center>
    <br>
		<caption><h1>REGISTER AS VOTER</h1></caption>
		
	<table cellpadding="10" cellspacing="5">

		<tr>
			<td>Enter FirstName 
			<td><input type="text" name="fname" required>
			<td>Enter Lastname 
			<td><input type="text" name="lname" required>
        <tr>
			<td>Age
			<td><input type="text" name="age" size="5" required>
			<td>Candidate Photo
			<td><input type="file" name="cpic" required class="photo">
		<tr>
			<td>Enter Email 
			<td><input type="email" name="email"required>
			<td>Enter Username 
			<td><input type="text" name="uname" required>
		<tr>
			<td>Adhaar Card
			<td><input type="text" name="adhaar" required>
			<td>Pan Card
			<td><input type="text" name="pan" required>
        <tr>
			<td>Enter Password 
			<td><input type="Password" name="pass" required>
			<td>Confirm Password 
			<td><input type="Password" name="cpass" required>
		<tr>
			<th colspan="4"><input type="submit" name="btn" value="REGISTER" class="btn">
		</table>
</center>
</form>
<script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"></script>
</body>
</html>
<?php
	if (isset($_POST['btn']))
    {
        extract($_POST);
		if ($pass == $cpass) 
		{
			$canpic = "img/voter_can_pic/". $_FILES['cpic']['name'];
        	$cpic = $_FILES['cpic']['tmp_name'];
        	move_uploaded_file($cpic,$canpic);

			$que = "INSERT INTO `voter_rag`(`id`, `firstname`, `lastname`, `age`, `can_photo`, `email`, `username`, `addarcard`, `pan_card`, `pass`,`status`) VALUES (NULL,'$fname','$lname',$age,'$canpic','$email','$uname',$adhaar,'$pan','$pass','NOT VOTED')";
			$run_que = mysqli_query($con,$que);
			if ($run_que>0) 
			{
				echo "<center><font color='green'><b><i class='fas fa-check'></i>&nbsp;SUCCESFUL REGISTER</b></font></center>";
			}
			else
			{
				echo "<center><font color='red'><b><i class='fas fa-times'></i>&nbsp;UNSUCCESFUL REGISTER</b></font></center>";
			}
		}
		else
		{
			echo "<center><font color='red'><b><i class='fas fa-times'></i>&nbsp; PASSWORD NOT MATCH</b></font></center>";
		}	
	}
?>
<?php
	include "footer.php";
?>