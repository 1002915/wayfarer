<?php 

$cityTimezone = 10;
$population = '8.764 Million (2015)';
$beerCost = '£4.50 = ($8.71 AUD)';
?>

	    <div class="catchy-title">
	        <?php setTitle($cityName); ?>,
	        <div class="sub-heading">United Kingdom</div>
	    </div>
			<img class="vector-skyline" src="images/cities/<?php setImage($cityName); ?>.svg">

<div class="ig-grid" data-aos="fade-up"> <!-- INFOGRAPHIC START HERE -->

	<div class="ig-title" data-aos="fade-right">
		<h6>We thought you should know...</h6>
	</div>
		<div class="ig-row" data-aos="fade-up">
			<div class="ig-item-4">
				<div class="ig-img">
					<img class="ig-info-icon-4" src="images/icons/weather.png">
				</div>
				<div class="ig-info"><span><div id="weather"> </div></span><br>
				</div>
			</div>
			<div class="ig-item-4">
				<div class="ig-img">
					<img class="ig-info-icon-4" src="images/icons/time.png">
				</div>
				<div class="ig-info"><span><div id="displayMoment"></div></span><br>
				</div>
			</div>
			<div class="ig-item-4">
				<div class="ig-img">
					<img class="ig-info-icon-4" src="images/icons/speak.png">
				</div>
				<div class="ig-info">English
				</div>
			</div>
			<div class="ig-item-4">
				<div class="ig-img">
					<img class="ig-info-icon-4" src="images/icons/passport.png">
				</div>
				<div class="ig-info">Passport
				</div>
			</div>
		</div>

	<div class="ig-title" data-aos="fade-right">
		<h6>And you should go see...</h6>
	</div>
	
		<div class="ig-row" data-aos="fade-up">
			<div class="ig-item-2">
				<div class="ig-img-2">
					<img class="ig-info-icon-4" src="images/placeholder2.png">
				</div>
				<div class="info-container">
					<div class="ig-info ig-2">Buckingham Palace</div>
					<div class="ig-info ig-small">the London residence and administrative headquarters of the reigning monarch of the United Kingdom.</div>
				</div>
			</div>

			<div class="ig-item-2">
				<div class="ig-img-2">
					<img class="ig-info-icon-4" src="images/placeholder2.png">
				</div>
				<div class="info-container">
					<div class="ig-info ig-2">London Eye</div>
					<div class="ig-info ig-small">One of the worlds largest Ferris Wheels. Gives a perfect view of London.</div>
				</div>
			</div>
		</div>
		<div class="ig-row" data-aos="fade-up">
			<div class="ig-item-2">
				<div class="ig-img-2">
					<img class="ig-info-icon-4" src="images/placeholder2.png">
				</div>
				<div class="info-container">
					<div class="ig-info ig-2">Tower Bridge</div>
					<div class="ig-info ig-small">Often mistaken for London Bridge. One of London's most famous landmarks.</div>
				</div>
			</div>
			<div class="ig-item-2">
				<div class="ig-img-2">
					<img class="ig-info-icon-4" src="images/placeholder2.png">
				</div>
				<div class="info-container">
					<div class="ig-info ig-2">Tower of London</div>
					<div class="ig-info ig-small">The bridge crosses the River Thames close to the Tower of London and has become an iconic symbol of London.</div>
				</div>
			</div>
		</div>
	
	<div class="ig-title" data-aos="fade-right"">
		<h6>But don't forget..</h6>
	</div>

		<div class="ig-row" data-aos="fade-up">
			<div class="ig-item-3">
				<div class="ig-img-3">
					<img class="ig-info-icon-4" src="images/icons/tip.png">
				</div>
				<div class="ig-info">Tipping isn't required, unless service is outstanding
				</div>
			</div>
			<div class="ig-item-3">
				<div class="ig-img-3">
					<img class="ig-info-icon-4" src="images/icons/tourist.png">
				</div>
				<div class="ig-info">Peak tourist months are June - August
				</div>
			</div>
			<div class="ig-item-3">
				<div class="ig-img-3">
					<img class="ig-info-icon-4" src="images/icons/currency.png">
				</div>
				<div class="ig-info">A beer will cost about <?php echo $beerCost; ?>
				</div>
			</div>
		</div>

	<div class="ig-title" data-aos="fade-right">
		<h6>And you've GOT to try...</h6>
	</div>

		<div class="ig-row" data-aos="fade-up">
			<div class="ig-item-4">
				<div class="ig-img">
					<img class="ig-info-icon-4" src="images/icons/food1.png">
				</div>
				<div class="ig-info">Butter Chicken Curry
				</div>
			</div>
			<div class="ig-item-4">
				<div class="ig-img">
					<img class="ig-info-icon-4" src="images/icons/food2.png">
				</div>
				<div class="ig-info">English Breakfast
				</div>
			</div>
			<div class="ig-item-4">
				<div class="ig-img">
					<img class="ig-info-icon-4" src="images/icons/food3.png">
				</div>
				<div class="ig-info">Bangers and Mash
				</div>
			</div>
			<div class="ig-item-4">
				<div class="ig-img">
					<img class="ig-info-icon-4" src="images/icons/food4.png">
				</div>
				<div class="ig-info">Fish and Chips
				</div>
			</div>
		</div>

	<div class="ig-title" data-aos="fade-right">
		<h6>You can get around by...</h6>
	</div>

		<div class="ig-row" data-aos="fade-up">
			<div class="ig-item-3">
				<div class="ig-img-3">
					<img class="ig-info-icon-4" src="images/icons/bus.png">
				</div>
				<div class="ig-info">Big Red London Bus service
				</div>
			</div>
			<div class="ig-item-3">
				<div class="ig-img-3">
					<img class="ig-info-icon-4" src="images/icons/underground.png">
				</div>
				<div class="ig-info">The London Underground train
				</div>
			</div>
			<div class="ig-item-3">
				<div class="ig-img-3">
					<img class="ig-info-icon-4" src="images/icons/taxi.png">
				</div>
				<div class="ig-info">Famous London Taxi Cabs
				</div>
			</div>
		</div>

</div> <!-- ig box end -->

<!--
<div class="item" data-aos="fade-up">1</div>
<div class="item" data-aos="fade-down">2</div>
<div class="item" data-aos="fade-right">3</div>
<div class="item" data-aos="fade-left">4</div>

<div class="item" data-aos="zoom-in">5</div>
<div class="item" data-aos="zoom-out">6</div>

<div class="item" data-aos="slide-up">7</div>

<div class="item" data-aos="flip-up">8</div>
<div class="item" data-aos="flip-down">9</div>
<div class="item" data-aos="flip-right">10</div>
<div class="item" data-aos="flip-left">11</div>
-->
