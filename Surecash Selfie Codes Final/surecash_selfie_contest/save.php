



<?php
//Get the base-64 string from data
$filteredData=substr($_POST['img_val'], strpos($_POST['img_val'], ",")+1);

//Decode the string
$unencodedData=base64_decode($filteredData);




$date = "upload/".$_POST['img_name'];


//Save the image
file_put_contents($date, $unencodedData);







include("CMS/config.php");


$newfilename = $_POST['img_name'];
// echo "newfilename";

date_default_timezone_set("Asia/Dhaka");
$date = date('d/m/Y');
$time = date('h:i:s a', time());


// Connection Closed

$name = $_POST['name'];
$phone = $_POST['phone'];
$uuid = $_POST['uuid'];
$deviceModel = $_POST['deviceModel'];

$result=mysqli_query($con,"SELECT id FROM logo WHERE phone='$phone'");

$count=mysqli_num_rows($result);

$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

// If result matched $username and $password, table row  must be 1 row
if($count > 2)
{

echo "1";
}else{



$query = mysqli_query($con,"insert into logo(name, phone, pic, uuid, deviceModel, time, date) values ('$name', '$phone', '$newfilename', '$uuid', '$deviceModel', '$time', '$date')");
echo $newfilename;
mysqli_close($con); 

}













?>




