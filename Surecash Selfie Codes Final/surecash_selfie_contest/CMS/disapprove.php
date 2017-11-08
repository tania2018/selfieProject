<?php
// $connection = mysql_connect("localhost", "root", "root"); // Establishing Connection with Server..
// $db = mysql_select_db("mgift", $connection); // Selecting Database
//Fetching Values from URL
include("config.php");

$id=$_GET['id'];






$query = mysqli_query($con,"UPDATE logo SET status='disapproved' WHERE id='$id' ");


echo "Disapproved";



mysqli_close($con); // Connection Closed




?>