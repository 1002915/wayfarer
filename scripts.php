<!-- Put all JQuery and other script here. -->
<script type="text/javascript">
  $(".modal_trigger").leanModal({top: 40, overlay:1, closeButton: ".modal_close" });

  $(function(){
          // Calling REGISTER Form
    $(".loginbutton").click(function(){
      $("#register-form").hide();
      $("#files_modal").hide();
      $("#login-modal").show();
      $(".title_span").text('Register');
      return false;
    });
      // Calling REGISTER Form
    $(".registerbutton").click(function(){
      $("#register-form").show();
      $("#files_modal").hide();
      $("#login-modal").hide();
      $(".title_span").text('Register');
      return false;
    });
    // Calling REGISTER Form
    $(".register").click(function(){
      $("#register-form").show();
      $("#files_modal").hide();
      $("#login-modal").hide();
      $(".title_span").text('Register');
      return false;
    });
  })
</script>
<script>
// Displays information when hovering over countries
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
// Sets the Zoom as active on the world map view.
$(document).ready(function() {
    $("#element").zoomTarget();
});

// Sets a delay on the world map URL's so the animation can play out.
function delay (URL) {
    setTimeout( function() { window.location = URL }, 500 );
}

    $(document).ready(function() {
      $(".animsition").animsition();
    }); 


// Moment.JS function.
$(document).ready(function() {
  if (timezone !== null) {
    var timezone = '<?php echo $cityTimezone ?>';
    // instantiate a moment object
    var NowMoment = moment().subtract( 10, 'hours');
    // instantiate a JavaScript Date object
    var NowDate = new Date();
    // display value of moment object in #displayMoment div
    var eDisplayMoment = document.getElementById('displayMoment');
    eDisplayMoment.innerHTML = NowMoment;
    // display value of Date object in #displayJsDate div
    var eDisplayDate = document.getElementById('displayJsDate');
  };
});


// Set the city page to a variable for JSON / AJAX 
var cityInput = '<?php echo $cityName ?>';
// If the city name is not empty:
if (cityInput !== null) {

function getWeather(cityInput, callback) {
  var city = cityInput;
  var format = '&units=metric';
  var apikey = '&appid=081cd01d8e673a2fae8ea192acd8715b';
  var url = 'http://api.openweathermap.org/data/2.5/weather?q=' + city + format + apikey;

  $.ajax({
    dataType: "json",
    url: url,
    jsonCallback: 'json',
    data: { 'main': 'temp' },
    cache: false,
    success: function (data) {
      console.log(url);
      console.log(data.main.temp);
    }
  }).done(function ( data ) {
  $('#weather').append(data.main.temp + ' Degrees C');
});       
}

$(document).ready(function() {
  getWeather(cityInput, 'Callback');
  }); 
};

</script>

</body> <!-- DO NOT DELETE BODY TAG!!! No content below this line. Body start tag is in the header.php file. -->