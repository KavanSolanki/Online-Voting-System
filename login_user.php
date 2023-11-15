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
<form action="" method="post">
	<center>

    <br><br><caption><h1>LOGIN</h1></caption>
		
		<table cellpadding="10" cellspacing="5">
			<tr>
				<td>Enter Username 
				<td><input type="text" name="uname" required>
			<tr>
				<td>Enter Password 
				<td><input type="Password" name="pass" required>
			<tr>
				<th colspan="2"><input type="submit" name="btn" value="LOGIN" class="btn">
		</table>
	</center>
</form>
<script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"></script>
</body>
</html>
<?php 

	extract($_POST);
	if(isset($_POST["btn"]))
	{

		@session_start();
		$_SESSION['uname']=$uname;

		$que = "SELECT * FROM `voter_rag` WHERE `username`='$uname' AND `pass`='$pass'";
		$p=mysqli_query($con,$que);
		$res=mysqli_num_rows($p);
	 	if($res>0)
		{
			echo "<center><font color='green'><b><i class='fas fa-check'></i>&nbsp;SUCCESFUL LOGIN</b></font></center>";
			header("location:main.php");
		}
		else
		{
			echo "<center><font color='red'><b><i class='fas fa-times'></i>&nbsp;Login Failed</b></font></center>";
		}
	}	

?>
<?php 
	include "footer.php" 
?>