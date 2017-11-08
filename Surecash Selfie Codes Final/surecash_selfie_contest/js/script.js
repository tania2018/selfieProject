$(document).ready(function(){
$("#submit").click(function(){

// alert("HERE");
// die();


    var email = $("#email").val();
    var atpos = email.indexOf("@");
    var dotpos = email.lastIndexOf(".");
    if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=email.length) {
        alert("Not a valid e-mail address");
        return false;
    }




// function getCheckedCheckboxesFor(checkboxName) {
//     var checkboxes = document.querySelectorAll('input[name="' + checkboxName + '"]:checked'), values = [];
//     Array.prototype.forEach.call(checkboxes, function(el) {
//         values.push(el.value);
//     });
//     return values;
// }

// alert(getCheckedCheckboxesFor('ans1'));

// var ans1 = getCheckedCheckboxesFor('ans1');

// var ans2 = $("#ans2").val();

var ans1 = $('input[name=ans1]:radio:checked').val();

var ans2 = $('input[name=ans2]:radio:checked').val();

// var ans5 = $('input[name=ans5]:radio:checked').val();

var ans3 = $("#ans3").val();
var name = $("#name").val();
var address = $("#address").val();
var phone = $("#phone").val();
var email = $("#email").val();
var image = $("#thumbnail").val();



// Returns successful data submission message when the entered information is stored in database.
var dataString = 'ans1='+ ans1 + '&ans2='+ ans2 + '&ans3='+ ans3 + '&name='+ name + '&phone='+ phone + '&email='+ email + '&address='+ address + '&image='+ image;


if(ans1==''||ans2==''||ans3==''||name==''||phone==''||email==''||address=='')
{
alert("Please Fill All Fields");
}
else
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "quize_submit.php",
data: dataString,
cache: false,
success: function(result){
if(result==1) {alert("You already claimed your reward today. Please come back tommorow.");}else{
// window.location.href ="index.html";
// $("#form").css('visibility', 'hidden');
$( "#container" ).animate({
    opacity: 0.25,
    height: "toggle",
  }, 1000);
$( "#thankyou" ).animate({
    opacity: 1,
  }, 1000);}
}


});
}
 

return false;
});
});

