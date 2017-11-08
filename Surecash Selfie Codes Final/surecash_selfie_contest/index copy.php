<!DOCTYPE html>
<html>
<head>
  <title>WID</title>

<link rel="icon" 
      type="image/png" 
      href="images/febicon.png">

<link href="css/style.css" rel="stylesheet">
<link href="css/looper.css" rel="stylesheet">

<!-- <script src="http://maps.googleapis.com/maps/api/js"></script> -->

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="form1.js"></script>
<script type="text/javascript" src="js/html2canvas.js"></script>
<script type="text/javascript" src="js/jquery.plugin.html2canvas.js"></script>
<!-- <script type="text/javascript" src="script.js"></script> -->

<script>
$(document).ready(function(){
  $("#player1").click(function(){
    $("#player1_info").show();
    $("#pop_back").show();
  });
});
</script>




</head>

<body>
  <div align=center>
  <div id="container">

    <div id="photo_frame">
      <div id="gp_logo">
        <img src="images/angel_logo.png">
      </div>
      <img id="hand" src="images/hand.png">
      <img id="seal" src="images/seal.png">
      <!-- <div id="uimg"></div> -->
    </div>

<form id="form_recipi_1" action="" method="post" enctype="multipart/form-data">
  <input type="file" class="hidden" name="file" id="file" onchange="submit_f()"/>
  <input type="submit" class="hidden" id="submit">
</form>




<form method="POST" enctype="multipart/form-data" action="save.php" id="myForm">
  <input type="hidden" name="img_val" id="img_val" value="" />
</form>

<input id="" type="image" src="images/dload.png" value="Download" onclick="capture();" download="wid.jpg"/>



<input type='file' onchange="readURL(this);" />
    <img id="blah" src="#" alt="your image" />



  </div>
  </div>
</body>


<script type="text/javascript">
 function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>





<script>
function submit_f() {
  $("#submit").click();
  // alert("here");
}
</script>

<script type="text/javascript">
$("#photo_frame").click(function(){
   $("#file").click();
});
</script>




<script type="text/javascript">
  function capture() {
    $('#photo_frame').html2canvas({
      onrendered: function (canvas) {
                //Set hidden field's value to image data (base-64 string)
         $('#img_val').val(canvas.toDataURL("image/png"));


                //Submit the form manually
        document.getElementById("myForm").submit();
      }
    });
  }
  </script>



</html>
