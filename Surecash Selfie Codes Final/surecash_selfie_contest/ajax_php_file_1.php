<?php
if(isset($_FILES["file"]["type"]))
{
$validextensions = array("jpeg", "jpg", "png");
$temporary = explode(".", $_FILES["file"]["name"]);
$newname=date();
$file_extension = end($temporary);
if ((($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/jpg") || ($_FILES["file"]["type"] == "image/jpeg")
) && ($_FILES["file"]["size"] < 15000000)//Approx. 100kb files can be uploaded.
&& in_array($file_extension, $validextensions)) {
if ($_FILES["file"]["error"] > 0)
{
echo "Return Code: " . $_FILES["file"]["error"] . "<br/><br/>";
}
else
{
if (file_exists("upload/" . $_FILES["file"]["name"])) {
echo $_FILES["file"]["name"] . " <span id='invalid'><b>already exists.</b></span> ";
}
else
{
$sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable

// $temp = explode(".",$_FILES["file"]["name"]);
// $newfilename = time()."". '.jpg';
function compress_image($source_url, $destination_url, $quality) {

		$info = getimagesize($source_url);

    		if ($info['mime'] == 'image/jpeg')
        			$image = imagecreatefromjpeg($source_url);

    		elseif ($info['mime'] == 'image/gif')
        			$image = imagecreatefromgif($source_url);

   		elseif ($info['mime'] == 'image/png')
        			$image = imagecreatefrompng($source_url);

    		imagejpeg($image, $destination_url, $quality);
		return $destination_url;
	}

date_default_timezone_set("Asia/Dhaka");
$date = date('d/m/Y');
$time = date('h:i:s a', time());
$time1 = time();



$newfilename = "".$time1.".jpg";


$targetPath = "upload/". $newfilename; // Target path where file is to be stored




// $url = 'destination .jpg';

$filename = compress_image($sourcePath, $targetPath, 50);




move_uploaded_file($filename,$targetPath) ; // Moving Uploaded file


include("CMS/config.php");


$name = $_POST['name'];
$phone = $_POST['phone'];








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





}
}
}
else
{
echo "error";
}
}
?>