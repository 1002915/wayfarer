<?php 
$cityTimezone = 10;
$population = '8.764 Million (2015)';
$beerCost = '£4.50 = ($8.71 AUD)';

?>
<img class="vector-skyline" src="images/cities/london.svg">
</div></div>
<div class="information-container">
<div class="information-block">
    <div class="catchy-title">
        <h6>LONDON: The capital of England and the United Kingdom</h6>
    </div>
</div>

<div class="country-big-info-block">
    <span> Local Time:<div id="displayMoment"></div></span><br>
    <span> Current Temp:<div id="weather"> </div></span><br>
    <span> Population: <?php echo $population; ?></span><br><br>
    <span> Average pint cost: <?php echo $beerCost; ?> </span><br><br>
    <span> <?php setDescription($cityName); ?></span>
</div><BR><BR><BR><BR>

<div class="catchy-title">
    <h6>Reviews</h6>
</div>

<div class="review-area-container">
  

</div></div>