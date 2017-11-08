<!DOCTYPE html>
<html>
<head>
  <title>Selfie Contest</title>

<link rel="icon" 
      type="image/png" 
      href="images/febicon.png">

<link href="css/style.css" rel="stylesheet">

<meta property=“og:title” content=“Bangladesh Internet Week”/>
<meta property="og:description" content="Logo Competition" />

<link rel="stylesheet" href="css/bootstrap.min.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<!-- <script src="http://maps.googleapis.com/maps/api/js"></script> -->

<!-- <script type="text/javascript" src="js/jquery.min.js"></script> -->
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<!-- <script type="text/javascript" src="facebook_login.js"></script> -->
<script type="text/javascript" src="script.js"></script>

<!-- <script type="text/javascript" src="form1.js"></script> -->







<script src="overlay_script.js"></script>

    <script type="text/javascript" src="js/html2canvas.js"></script>
    <script type="text/javascript" src="js/html2canvas.svg.js"></script>
    <script type="text/javascript" src="js/jquery.plugin.html2canvas.js"></script>


    <script type="text/javascript" src="js/jquery.cropit.js"></script>


    <script type="text/javascript">
      $(window).load(function(){

        $('#rotate1').click(function(){
            $('#layer_frame1').css({'-webkit-transform' : 'rotate(90deg)',
                         '-moz-transform' : 'rotate(90deg)',
                         '-ms-transform' : 'rotate(90deg)',
                         'transform' : 'rotate(90deg)'});
            $('#rotate1').hide();
            $('#rotate2').css({'display' : 'inline-block'});
        });

      }); 
    </script>

    <script type="text/javascript">
      $(window).load(function(){

        $('#rotate2').click(function(){
            $('#layer_frame1').css({'-webkit-transform' : 'rotate(180deg)',
                         '-moz-transform' : 'rotate(180deg)',
                         '-ms-transform' : 'rotate(180deg)',
                         'transform' : 'rotate(180deg)'});
            $('#rotate2').hide();
            $('#rotate3').css({'display' : 'inline-block'});
        });

      }); 
    </script>


    <script type="text/javascript">
      $(window).load(function(){

        $('#rotate3').click(function(){
            $('#layer_frame1').css({'-webkit-transform' : 'rotate(270deg)',
                         '-moz-transform' : 'rotate(270deg)',
                         '-ms-transform' : 'rotate(270deg)',
                         'transform' : 'rotate(270deg)'});
            $('#rotate3').hide();
            $('#rotate4').css({'display' : 'inline-block'});
        });

      }); 
    </script>


    <script type="text/javascript">
      $(window).load(function(){

        $('#rotate4').click(function(){
            $('#layer_frame1').css({'-webkit-transform' : 'rotate(360deg)',
                         '-moz-transform' : 'rotate(360deg)',
                         '-ms-transform' : 'rotate(360deg)',
                         'transform' : 'rotate(360deg)'});
            $('#rotate4').hide();
            $('#rotate1').css({'display' : 'inline-block'});
        });

      }); 
    </script>
    <style type="text/css">
#myForm{
  display: block;
}
    </style>



    <style>
      

      .cropit-preview-image-container {
        cursor: move;
      }

      .image-size-label {
        margin-top: 10px;
      }

      input, .export {
        display: block;
      }

      button {
        margin-top: 10px;
      }
    </style>








<script type="text/javascript">
$(document).ready(function() {
    $("#thought").on('keyup', function() {
        var words = this.value.match(/\S+/g).length;
        if (words > 100) {
            // Split the string on first 200 words and rejoin on spaces
            var trimmed = $(this).val().split(/\s+/, 100).join(" ");
            // Add a space at the end to keep new typing making new words
            $(this).val(trimmed + " ");
        }
        else {
            $('#display_count').text(words);
            $('#word_left').text(100-words);
        }
    });
 }); 
</script>

<script type="text/javascript">
$(document).ready(function(){
    $('[id^=phone]').keypress(validateNumber);
});

function validateNumber(event) {
    var key = window.event ? event.keyCode : event.which;
    if (event.keyCode === 8 || event.keyCode === 46) {
        return true;
    } else if ( key < 48 || key > 57 ) {
        return false;
    } else {
      return true;
    }
};
</script>



<!-- <script type="text/javascript" src="script.js"></script> -->


<script type="text/javascript">
function hover1(element) {
    element.setAttribute('src', 'images/home_bttn.png');
}
function unhover1(element) {
    element.setAttribute('src', 'images/home_bttn_inactive.png');
}

function hover2(element) {
    element.setAttribute('src', 'images/rules_bttn_active.png');
}
function unhover2(element) {
    element.setAttribute('src', 'images/rules_bttn_inactive.png');
}

function hover3(element) {
    element.setAttribute('src', 'images/gallery_bttn_active.png');
}
function unhover3(element) {
    element.setAttribute('src', 'images/gallery_bttn_inactive.png');
}

function hover4(element) {
    element.setAttribute('src', 'images/video_bttn_active.png');
}
function unhover4(element) {
    element.setAttribute('src', 'images/video_bttn_inactive.png');
}

function hover5(element) {
    element.setAttribute('src', 'images/hdm_bttn_active.png');
}
function unhover5(element) {
    element.setAttribute('src', 'images/hdm_bttn_inactive.png');
}
</script>



</head>

<body>

<header>

<div class="wraper">
    <div class="row">


  <div align=center>
    <div id="head_content">

      <div class="col-md-6">
        <img id="logo" class="img-responsive" src="images/logo.png">
      </div>
      



      <div id="navigation" class="col-md-6">

          <a href="index.php">
            <?php
              if( basename($_SERVER['PHP_SELF'], '.php') == 'index' ) {
                  echo "<img src='images/home_bttn.png'>";
              } else {
                  echo "<img src='images/home_bttn_inactive.png' onmouseover='hover1(this);' onmouseout='unhover1(this);'>";
              }
            ?>
          </a>

          <a href="rules.php">
            <?php
              if( basename($_SERVER['PHP_SELF'], '.php') == 'rules' ) {
                  echo "<img src='images/rules_bttn_active.png'>";
              } else {
                  echo "<img src='images/rules_bttn_inactive.png' onmouseover='hover2(this);' onmouseout='unhover2(this);'>";
              }
            ?>
          </a>

         <!--  <a href="gallery.php">
            <?php
              if( basename($_SERVER['PHP_SELF'], '.php') == 'gallery' ) {
                  echo "<img src='images/gallery_bttn_active.png'>";
              } else {
                  echo "<img src='images/gallery_bttn_inactive.png' onmouseover='hover3(this);' onmouseout='unhover3(this);'>";
              }
            ?>
          </a> -->

      </div>
<!--       <div>
            <?php
              if( basename($_SERVER['PHP_SELF'], '.php') == 'index' ) {
                  echo "";
              } else {
                  echo "<img id='common_upload_bttn' src='images/mnemonic_small.png'>";
              }
            ?>
        
      </div> -->
    </div>
  </div>




</div>
</div>


</header>

<!-- <div id="facebook_login_div" align=center>
  <img src="images/login_mnemonic.png">
  <a href="#" onclick="fb_login();"><img src="images/facebook_login_bttn.png"></a>
</div> -->






  <div class="wraper">
  <!-- <div align=center id="center_container"> -->
  <!-- <div id="container" class="container"> -->
    <div class="row">






