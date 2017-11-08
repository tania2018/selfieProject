<?php
//Start session
session_start();
 
//Check whether the session variable SESS_MEMBER_ID is present or not
if(!isset($_SESSION['sess_user_id']) || (trim($_SESSION['sess_user_id']) == '')) {
	header("location: login.html");
	exit();
}
?>


<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home Page</title>

<style>
	ul{
		padding:0px;
		margin: 0px;
	}

	li{
		padding-left:20px;
		padding-top: 20px;
		display: block;
		background-color: #005da5;
		height:40px;
		border-bottom: 1px solid #272727;
	}

	li:hover{
		background-color: #9d2281;
		transition:all .3s ease-in-out;
		-moz-transition:all .3s ease-in-out;
		-o-transition:all .3s ease-in-out;
		-webkit-transition:all .3s ease-in-out;
		border-left: 10px solid #bfbfbf;
	}

	a{
		text-decoration: none;
		color: #bfbfbf;
		font-family: arial;
	}

	h1{
		font-family: arial;
	}

	.navbar-wrapper
	{
    background: #00ace7;
    position: fixed;
    border-bottom: 1px solid #bfbfbf;
    margin-top: 0px !important;
    z-index: 100000;
    color:white;
    width: 100%;
    height: 100px;
	}

</style>

</head>
 
<body style="margin:0px; padding:0px;">
	<?php include 'menu.php' ?>
	<div style="float:left; margin-left:200px; display:block; padding-left:50px; padding-top:100px;">
		<div>
			<h1>Dash Board</h1>

		<div>

			<?php include 'config.php';

				$result1 = mysqli_query($con,"SELECT * FROM logo"); 
				$num_rows1 = mysqli_num_rows($result1); 


				// mysqli_close($con);
			?>
		</div>

		<p style="font-family:arial">Total Number of Submission : <?php echo $num_rows1; ?></p>


		</div>

	</div>



</body>
</html>