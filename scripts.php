<?php if(!isset($TIMEZONE))
{
  $TIMEZONE = 0;
}
?>
<!-- Put all JQuery and other script here. -->
<script type="text/javascript">

// Div animation options
AOS.init({duration: 1200});

// Displays information when hovering over countries
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
// Sets the Zoom as active on the world map view.
$(document).ready(function() {
    $("#element").zoomTarget();
});

// Sets a delay on the world map URL's so the animation can play out.
function delay (URL) { setTimeout( function() { window.location = URL }, 500 );}

// Full screen loading activator.
$(document).ready(function() { $(".animsition").animsition();}); 

// Moment.JS function. Gets the time for a specific location.
$(document).ready(function() {
  var timezone = '<?php echo $TIMEZONE ?>';
  if (timezone !== null) {
    // instantiate a moment object
    var NowMoment = moment().utcOffset(<?php echo $TIMEZONE ?>).format('llll');
    // instantiate a JavaScript Date object
    //  var NowDate = new Date();
    // display value of moment object in #displayMoment div
    var eDisplayMoment = document.getElementById('displayMoment');
    eDisplayMoment.innerHTML = NowMoment;
    // display value of Date object in #displayJsDate div
    var eDisplayDate = document.getElementById('displayJsDate');
    console.log(timezone);
  };
});


<?php if(!isset($CITY)){
  $CITY = 'London';
}
?>
// Set the city page to a variable for JSON / AJAX 
var cityInput = '<?php echo $CITY ?>';
// If the city name is not empty:
if (cityInput !== null) {

// Create a function that gets the city details via weather API.
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
  $('#weather').append(data.main.temp + ' °C');
});       
}

$(document).ready(function() {
  getWeather(cityInput, 'Callback');
  }); 
};

</script>

</body> <!-- DO NOT DELETE BODY TAG!!! No content below this line. Body start tag is in the header.php file. -->