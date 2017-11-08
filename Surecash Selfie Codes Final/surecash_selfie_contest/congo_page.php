<?php include"header.php" ?>








<div class="col-md-2"></div>
<div id="congo_div" class="col-md-8">
	<h2>
		অভিনন্দন!</br>
		আপনার ছবি জমা দেওয়া হয়েছে।
	</h2>
	</br>
	<h2>
		প্রতিযোগিতায় অংশগ্রহণের জন্য ফেসবুকে শেয়ার করুন।
	</h2>

</br>

	<!-- <img class="img-responsive" id="fb_share" src="images/facebook_share_bttn.png"> -->

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=237485620003298";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<?php 
// echo $_GET['img'];
include("CMS/config.php");

echo '<div class="fb-share-button" data-href="'.$server.'upload/'.$_GET['img'].'" data-layout="button" data-size="large" data-mobile-iframe="false">';

echo '<a class="fb-xfbml-parse-ignore" target="_blank" href="'.$server.'upload/'.$_GET['img'].'"></a>';

?>


  
</div>



</div>
<div class="col-md-2"></div>
  	


<script>
document.getElementById('shareBtn').onclick = function() {
  FB.ui({
    method: 'share',
    display: 'popup',
    href: 'https://developers.facebook.com/docs/',
    hashtag: '#SelfiewithSureCash',
  }, function(response){});
}
</script>


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
