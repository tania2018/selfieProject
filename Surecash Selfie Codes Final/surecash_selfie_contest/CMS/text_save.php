<?php
// $connection = mysql_connect("localhost", "root", "root"); // Establishing Connection with Server..
// $db = mysql_select_db("mgift", $connection); // Selecting Database
//Fetching Values from URL
include("config.php");

$rules_text=$_POST['notes'];






$query = mysqli_query($con,"UPDATE rules SET rules='$rules_text' WHERE id='1' ");


echo "Thank You for Voting";
mysqli_close($con); // Connection Closed




?>