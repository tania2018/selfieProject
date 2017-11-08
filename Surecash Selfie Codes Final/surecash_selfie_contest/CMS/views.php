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
<title>Submited Views</title>

<link rel="stylesheet" type="text/css" href="css/style.css">

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="script.js"></script>
</head>
 
<body style="margin:0px; padding:0px">
	<?php include 'menu.php' ?>

	<div style="float:left; margin-left:200px; display:block; padding-left:50px; padding-top:100px; font-family:arial; color:black">
		<div>
			<h1>Submited Logos</h1>

		</div>
		<div>
			<!-- <form style="float:right; padding-right:52px;" method="post" action="export.php">
				<input style="padding:5px;" type="submit" value="Download">
			</form>  -->

			<?php include 'config.php';
				$result = mysqli_query($con,"SELECT * FROM logo GROUP BY date" );
				echo "<select id='date'>";
				while($row = mysqli_fetch_array($result)) {
					
					echo "<option value=".$row['date'].">".$row['date']."</option>";
					
				}
				echo "</select>";
				mysqli_close($con);
			?>

			<input type="submit" id="show_by_date" value="SHOW">


		</div>



		<div id="date_show_div"></div>

	</div>

	</div>



</body>
</html>