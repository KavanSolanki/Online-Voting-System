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
    <div class="blink"><span>
    <b><?php
        @session_start();
        echo "Welcome"." ".$_SESSION['uname'];
        $username=$_SESSION['uname'];
    ?></b>
    </span></div>
    <center>
        <br>
            <div class="nav">
            <a href="main.php"><i class="fas fa-home"></i>&nbsp;&nbsp;HOME</a>&nbsp;&nbsp;
				<a href="vote.php"><i class="fas fa-vote-yea"></i>&nbsp;&nbsp;VOTE</a>&nbsp;&nbsp;
				<a href="vote_result.php"><i class="fas fa-poll"></i>&nbsp;&nbsp;VOTE RESULT</a>&nbsp;&nbsp;
				<a href="index.php"><i class="fas fa-sign-out-alt"></i>&nbsp;&nbsp;LOGOUT</a>&nbsp;&nbsp;
            </div>
    </center>
    <center>
        <br>
        <h2>Online Voting System Result</h2>
    </center>
    <hr color="LightSkyBlue" width="50%">
    <br>
    <?php
        include "conn.php";
        $resultq = "SELECT * FROM voter";
        $result = mysqli_query($con,$resultq);
        echo "
        <table cellpadding=7 align=center class='res' bgcolor=white>
        <tr>
            <th>PARTY NAME</th>
            <th>RESULT</th>
        </tr>";
        while($res = mysqli_fetch_array($result))
        {
           echo "
           <tr>
                <th>$res[1]</th>
                <th>$res[2]</th>
            </tr>";
        }
        
    ?>
    </table>
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"></script>
</body>
</html>
<?php 
	include "footer.php" 
?>