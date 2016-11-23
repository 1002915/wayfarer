<?php 

$cityTimezone = 10;
$population = '8.764 Million (2015)';
$beerCost = '£4.50 = ($8.71 AUD)';
?>

	    <div class="catchy-title">
	        <h6><?php setTitle($cityName); ?></h6>
	    </div>
			<img class="vector-skyline" src="images/cities/<?php setImage($cityName); ?>.svg">
		</div>
	</div>
</div>

<div class="information-container">
	<h6> Overview </h6>
</div>
	<div class="information-container">
	    <div class="thumbnail">
	    	<div class="information-container">
				<div class="country-big-info-block">
					<span> Overall Rating: ***** </span><br><br>
		    		<span> Local Time:<div id="displayMoment"></div></span><br>
		    		<span> Current Temp:<div id="weather"> </div></span><br>
		    		<span> Population: <?php echo $population; ?></span><br><br>
		    		<span> Average pint cost: <?php echo $beerCost; ?> </span><br><br>
		    		<span> <?php setDescription($cityName); ?></span>
				</div>
			</div>
		</div>
	</div>
</div>
 
<div class="information-container">
	<h6> Traveller photos </h6>
</div>
<div class="information-container">
<div class="popup-gallery">
	<a class="link-flex" href="user/images/13.jpg" title="The Cleaner"><img 			src="user/images/13.jpg" 			width="100%"></a>
	<a class="link-flex" href="user/images/14.jpg" title="Winter Dance"><img 			src="user/images/14.jpg" 			width="100%"></a>
	<a class="link-flex" href="user/images/12.jpg" title="The Uninvited Guest"><img 	src="user/images/12.jpg" 			width="100%"></a>
	<a class="link-flex" href="user/images/13.jpg" title="Oh no, not again!"><img 	src="user/images/13.jpg" 			width="100%"></a>
</div>
	</div>
</div>

<div class="information-container">
	<h6> Traveller Reviews </h6>
</div>

<div class="information-container">
	<div class="row">
	  <div class="col-sm-6 col-md-4">
	    <div class="thumbnail">
	      <img src="user/images/12.jpg" alt="...">
	      <div class="caption">
	        <p class="review-title">LONDON WAS REALLY SWEET</p>
	        <p class="reviewed-by">Reviewed by: Matt Neal on: 16/05/1987</p><br>
			<p class="review-rating">4 out of 5 Stars</p>
	        <p class="review-content">Here's a generic entry about London. I can't believe this is a description.</p>
	        <p><a href="#" class="btn btn-default" role="button">Read more</a></p>
	      </div>
	    </div>
	  </div>
	  <div class="col-sm-6 col-md-4">
	    <div class="thumbnail">
	      <img src="user/images/12.jpg" alt="...">
	      <div class="caption">
	        <p class="review-title">LONDON WAS REALLY SWEET</p>
	        <p class="reviewed-by">Reviewed by: Matt Neal on: 16/05/1987</p><br>
			<p class="review-rating">4 out of 5 Stars</p>
	        <p class="review-content">Here's a generic entry about London. I can't believe this is a description.</p>
	        <p><a href="#" class="btn btn-default" role="button">Read more</a></p>
	      </div>
	    </div>
	  </div>
	  <div class="col-sm-6 col-md-4">
	    <div class="thumbnail">
	      <img src="user/images/12.jpg" alt="...">
	      <div class="caption">
	        <p class="review-title">LONDON WAS REALLY SWEET</p>
	        <p class="reviewed-by">Reviewed by: Matt Neal on: 16/05/1987</p><br>
			<p class="review-rating">4 out of 5 Stars</p>
	        <p class="review-content">Here's a generic entry about London. I can't believe this is a description.</p>
	        <p><a href="#" class="btn btn-default" role="button">Read more</a></p>
	      </div>
	    </div>
	  </div>
	</div>
		<div class="row">
	  <div class="col-sm-6 col-md-4">
	    <div class="thumbnail">
	      <img src="user/images/12.jpg" alt="...">
	      <div class="caption">
	        <p class="review-title">LONDON WAS REALLY SWEET</p>
	        <p class="reviewed-by">Reviewed by: Matt Neal on: 16/05/1987</p><br>
			<p class="review-rating">4 out of 5 Stars</p>
	        <p class="review-content">Here's a generic entry about London. I can't believe this is a description.</p>
	        <p><a href="#" class="btn btn-default" role="button">Read more</a></p>
	      </div>
	    </div>
	  </div>
	  <div class="col-sm-6 col-md-4">
	    <div class="thumbnail">
	      <img src="user/images/12.jpg" alt="...">
	      <div class="caption">
	        <p class="review-title">LONDON WAS REALLY SWEET</p>
	        <p class="reviewed-by">Reviewed by: Matt Neal on: 16/05/1987</p><br>
			<p class="review-rating">4 out of 5 Stars</p>
	        <p class="review-content">Here's a generic entry about London. I can't believe this is a description.</p>
	        <p><a href="#" class="btn btn-default" role="button">Read more</a></p>
	      </div>
	    </div>
	  </div>
	  <div class="col-sm-6 col-md-4">
	    <div class="thumbnail">
	      <img src="user/images/12.jpg" alt="...">
	      <div class="caption">
	        <p class="review-title">LONDON WAS REALLY SWEET</p>
	        <p class="reviewed-by">Reviewed by: Matt Neal on: 16/05/1987</p><br>
			<p class="review-rating">4 out of 5 Stars</p>
	        <p class="review-content">Here's a generic entry about London. I can't believe this is a description.</p>
	        <p><a href="#" class="btn btn-default" role="button">Read more</a></p>
	      </div>
	    </div>
	  </div>
	</div>
</div>
<!--
<?php 

$select = "SELECT * FROM review WHERE R_City = '$cityName'";
$result = mysqli_query($mysqli, $select);

while($row = mysqli_fetch_array($result))
{
	$id = $row['ID'];
	$R_TITLE = $row['R_TITLE'];
	$R_CONTENT = $row['R_CONTENT'];
	$R_BY = $row['R_BY'];
	$R_TIME = $row['R_TIME'];
	$R_DATE = $row['R_DATE'];
	$R_DRAFT = $row['R_DRAFT'];
	$R_RATING = $row['R_RATING'];
	$R_City = $row['R_City'];

	echo 
	'<div class="information-container flex">'.
		'<div class="left-review">'. 
			'<p class="review-title">'.$R_TITLE . '</p>'.
			'<p class="review-rating">'.$R_RATING . ' out of 5 Stars</p>'.
			'<p class="reviewed-by">Reviewed by: '.$R_BY. 'on:'. $R_TIME.'</p><br>'.
			'<p class="review-content">'.$R_CONTENT.'</p>'.


		'</div>'.	
		'<div class="right-review" style="background-image:url(images/london.svg);">&nbsp;</div>'.
	'</div>';
}

?>

-->


</div>
</div>	