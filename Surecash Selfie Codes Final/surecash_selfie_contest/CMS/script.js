$(document).ready(function(){
$("#submit").click(function(){

// var rules_text = $("#rules_text").val();

var notes = CKEDITOR.instances.editor.getData();

// var notes = nicInstance.getContent();

// alert(notes);

// alert(rules_text);



// Returns successful data submission message when the entered information is stored in database.
var dataString = 'notes='+ notes;


if(notes=='')
{
alert("Nothing to Save");
}
else
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "text_save.php",
data: dataString,
cache: false,
success: function(result){
if (result=="") {
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





// ............................. HDM .......................



$(document).ready(function(){
$("#submit_hdm").click(function(){

// var rules_text = $("#rules_text").val();

var notes = CKEDITOR.instances.editor.getData();

// var notes = nicInstance.getContent();

// alert(notes);

// alert(rules_text);



// Returns successful data submission message when the entered information is stored in database.
var dataString = 'notes='+ notes;


if(notes=='')
{
alert("Nothing to Save");
}
else
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "text_save_hdm.php",
data: dataString,
cache: false,
success: function(result){
if (result=="") {
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







// ............................. Show By Date .......................



$(document).ready(function(){
$("#show_by_date").click(function(){

// var rules_text = $("#rules_text").val();

var date = $("#date").val();

// var notes = nicInstance.getContent();

// alert(date);

// alert(rules_text);



// Returns successful data submission message when the entered information is stored in database.
var dataString = 'date='+ date;


if(date=='')
{
alert("Nothing to Save");
}
else
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "show_date.php",
data: dataString,
cache: false,
success: function(result){
if (result=="") {
	alert("Sorry you already voted this Logo")
}else{
	document.getElementById("date_show_div").innerHTML = result;
	// alert(result);
	// location.reload();
};



}

});

}
return false;
});
});

