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
    <div class="blink"><span>Online Voting System</span></div>
    <center>
        <br>
            <div class="nav">
                <a href="index.php"><i class="fas fa-home"></i>&nbsp;&nbsp;HOME</a>&nbsp;&nbsp;
                <a href="ragister_user.php"><i class="fas fa-user-plus"></i>&nbsp;&nbsp;REGISTER</a>&nbsp;&nbsp;
                <a href="party_register.php"><i class="fas fa-vote-yea"></i>&nbsp;&nbsp;PARTY REGISTER</a>&nbsp;&nbsp;
                <a href="login_user.php"><i class="fas fa-sign-in-alt"></i>&nbsp;&nbsp;LOGIN</a>&nbsp;&nbsp;
            </div>
            <br><br><br><br><br><br>
            <p>
                <center>
                        <h2 class="msg">VOTE FOR YOUR FAVORITE POLITICAL PARTY</h2>
                </center>
            </p>
            <br><br>
    </center>
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"></script>
</body>
</html>
<?php
	@session_destroy();
	include "footer.php";
?>