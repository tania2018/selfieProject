
$(document).ready(function (e) {
$("#myForm").on('submit',(function (e) {
e.preventDefault();
// $("#next_bttn").hide();
// $('#loading').show();


// var email = $("#email").val();
//     var atpos = email.indexOf("@");
//     var dotpos = email.lastIndexOf(".");
//     if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=email.length) {
//         alert("Not a valid e-mail address");
//         return false;
//     }


var formData = new FormData(this);

// alert(formData);
// var mood = $("#mood_drop").val();
var name = $("#name").val();
var phone = $("#phone").val();
// var email = $("#email").val();
// var thought = $("#thought").val();
var submited_logo = $("#submited_logo").val();

// alert(submited_logo);

var numbers = /^[0-9]+$/;  
      if(phone.match(numbers))  
      { 


			var allowedFirstDigits = ["019", "018", "017", "016", "015"];
			var firstDigits = phone.substring(0, 3);
			if (allowedFirstDigits.indexOf(firstDigits) < 0) {
			    alert("Not a Valid Phone Number");
				return false; 
			}
			else {


			    // First threee digits OK
			    if(phone.length != 11) { 
				   alert("Must Be 11 digits");
				   return false; 
				} else {
				  // alert("yep, its 10 digits");
				} 


			}

		
		}else{
			alert("Not a Valid Phone Number");
			return false; 
		}










if($("#agreebox").is(':checked'))
    {}
else{
	alert("Please Check Agree to Terms and Conditions");
	die();
}
    

// alert(img);

// var dataString = 'img1='+ img1;


if(name==''||phone==''||submited_logo=='')
{
alert("Please fill all the required fields");
}
else
{
document.getElementById("uploading").style.display = "block";
// alert("i am here");
				// ................... 1st ajax start .............
				$.ajax({
				url: "save.php", // Url to which the request is send
				type: "POST",             // Type of request to be send, called as method
				data: formData, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
				contentType: false,       // The content type used when sending data to the server.
				cache: false,             // To unable request pages to be cached
				processData:false,        // To send DOMDocument or non processed data file it is set to false
				success: function(data)   // A function to be called if request succeeds
										{
// alert(data);
// die();

											if (data=="error") {
												alert("There is some problem")
											}else{

												if (data==1) {
													alert("You Already Submited 3 times with this Phone Number")
													return false;
												}else{

													document.getElementById("uploading").style.display = "none";

													window.location.href = 'congo_page.php?img=' + data;
												}
													
													
												}

										}
						});
				// ................... 1st ajax end .............
				}
			










}));





});

