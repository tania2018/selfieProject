<?php
// $connection = mysql_connect("localhost", "root", "root"); // Establishing Connection with Server..
// $db = mysql_select_db("mgift", $connection); // Selecting Database
//Fetching Values from URL
include("CMS/config.php");

$fb_id=$_POST['fb_id'];
$logo_id=$_POST['logo_id'];




$result=mysqli_query($con,"SELECT id FROM vote WHERE fb_id='$fb_id' and logo_id='$logo_id'");

$count=mysqli_num_rows($result);

$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

// If result matched $username and $password, table row  must be 1 row
if($count>0)
{echo "voted";
}else{


//Insert query
$query = mysqli_query($con,"insert into vote(fb_id, logo_id) values ('$fb_id', '$logo_id')");


$result1=mysqli_query($con,"SELECT id FROM vote WHERE logo_id='$logo_id'");

$count1=mysqli_num_rows($result1);

$query = mysqli_query($con,"UPDATE logo SET vote='$count1' WHERE id='$logo_id' ");


echo "Thank You for Voting";
mysqli_close($con); // Connection Closed

}


?>