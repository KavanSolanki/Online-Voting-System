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
    <?php
        @session_start();
        echo "<b>Welcome"." ".$_SESSION['uname'];
        $username=$_SESSION['uname'];
    ?>
    </b>
    </span></div>
    <center>
        <br>
            <div class="nav">
            <a href="main.php"><i class="fas fa-home"></i>&nbsp;&nbsp;HOME</a>&nbsp;&nbsp;
				<a href="vote.php"><i class="fas fa-vote-yea"></i>&nbsp;&nbsp;VOTE</a>&nbsp;&nbsp;
				<a href="vote_result.php"><i class="fas fa-poll"></i>&nbsp;&nbsp;VOTE RESULT</a>&nbsp;&nbsp;
				<a href="index.php"><i class="fas fa-sign-out-alt"></i>&nbsp;&nbsp;LOGOUT</a>&nbsp;&nbsp;
            </div>
            <br><br><br><br>
            <p>
                <center>
                        <h2 class="msg">NOW YOU CAN CLICK VOTE BUTTON</h2>
                </center>
            </p>  
            <br><br><br>
    </center>
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"></script>
</body>
</html>
<?php 
	include "footer.php" 
?>