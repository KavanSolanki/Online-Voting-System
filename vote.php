<?php
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
            
</body>
</html>
    <center>
        <br>
        <h2>Online Voting System</h2>
    </center>
    <hr color="#0B78C8" width="100%">
    <br>
    <div id="mainSection">
        <div id="profileSection">
        <div>
                <?php
                include "conn.php";
                $querry1 = "SELECT * FROM `party_rag`";
                $run1 = mysqli_query($con, $querry1);
                echo "<table width=90% cellpadding=3 class=grp rules=all>
                <tr>
                    <th>Group Name</th>
                    <th>Logo</th>
                    <th>Opraction</th>
                </tr>
            ";
                while ($res = mysqli_fetch_array($run1))
                {
                    echo "
                <tr>
                <th>$res[7]</th>
                <th><img src='$res[8]' height='80' width='80'></th>
                    <th><form method='post' action=''>
                    <input type='radio' name='r1' value='$res[7]'required>
                    </th>
                    </tr>";
                }
                echo "<tr>
                <th colspan=3><br><input type='submit' value='VOTE' name='btn' class=vot>
                </form></tr>";
                if (isset($_POST['btn'])) 
                {

                    @session_start();
                    $radio = $_POST['r1'];
                    $_SESSION['party_name'] = $radio;
				    $tmp=$_SESSION['uname'];
                    
                    $q=("SELECT * FROM `voter_rag` WHERE `username`='$tmp'");
					$p=mysqli_query($con,$q);
                    while($res1 = mysqli_fetch_array($p))
					{
						$status=$res1[10];
						$_SESSION['status'] = $status;
					}
                    if ($_SESSION['status']=$status=="NOT VOTED") 
					{
                        $s=("UPDATE `voter_rag` SET `status`='VOTED' Where `username`='$username'");
                        $p=mysqli_query($con,$s);
						//set voted status	
                        echo "<br>";
						//set vote count
                        $q1=mysqli_query($con,'UPDATE voter SET count = count + 1 WHERE party_name	 = "'.$_SESSION['party_name'].'"');
						$p1=mysqli_query($con,$q1);	
					    $_SESSION['party_name'];
                        
					}
                    else 
                    {
                        echo "<font color='red'><b><i class='fas fa-times'></i>&nbsp;You Have Already Voted</b></font>";
                    }
                }
                ?>
                <div id="groupSection">
                </table>
            </div>
        </div>
        <?php
            include "conn.php";
             $querry = "SELECT * FROM `voter_rag` WHERE `username`='$username'";
            
            $run = mysqli_query($con, $querry);
            echo "<table align='center' cellpadding=2 width=100%>";

            while ($res = mysqli_fetch_array($run)) 
            {
                echo "<center><img src=$res[4] height=90 width=90 class='imgborder'></center><br>
                    <b>Name : </b>
                    &nbsp; $res[6]<br>
                    <b>Email : </b>
                    &nbsp; $res[5]<br>
                    <b>Age : </b>
                    &nbsp; $res[3]&nbsp;Year<br>
                    <b>Addar Card  : </b>
                    &nbsp; $res[7]<br>
                    <b>Pan Card : </b>
                    &nbsp; $res[8]<br>
                    <b>Status : </b>";
                    if ("VOTED" == $res[10]) 
                    {
                        echo "<center><font color=green>&nbsp;<b>$res[10]</b><br></font></center>";
                    }
                    else
                    {
                        echo "<center><font color=red>&nbsp;<b>$res[10]</b><br></font></center>";
                    }
            }  
            ?>
        </div>
    </div>
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"></script>
</body>
</html>
