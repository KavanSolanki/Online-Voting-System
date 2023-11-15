<?php
    $con = mysqli_connect("localhost","root","")or die("Not Connected");
    $db = mysqli_select_db($con,"vote");
?>