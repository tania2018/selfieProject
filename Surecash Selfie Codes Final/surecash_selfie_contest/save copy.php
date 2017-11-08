
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=877216068976908&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<meta property=“og:title” content=“This is the Title of the Page”/>
<meta property="og:description" content="#cholobangladesh" />

<script type="text/javascript" src="js/jquery.min.js"></script>

<body style="background-color:#00ace7; ">
<?php
//Get the base-64 string from data
$filteredData=substr($_POST['img_val'], strpos($_POST['img_val'], ",")+1);

//Decode the string
$unencodedData=base64_decode($filteredData);
$date = "actioncam/".time()."".".jpg";


//Save the image
file_put_contents($date, $unencodedData);
?>

<div align=center>

<?php
//Show the image
echo '<img style="width:320px;" src="'.$_POST['img_val'].'" />';
?>

</div>

<div style="padding-top:50px;" align=center>
<?php include 'CMS/config.php'; ?>
<?php

$fb = "".$server."".$date."";

echo '<a href="' . $date . '" download="cam.jpg" target="_blank"><img style="width:65px;" src="images/download_button.png"></a>';


echo '<a href="http://www.facebook.com/sharer.php?u='. $fb . '" target="_blank"><img src="http://www.simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" /></a>';

echo '<a href="http://twitter.com/share?hashtags=cholobangladesh&url='. $fb . '" target="_blank"><img src="http://www.simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" /></a>';
?>

</div>
</body>


