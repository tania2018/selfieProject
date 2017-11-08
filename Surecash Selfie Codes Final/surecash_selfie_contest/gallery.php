<?php include"header.php" ?>

<div class="col-md-1"></div>

<div class="col-md-10" align=center>
<div id="gallery_div">
	<h1>গ্যালারি</h1>

<!-- .............. Voting Form .............. -->
<input type="hidden" value="" id="logo_id">
<div id="fb_id_div"></div>
<div id="vote_submition" class="hidden">VOTE SUBMISION</div>
<!-- .............. Voting Form Ends .............. -->

	<div>


		<script>
			$(document).ready(function(){
			$('#share_button').click(function(e){
			e.preventDefault();
			FB.ui(
			{
			method: 'feed',
			name: 'I Liked this Logo what about you??',
			link: 'http://magnitolab.com/a2i_logo_competition/gallery.php',
			picture: 'http://magnitolab.com/a2i_logo_competition//upload/aa1450461534.jpg',
			caption: 'This is the content of the "caption" field.',
			description: 'This is the content of the "description" field, below the caption.',
			message: ''
			});
			});
			});
		</script>


		<script>
		// function vote1() {
		// 	document.getElementById('logo_id').value = "1";
		// 	$("#vote_submition").click();
		// }
		</script>



		<!-- <div id="logo_container" onClick="javascript:window.open('upload/aa1450461534.jpg', '_blank','toolbar=no');">
			<div id="logo_frame">
				<div id="logo_thumb" style="background-image:url('upload/aa1450461534.jpg')"></div>
			</div>
			<div id="buttons">
				<img class="vote_bttn" src="images/vote_bttn.png" onclick="vote1();">
				<img class="share_bttn" src="images/share_bttn.png">
			</div>
		</div> -->


		<?php 
		include("CMS/config.php");
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
$start_from = ($page-1) * 12; 
$sql = "SELECT * FROM logo ORDER BY id DESC LIMIT $start_from, 12"; 
$rs_result = mysqli_query ($con,$sql); 


while ($row = mysqli_fetch_assoc($rs_result)) {


			echo "<script>";
			echo "$(document).ready(function(){";
			echo "$('#share_button". $row['id'] ."').click(function(e){";
			echo "e.preventDefault();";
			echo "FB.ui(";
			echo "{";
			echo "method: 'feed',"; 
			echo "name: 'I loved this logo very much!',"; 
			echo "link: '".$server."gallery.php',"; 
			echo "picture: '".$server."upload/". $row['pic'] ."',"; 
			// echo "caption: 'This is the content of the caption field.',"; 
			echo "description: 'Please join the national logo design competition for Human Development Media (HDM)',"; 
			echo "message: ''"; 
			echo "});";
			echo "});";
			echo "});";
			echo "</script>";

			echo "<script>";
			echo "function vote". $row['id'] ."() {document.getElementById('logo_id').value = ". $row['id'] .";";
			echo "$('#vote_submition').click();}";
			echo "</script> ";

            echo "<div id='logo_container'>";
			// echo "<div id='logo_frame' onClick='javascript:window.open(\"upload/". $row[pic] ."\", \"_blank\", \"toolbar=no\");' >";
			echo "<div id='logo_frame'>";
			echo "<div id='logo_thumb' style='background-image:url(upload/". $row['pic'] .")'></div>";
			echo "<div id='gallery_info'>Name: ". $row['name'] ."</div>";
			echo "<div id='gallery_info'> Phone: ". $row['phone'] ."</div>";
			echo "<div id='gallery_info'>UUID: ". $row['uuid'] ."</div>";
			echo "<div id='gallery_info'> Device Model: ". $row['deviceModel'] ."</div>";
			echo "</div>";
			echo "<div id='buttons'>";
			// echo "<img class='vote_bttn' src='images/vote_bttn.png' onclick='vote". $row['id'] ."()'>";
			// echo "<img class='share_bttn' id='share_button". $row['id'] ."' src='images/share_bttn.png'>";
			echo "</div>";
		    echo "</div>";
}; 
?> 
<div id="page_numbers">

<?php
$phpself = $_SERVER['PHP_SELF'];

//if the current page is greater than 1, that is, it isn't the first page

//then we print first and previous links

if ($page > 1)

{

$pagelol = $page - 1;

$prev = " <a href=\"$phpself?page=$pagelol\" title=\"Page $pagelol\"> < </a> ";

$first = " <a href=\"$phpself?page=1\" title=\"Page 1\"><<   </a> ";




}

else

//otherwise we do not print a link, because the current page is

//the first page, and there are no previous pages

{}


$sql = "SELECT COUNT(id) FROM logo"; 
$rs_result = mysqli_query($con,$sql); 
$row = mysqli_fetch_row($rs_result); 
$total_records = $row[0]; 
$lastPage = ceil($total_records / 12); 

if ($page < $lastPage)

{

$pagelol = $page + 1;

$next = " <a href=\"$phpself?page=$pagelol\" title=\"Page $pagelol\"> > </a> ";

$last = " <a href=\"$phpself?page=$lastPage\" title=\"Page $lastPage\"> >> </a> ";

}

//the current page is the last page, so we don't print links for

//the last and next pages, there is of course no next page.

else

{

}

//We print the links depending on our selections above

echo " Showing page <bold id='current_page'>$page</bold> of

<bold>$lastPage</bold> pages </br>";

echo $first;
echo $prev;


?>





Page: 


<?php 
$sql = "SELECT COUNT(id) FROM logo"; 
$rs_result = mysqli_query($con,$sql); 
$row = mysqli_fetch_row($rs_result); 
$total_records = $row[0]; 
$total_pages = ceil($total_records / 12); 
  
for ($i=1; $i<=$total_pages; $i++) { 
            echo "<a href='gallery.php?page=".$i."'>".$i."</a> "; 
}; 

echo $next;
echo $last;

?>


</div>




	</div>
	

</div>





</div>
<div class="col-md-1"></div>




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
