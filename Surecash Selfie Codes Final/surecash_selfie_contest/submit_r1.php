<?php
// $connection = mysql_connect("localhost", "root", "root"); // Establishing Connection with Server..
// $db = mysql_select_db("mgift", $connection); // Selecting Database
//Fetching Values from URL
include("CMS/config.php");

// $mood=$_POST['mood1'];
// $img=$_POST['img1'];

// $newfilename = $name."".$phone."".'.jpg';

$newfilename = $_POST['img_name'];
// echo "newfilename";

// $newfilename = time()."". '.jpg';
date_default_timezone_set("Asia/Dhaka");
$date = date('d/m/Y');
$time = date('h:i:s a', time());
// $date= date("Y/m/d");
//Insert query

// $result=mysqli_query($con,"SELECT id FROM submission WHERE phone='$phone2' and datetime='$date'");

// $count=mysqli_num_rows($result);

// $row=mysqli_fetch_array($result,MYSQLI_ASSOC);

// If result matched $username and $password, table row  must be 1 row
// if($count>0)
// {

// echo "1";
// }else{


// $query = mysqli_query($con,"insert into propic(img) values ('$newfilename')");
// echo "Form Submitted Succesfully";
// mysqli_close($con); 

// }

// Connection Closed

$name = $_POST['name'];
$phone = $_POST['phone'];


// echo $name;
// die();





$result=mysqli_query($con,"SELECT id FROM logo WHERE phone='$phone'");

$count=mysqli_num_rows($result);

$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

// If result matched $username and $password, table row  must be 1 row
if($count > 2)
{

echo "1";
}else{



$query = mysqli_query($con,"insert into logo(name, phone, pic, time, date) values ('$name', '$phone', '$newfilename', '$time', '$date')");
echo $newfilename;
mysqli_close($con); 

}




?>