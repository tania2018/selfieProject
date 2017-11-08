// ....................... Template Buttons selections ..........................

$(document).ready(function(){
  $("#first_temp").click(function(){
    $("#camera1").show();
    $("#camera2").hide();
    $("#camera3").hide();
    $("#camera4").hide();
    $("#camera5").hide();
  });
});


$(document).ready(function(){
  $("#second_temp").click(function(){
    $("#camera2").show();
    $("#camera1").hide();
    $("#camera3").hide();
    $("#camera4").hide();
    $("#camera5").hide();
  });
});

$(document).ready(function(){
  $("#third_temp").click(function(){
    $("#camera3").show();
    $("#camera1").hide();
    $("#camera2").hide();
    $("#camera4").hide();
    $("#camera5").hide();
  });
});

$(document).ready(function(){
  $("#fourth_temp").click(function(){
    $("#camera4").show();
    $("#camera1").hide();
    $("#camera2").hide();
    $("#camera3").hide();
    $("#camera5").hide();
  });
});

$(document).ready(function(){
  $("#fifth_temp").click(function(){
    $("#camera5").show();
    $("#camera1").hide();
    $("#camera2").hide();
    $("#camera3").hide();
    $("#camera4").hide();
  });
});

// ....................... Template Buttons selections ..........................

$(document).ready(function(){
  $("#first_temp1").click(function(){
    $("#camera1").show();
    $("#camera2").hide();
    $("#camera3").hide();
    $("#camera4").hide();
    $("#camera5").hide();
  });
});


$(document).ready(function(){
  $("#second_temp1").click(function(){
    $("#camera2").show();
    $("#camera1").hide();
    $("#camera3").hide();
    $("#camera4").hide();
    $("#camera5").hide();
  });
});

$(document).ready(function(){
  $("#third_temp1").click(function(){
    $("#camera3").show();
    $("#camera1").hide();
    $("#camera2").hide();
    $("#camera4").hide();
    $("#camera5").hide();
  });
});

$(document).ready(function(){
  $("#fourth_temp1").click(function(){
    $("#camera4").show();
    $("#camera1").hide();
    $("#camera2").hide();
    $("#camera3").hide();
    $("#camera5").hide();
  });
});

$(document).ready(function(){
  $("#fifth_temp1").click(function(){
    $("#camera5").show();
    $("#camera1").hide();
    $("#camera2").hide();
    $("#camera3").hide();
    $("#camera4").hide();
  });
});





// ........................ 1st template ...............

window.addEventListener("DOMContentLoaded", function() {
      // Grab elements, create settings, etc.
      var canvas = document.getElementById("canvas"),
        context = canvas.getContext("2d"),
        video = document.getElementById("video"),
        videoObj = { "video": true },
        errBack = function(error) {
          console.log("Video capture error: ", error.code); 
        };

      // Put video listeners into place
      if(navigator.getUserMedia) { // Standard
        navigator.getUserMedia(videoObj, function(stream) {
          video.src = stream;
          video.play();
        }, errBack);
      } else if(navigator.webkitGetUserMedia) { // WebKit-prefixed
        navigator.webkitGetUserMedia(videoObj, function(stream){
          video.src = window.webkitURL.createObjectURL(stream);
          video.play();
        }, errBack);
      } else if(navigator.mozGetUserMedia) { // WebKit-prefixed
        navigator.mozGetUserMedia(videoObj, function(stream){
          video.src = window.URL.createObjectURL(stream);
          video.play();
        }, errBack);
      }

      // Trigger photo take
      document.getElementById("snap").addEventListener("click", function() {
        context.drawImage(video, 180, 60, 200, 150);
      });
    }, false);












// ........................ 2nd template ...............

window.addEventListener("DOMContentLoaded", function() {
      // Grab elements, create settings, etc.
      var canvas = document.getElementById("canvas2"),
        context = canvas.getContext("2d"),
        video = document.getElementById("video2"),
        videoObj = { "video": true },
        errBack = function(error) {
          console.log("Video capture error: ", error.code); 
        };

      // Put video listeners into place
      if(navigator.getUserMedia) { // Standard
        navigator.getUserMedia(videoObj, function(stream) {
          video.src = stream;
          video.play();
        }, errBack);
      } else if(navigator.webkitGetUserMedia) { // WebKit-prefixed
        navigator.webkitGetUserMedia(videoObj, function(stream){
          video.src = window.webkitURL.createObjectURL(stream);
          video.play();
        }, errBack);
      } else if(navigator.mozGetUserMedia) { // WebKit-prefixed
        navigator.mozGetUserMedia(videoObj, function(stream){
          video.src = window.URL.createObjectURL(stream);
          video.play();
        }, errBack);
      }

      // Trigger photo take
      document.getElementById("snap2").addEventListener("click", function() {
        context.drawImage(video, 300, 20, 200, 150);
      });
    }, false);

// ........................ 3rd template ...............

window.addEventListener("DOMContentLoaded", function() {
      // Grab elements, create settings, etc.
      var canvas = document.getElementById("canvas3"),
        context = canvas.getContext("2d"),
        video = document.getElementById("video3"),
        videoObj = { "video": true },
        errBack = function(error) {
          console.log("Video capture error: ", error.code); 
        };

      // Put video listeners into place
      if(navigator.getUserMedia) { // Standard
        navigator.getUserMedia(videoObj, function(stream) {
          video.src = stream;
          video.play();
        }, errBack);
      } else if(navigator.webkitGetUserMedia) { // WebKit-prefixed
        navigator.webkitGetUserMedia(videoObj, function(stream){
          video.src = window.webkitURL.createObjectURL(stream);
          video.play();
        }, errBack);
      } else if(navigator.mozGetUserMedia) { // WebKit-prefixed
        navigator.mozGetUserMedia(videoObj, function(stream){
          video.src = window.URL.createObjectURL(stream);
          video.play();
        }, errBack);
      }

      // Trigger photo take
      document.getElementById("snap3").addEventListener("click", function() {
        context.drawImage(video, 200, 40, 200, 150);
      });
    }, false);


// ........................ 4th template ...............

window.addEventListener("DOMContentLoaded", function() {
      // Grab elements, create settings, etc.
      var canvas = document.getElementById("canvas4"),
        context = canvas.getContext("2d"),
        video = document.getElementById("video4"),
        videoObj = { "video": true },
        errBack = function(error) {
          console.log("Video capture error: ", error.code); 
        };

      // Put video listeners into place
      if(navigator.getUserMedia) { // Standard
        navigator.getUserMedia(videoObj, function(stream) {
          video.src = stream;
          video.play();
        }, errBack);
      } else if(navigator.webkitGetUserMedia) { // WebKit-prefixed
        navigator.webkitGetUserMedia(videoObj, function(stream){
          video.src = window.webkitURL.createObjectURL(stream);
          video.play();
        }, errBack);
      } else if(navigator.mozGetUserMedia) { // WebKit-prefixed
        navigator.mozGetUserMedia(videoObj, function(stream){
          video.src = window.URL.createObjectURL(stream);
          video.play();
        }, errBack);
      }

      // Trigger photo take
      document.getElementById("snap4").addEventListener("click", function() {
        context.drawImage(video, 200, 40, 200, 150);
      });
    }, false);

// ........................ 5th template ...............

window.addEventListener("DOMContentLoaded", function() {
      // Grab elements, create settings, etc.
      var canvas = document.getElementById("canvas5"),
        context = canvas.getContext("2d"),
        video = document.getElementById("video5"),
        videoObj = { "video": true },
        errBack = function(error) {
          console.log("Video capture error: ", error.code); 
        };

      // Put video listeners into place
      if(navigator.getUserMedia) { // Standard
        navigator.getUserMedia(videoObj, function(stream) {
          video.src = stream;
          video.play();
        }, errBack);
      } else if(navigator.webkitGetUserMedia) { // WebKit-prefixed
        navigator.webkitGetUserMedia(videoObj, function(stream){
          video.src = window.webkitURL.createObjectURL(stream);
          video.play();
        }, errBack);
      } else if(navigator.mozGetUserMedia) { // WebKit-prefixed
        navigator.mozGetUserMedia(videoObj, function(stream){
          video.src = window.URL.createObjectURL(stream);
          video.play();
        }, errBack);
      }

      // Trigger photo take
      document.getElementById("snap5").addEventListener("click", function() {
        context.drawImage(video, 150, 80, 200, 150);
      });
    }, false);


// ........... Button toggle .................
      function setVisibility(id, visibility) {
      document.getElementById(id).style.display = visibility;
      }
// ........... Button toggle ends.................
