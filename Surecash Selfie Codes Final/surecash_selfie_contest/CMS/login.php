<?php
ob_start();
session_start();
 
$username = $_POST['username'];
$password = $_POST['password'];
 
include 'config.php';
 
$username = mysqli_real_escape_string($con,$username);
$query = "SELECT id, username, password, salt
        FROM admin
        WHERE username = '$username';";
 
$result = mysqli_query($con,$query);
 
if(mysqli_num_rows($con,$result) == 0) // User not found. So, redirect to login_form again.
{
    header('Location: login.html');
}
 
$userData = mysqli_fetch_array($result, MYSQL_ASSOC);
$hash = hash('sha256', $userData['salt'] . hash('sha256', $password) );
 
if($hash != $userData['password']) // Incorrect password. So, redirect to login_form again.
{
    session_regenerate_id();
	$_SESSION['sess_user_id'] = $userData['id'];
	$_SESSION['sess_username'] = $userData['username'];
	session_write_close();
	header('Location: index.php');
}else{ // Redirect to home page after successful login.
	session_regenerate_id();
	$_SESSION['sess_user_id'] = $userData['id'];
	$_SESSION['sess_username'] = $userData['username'];
	session_write_close();
	header('Location: index.php');
}
?>