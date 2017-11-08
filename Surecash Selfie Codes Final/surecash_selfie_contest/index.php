<?php include"header.php" ?>


  

    <div id="center_images" class="col-md-6">



      <div align=center>
        <!-- <div id="pop_up_back"></div> -->

        <div id="pop_up_form" align=center>

          <!-- <img id="pop_up_close" src="images/close_bttn.png"> -->

          <!-- <div><h1>Submit your design</h1></div> -->



          <!-- <form id="myForm" action="" method="post" enctype="multipart/form-data">

            <div id="form_left">
              <input type="text" placeholder="Name / নাম" name="name" id="name">
              <input type="tel"  maxlength="11" placeholder="Phone Number / ফোন নাম্বার" name="phone" id="phone"> -->
              <!-- <input id="phone" name="phone" type="text" placeholder="Phone Number" onkeypress='return event.charCode >= 48 && event.charCode <= 57'></input> -->

              <!-- <input type="text" placeholder="Email" name="email" id="email"> -->
              <!-- <textarea placeholder="Thoughts about the logo (100 words)" id="thought" rows="5" name="thought"></textarea> -->
              <!-- <div id="word_counter">
                Total Words: <span id="display_count">0</span> Remaining Words: <span id="word_left">100</span>
              </div> -->

            <!-- </div> -->



            <div id="form_right">
              <!-- <div id="display_div">
                <img id="placeholder2" src="images/no_image.png" style="width:100%;">
              </div>
              <input id="submited_logo" type="file" onchange="readURL(this);" name="file"> -->





<div class="image-editor" id="image-editor">
      <input type="file" class="cropit-image-input hidden" name="file" id="file" onchange="readURL(this)">
      <div class="cropit-preview"></div>
      <div class="image-size-label">
        Resize image
      </div>


      <input type="range" class="cropit-image-zoom-input">
      <!-- <button class="rotate-ccw">Rotate counterclockwise</button> -->
      <!-- <button class="rotate-cw"><img src="images/rotateicon.png"></button> -->
      <img class="rotate-ccw" src="images/rotate_left.png">
      <img class="rotate-cw" src="images/rotate_right.png">


      <!-- <button class="export">Export</button> -->

      <img class="export" src="images/dload.png">


    </div>

    <script>
      $(function() {
        $('.image-editor').cropit({
          imageState: {
            // src: 'http://lorempixel.com/500/400/',
          },
        });

        $('.rotate-cw').click(function() {
          $('.image-editor').cropit('rotateCW');
        });
        $('.rotate-ccw').click(function() {
          $('.image-editor').cropit('rotateCCW');
        });

        $('.export').click(function() {
          var imageData = $('.image-editor').cropit('export');
          // window.open(imageData);
          $('#layer_frame1').css("background", "url(" + imageData + ")");
          $('#layer_frame1').css("background-size", "cover");
          $('#image-editor').css("display", "none");
        });
      });
    </script>
    

    

    

    



    <!-- <input type="file" class="hidden" name="file" id="file" onchange="readURL(this)" /> -->

    <form id="myForm" action="" method="post" enctype="multipart/form-data">
      <?php 
        echo '<input type="hidden" name="uuid" id="uuid" value="'.$_GET['uuid'].'">';
        echo '<input type="hidden" name="deviceModel" id="deviceModel" value="'.$_GET['deviceModel'].'">';
      ?>
      <input type="text" placeholder="Name / নাম" name="name" id="name">
      <input type="tel"  maxlength="11" placeholder="Phone Number / ফোন নাম্বার" name="phone" id="phone">
      <input type="hidden" name="img_val" id="img_val" value="" />



    <div id="photo_frame">
      
    <!-- <div id="click_msg">Click here to Add your photo</div> -->
        <div id="layer_frame1"></div>
        <!-- <img id="layer_frame1" src="images/back.png"> -->
        <!-- <div id="layer_frame"></div> -->

        <!-- <img id="layer_frame" src="images/frame.png"> -->
    </div>

    <div id="browse">Upload Photo / ছবি নির্বাচন করুন</div>

    <!-- <div id="loading"><img src="images/loading.gif"></div> -->

            <div id="rotate1" class="rotate"><img src="images/rotateicon.png"></div>
    <div id="rotate2" class="rotate"><img src="images/rotateicon.png"></div>
    <div id="rotate3" class="rotate"><img src="images/rotateicon.png"></div>
    <div id="rotate4" class="rotate"><img src="images/rotateicon.png"></div>

              <div class="agree_box">

                <input type="checkbox" id="agreebox" name="agreebox" style="display:inline;">

                I Agree to the Terms and Conditions / আমি নিয়মাবলীর সাথে একমত
              </div>

               <div id="uploading">
                  <img class="img-responsive" src="images/uploading.gif">
                  <h4>Uploading</h4>
               </div>

   

    





      <?php 
      include 'CMS/config.php';
      $time = time();
      $fb = "".$server."actioncam/".$time.".jpg";
      echo "<input type='text' class='hidden' name='img_name' id='img_name' value='".$time.".jpg' />";

      echo "<div id='share_div'>";
      echo '<a href="actioncam/' . $time . '.jpg" download="propic.jpg" target="_blank"><img id="dload_button" src="images/dload_bttn.png"></a>';
      // echo '<a href="http://www.facebook.com/sharer.php?u='. $fb . '" target="_blank"><img src="images/fb_icon.png" alt="Facebook" /></a>';
      // echo '<a href="http://twitter.com/share?hashtags=EasyNetConnected&url='. $fb . '" target="_blank"><img src="images/tw_icon.png" alt="Twitter" /></a>';
      echo "</div>";
      ?>
      <input type="submit" class="hidden" id="submit">
    </form>



    
 <input id="next_bttn" type="image" src="" value="Submit / সাবমিট করুন" onclick="capture_div();"/>





  </div>















              <!-- <div id="browse">Upload Photo / ছবি নির্বাচন করুন</div>

              <div class="agree_box">

                <input type="checkbox" id="agreebox" name="agreebox">

                I Agree to the Terms and Conditions / আমি নিয়মাবলীর সাথে একমত
              </div>

               <div id="uploading">
                  <img class="img-responsive" src="images/uploading.gif">
                  <h4>Uploading</h4>
               </div>

              <div id="submit">Submit / সাবমিট করুন</div>
              <input type="submit" class="hidden" id="logo_submit">
              <img class="hidden" id="loading" src="images/loading.gif">
            </div>

        </form> -->
          
        </div>
      </div>


      
    </div>

    <div id="center_images" class="col-md-6">
<!--       <img id="participate_now" src="images/participate_now.png">
      <img id="home_cartoon" src="images/home_cartoons.png"> -->
      <img  class="img-responsive" src="images/players.png">
    </div>






<?php 
include"footer.php" 
?>






<script type="text/javascript">
 function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    // $('#photo_frame').css("background", "url('images/frame.png'), url(" + this.result + ")");
                    // $('#photo_frame').css("background-size", "cover");
                    // $('#layer_frame1').css("background", "url(" + this.result + ")");
                    // $('#layer_frame1').css("background-size", "cover");

                    // $('#click_msg').css("display", "none");

                    $('#image-editor').css("display", "block");

                    $('#next_bttn').css("display", "block");
                    $('#rotate1').css("display", "inline-block");
                    $("#share_div").css('display', 'none');
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>

 <script type="text/javascript">
// $("#next_bttn").click(function(){
//    $("#next_bttn").hide();
// $('#loading').show();
// $("#rotate1").css('display', 'none');
//                                             $("#rotate2").css('display', 'none');
//                                             $("#rotate3").css('display', 'none');
//                                             $("#rotate4").css('display', 'none');
// });
// </script>


<script type="text/javascript">
$("#photo_frame").click(function(){
   $("#file").click();
});
</script>

<script type="text/javascript">
$("#browse").click(function(){
   $("#file").click();
});
</script>




<script type="text/javascript">
  function capture_div(){
    $('#photo_frame').html2canvas({
      onrendered: function (canvas) {
                //Set hidden field's value to image data (base-64 string)
         $('#img_val').val(canvas.toDataURL("image/png"));


// $("#next_bttn").hide();
// $('#loading').show();
$("#rotate1").css('display', 'none');
                                            $("#rotate2").css('display', 'none');
                                            $("#rotate3").css('display', 'none');
                                            $("#rotate4").css('display', 'none');

                //Submit the form manually
        // document.getElementById("myForm").submit();
        $("#submit").click();
      }
    });
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