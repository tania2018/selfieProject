$(document).ready(function(){
$("#vote_submition").click(function(){

var fb_id = $("#fb_id").val();
var logo_id = $("#logo_id").val();






// Returns successful data submission message when the entered information is stored in database.
var dataString = 'fb_id='+ fb_id + '&logo_id='+ logo_id;


if(fb_id=='')
{
alert("Sorry You cant Vote");
}
else
{

// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "vote.php",
data: dataString,
cache: false,
success: function(result){

if (result=="			voted") {
	alert("Sorry you already voted this Logo")
}else{

	alert(result);
	location.reload();
};



}

});

}
return false;
});
});

