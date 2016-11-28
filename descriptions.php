<?php

function setDescription($cityName) 
{
	if($cityName == 'London')
	{
		$title = 'LONDON';
		$description = "London, the capital of England and the United Kingdom, is a 21st-century city with history stretching back to Roman times. At its centre stand the imposing Houses of Parliament, the iconic ‘Big Ben’ clock tower and Westminster Abbey, site of British monarch coronations. Across the Thames River, the London Eye observation wheel provides panoramic views of the South Bank cultural complex, and the entire city.";

		echo $description;
	} else {
		echo 'Something went wrong with the description. Please check back later! :)';
	}
}

function setTitle($cityName) 
{
	if($cityName == 'London')
	{
		$title = 'LONDON';
		
		echo $title;
	} else {
		echo 'Something went wrong with the title. Please check back later! :)';
	}
}

function setImage($cityName)
{
	if($cityName == 'London')
	{
		$image = 'london';
		
		echo $image;
	} else {
		echo 'Something went wrong with the image. Please check back later! :)';
	}
}
?>