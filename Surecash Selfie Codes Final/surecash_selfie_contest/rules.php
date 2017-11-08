<?php include"header.php" ?>


<div class="col-md-2"></div>
<div id="rules_div" class="col-md-8">
	<?php 
	include("CMS/config.php");
	$result = mysqli_query($con,"SELECT * FROM rules");

				while($row = mysqli_fetch_array($result)) {
				  echo "" . $row['rules'] . "";

				}


				mysqli_close($con);
	?>
</div>
<div class="col-md-2"></div>
  	



<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-55035487-18', 'auto');
  ga('send', 'pageview');

</script>



<?php 
// include"footer.php" 
?>
