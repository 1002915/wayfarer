<img class="vector-skyline" src="images/cityscapes/<?php echo $CITY;?>.svg">
<div class="ig-grid" data-aos="fade-up"> <!-- INFOGRAPHIC START HERE -->
	<div class="ig-title" data-aos="fade-right">
		<h6>We thought you should know...</h6>
	</div>
		<div class="ig-row" data-aos="fade-up">
			<div class="ig-item-4">
				<div class="ig-img">
					<img class="ig-info-icon-4" src="images/icons/weather.svg">
				</div>
				<div class="ig-info"><span><div id="weather"> </div></span><br></div>
			</div>
			<div class="ig-item-4">
				<div class="ig-img">
					<img class="ig-info-icon-4" src="images/icons/time.svg">
				</div>
				<div class="ig-info"><span><div id="displayMoment"></div></span><br></div>
			</div>
			<div class="ig-item-4">
				<div class="ig-img">
					<img class="ig-info-icon-4" src="images/icons/speak.svg">
				</div>
				<div id="language" class="ig-info"><?php echo $LANGUAGE;?></div>
			</div>
			<div class="ig-item-4">
				<div class="ig-img">
					<img class="ig-info-icon-4" src="images/icons/passport.svg">
				</div>
				<div id="passport" class="ig-info"><?php echo $PASSPORT;?></div>
			</div>
		</div>

	<div class="ig-title" data-aos="fade-right">
		<h6>And you should go see...</h6>
	</div>
	
		<div class="ig-row" data-aos="fade-up">
			<div class="ig-item-2">
				<div class="ig-img-2">
					<img class="ig-info-icon-4" src="images/landmarks/<?php echo $CITY;?>/<?php echo $CITY;?>_1.svg">
				</div>
				<div class="info-container">
					<div class="ig-info ig-2"><?php echo $LANDMARK_ONE;?></div>
					<div class="ig-info ig-small"><?php echo $DESCRIPTION_ONE;?></div>
				</div>
			</div>

			<div class="ig-item-2">
				<div class="ig-img-2">
					<img class="ig-info-icon-4" src="images/landmarks/<?php echo $CITY;?>/<?php echo $CITY;?>_2.svg">
				</div>
				<div class="info-container">
					<div class="ig-info ig-2"><?php echo $LANDMARK_TWO;?></div>
					<div class="ig-info ig-small"><?php echo $DESCRIPTION_TWO;?></div>
				</div>
			</div>
		</div>
		<div class="ig-row" data-aos="fade-up">
			<div class="ig-item-2">
				<div class="ig-img-2">
					<img class="ig-info-icon-4" src="images/landmarks/<?php echo $CITY;?>/<?php echo $CITY;?>_3.svg">
				</div>
				<div class="info-container">
					<div class="ig-info ig-2"><?php echo $LANDMARK_THREE;?></div>
					<div class="ig-info ig-small"><?php echo $DESCRIPTION_THREE;?></div>
				</div>
			</div>
			<div class="ig-item-2">
				<div class="ig-img-2">
					<img class="ig-info-icon-4" src="images/landmarks/<?php echo $CITY;?>/<?php echo $CITY;?>_4.svg">
				</div>
				<div class="info-container">
					<div class="ig-info ig-2"><?php echo $LANDMARK_FOUR;?></div>
					<div class="ig-info ig-small"><?php echo $DESCRIPTION_FOUR;?></div>
				</div>
			</div>
		</div>
	
	<div class="ig-title" data-aos="fade-right"">
		<h6>But don't forget..</h6>
	</div>

		<div class="ig-row" data-aos="fade-up">
			<div class="ig-item-3">
				<div class="ig-img-3">
					<img class="ig-info-icon-4" src="images/icons/tip.svg">
				</div>
				<div class="ig-info">Tipping:<BR><?php echo $TIPPING;?></div>
			</div>
			<div class="ig-item-3">
				<div class="ig-img-3">
					<img class="ig-info-icon-4" src="images/icons/tourist.svg">
				</div>
				<div class="ig-info">Peak season:<BR><?php echo $PEAK_SEASON;?></div>
			</div>
			<div class="ig-item-3">
				<div class="ig-img-3">
					<img class="ig-info-icon-4" src="images/icons/currency.svg">
				</div>
				<div class="ig-info">Average beer:<BR><?php echo $AVERAGE_BEER;?></div>
			</div>
		</div>

		<div class="ig-title" data-aos="fade-right">
			<h6>And you've GOT to try...</h6>
		</div>

		<div class="ig-row" data-aos="fade-up">
			<div class="ig-item-4">
				<div class="ig-info ig-2"><?php echo $FOOD_ONE;?><BR><BR><?php echo $FOOD_TWO;?><BR><BR><?php echo $FOOD_THREE;?></div>
			</div>
			<div class="ig-item-4 burger">
				<div class="ig-img">
					<img class="ig-info-icon-4" src="images/icons/food.svg">
				</div>
			</div>			
		</div>

		<div class="ig-title" data-aos="fade-right">
			<h6>You can get around by...</h6>
		</div>

		<div class="ig-row" data-aos="fade-up">
			<div class="ig-item-4 burger">
				<div class="ig-img">
					<img class="ig-info-icon-4" src="images/icons/transport.svg">
				</div>
			</div>
			<div class="ig-item-4">
				<div class="ig-info ig-2"><?php echo $TRANSPORT_ONE;?><BR><BR><?php echo $TRANSPORT_TWO;?></div>
			</div>
		</div>

</div> <!-- ig box end -->
