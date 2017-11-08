<?php include"header.php" ?>



<div id="rules_div">
	<?php 
	include("CMS/config.php");
	$result = mysqli_query($con,"SELECT * FROM hdm");

				while($row = mysqli_fetch_array($result)) {
				  echo "" . $row['hdm'] . "";

				}


				mysqli_close($con);
	?>
</div>
  	


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-55035487-9', 'auto');
  ga('send', 'pageview');

</script>




<?php include"footer.php" ?>
