<div align=center id="form1">
		

		<div id="input_title">Name</div>

			<div style="height:10px;"></div>

		<input id="name" type="text" placeholder="" name="name">

			<div style="height:30px;"></div>


		<div id="input_title">Phone Number</div>

			<div style="height:10px;"></div>

		<input id="phone" type="text" placeholder="" name="phone">


			<div style="height:30px;"></div>

		<div id="input_title">Email</div>

			<div style="height:10px;"></div>

		<input id="email" type="text" placeholder="">


			<div style="height:30px;"></div>

		<div id="input_title">Address</div>

			<div style="height:10px;"></div>

		<input id="address" type="text" placeholder="">


			<div style="height:30px;"></div>

			
		<!-- <button id="submit_r1" type="button" value=""> সাবমিট </button> -->
		<input type="submit" value="সাবমিট">
		
		<div class="progress">
              <h4 id='loading' >loading.. <div class="percent">0%</div></h4> 
            </div>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
<script src="http://malsup.github.com/jquery.form.js"></script>
<script>
(function() {

var bar = $('.bar');
var percent = $('.percent');
var status = $('#status');

$('form').ajaxForm({
    beforeSend: function() {
        status.empty();
        var percentVal = '0%';
        bar.width(percentVal)
        percent.html(percentVal);
    },
    uploadProgress: function(event, position, total, percentComplete) {
        var percentVal = percentComplete + '% Completed';
        bar.width(percentVal)
        percent.html(percentVal);
    },
    complete: function(xhr) {
     bar.width("100%");
    percent.html("100% Completed");
        status.html(xhr.responseText);
    }
}); 

})();       
</script>