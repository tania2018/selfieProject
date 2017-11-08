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

<link rel="stylesheet" type="text/css" href="css/style.css">
<title>Submited Views</title>

  <!-- // <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>  -->
  <script type="text/javascript">
//<![CDATA[
        // bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
  //]]>
  </script>



<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="script.js"></script>

  <script src="//cdn.ckeditor.com/4.5.6/full/ckeditor.js"></script>
	<script src="js/sample.js"></script>
</head>
 
<body style="margin:0px; padding:0px">
	<?php include 'menu.php' ?>

	<div style="float:left; margin-left:200px; display:block; padding-left:50px; padding-top:100px; font-family:arial; color:black;">
		<div>
			<h1>Rules</h1>
		</div>

<!-- <textarea id="editor"></textarea> -->


<textarea cols="80" rows="20" id="editor">
	<?php 
	include("config.php");
	$result = mysqli_query($con,"SELECT * FROM hdm");

				while($row = mysqli_fetch_array($result)) {
				  echo "" . $row['hdm'] . "";

				}


				mysqli_close($con);
	?>
</textarea>

<script>
	initSample();
</script>
		<!-- <textarea id="rules_text">Ahsa</textarea> -->

		<button id="submit_hdm">SAVE</button>

		

	</div>



</body>
</html>