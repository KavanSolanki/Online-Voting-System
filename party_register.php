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
		<caption><h3>PARTY REGISTER</h3></caption>
        <table cellpadding="8" cellspacing="5">
		<tr>
			<td>Enter FullName 
			<td><input type="text" name="pfname" required>
			<td>Addess</td>
			<td><textarea name="padd" required></textarea></td>
		<tr>
			<td>Mobile No</td>
			<td><input type="text" name="pmn" required></td>
			<td>Date Of Birth</td>
			<td><input type="date" name="pdob"required ></td>
		<tr>
			<td>Age</td>
			<td><input type="text" name="page" size="5" required></td>		
			<td>Gender</td>
			<td><input type="radio" name="pgm" value="MALE" required>Male
				<input type="radio" name="pgm" value="FEMALE" required>Female
		<tr>
			<td>Enter Party Name</td>
			<td><input type="text" name="pname" required></td>
			<td>Enter Your Party Logo </td>
            <td><input type="file" name="plogo" required accept="image/*"></td>
		<tr>
			<td>Adhaar Card</td>
			<td><input type="text" name="padhaar" required></td>
			<td>Candidate Photo
            <td><input type="file" name="canpic" required accept="image/*"></td>
		<tr>
			<td>Voter Id Card</td>
			<td><input type="text" name="pvid" required></td>
			<td>Pan Card</td>
			<td><input type="text" name="ppan" required></td>
		<tr>
			<th colspan="4"><input type="submit" name="btn" value="REGISTER PARTY" class="btn">
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
        
        $plogo = "img/Party/". $_FILES['plogo']['name'];
        $logo = $_FILES['plogo']['tmp_name'];
        move_uploaded_file($logo,$plogo);
        
        $canpic = "img/Candidate/". $_FILES['canpic']['name'];
        $cpic = $_FILES['canpic']['tmp_name'];
        move_uploaded_file($cpic,$canpic);

        $que = "INSERT INTO `party_rag`(`id`, `name`, `address`, `mobileno`, `dob`, `age`, `gender`, `party_name`, `party_logo`, `addarcard`, `can_photo`, `voter_id`, `pan_card`) VALUES (NULL,'$pfname','$padd',$pmn,'$pdob',$page,'$pgm','$pname','$plogo',$padhaar,'$canpic','$pvid','$ppan')";
        $p=mysqli_query($con,$que);
        if ($p>0) 
        {
            echo "<center><font color='green'><b><i class='fas fa-check'></i>&nbsp;SUCCESFUL</b></font></center>";
            $vote=("INSERT INTO `voter`(`party_name`) VALUES ('$pname')");
            $vote1=mysqli_query($con,$vote);
        }
        else
        {
            echo "<center><font color='red'><b><i class='fas fa-times'></i>&nbsp;UNSUCCESFUL</b></font></center>";
        }
    }
?>
<?php
	include "footer.php";
?>