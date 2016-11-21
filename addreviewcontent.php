<form action="insertreview.php" id='form-review' method='post' class='form' >
	<span class="form-legend">Add a Review</span>
	<input type="text" class="form-input" name="review-name" id="r_name" value="" placeholder="Title of Review"/>
	<textarea name="user-review" class="form-input" id="r_content" rows="8" placeholder="Tell US what You Thought..."></textarea>
	<input type="checkbox" name="r-draft" value="1" checked>Publish review?<br>	
	<select name="rating">
  		<option value="1">1</option>
  		<option value="2">2</option>
  		<option value="3">3</option>
  		<option value="4">4</option>
  		<option value="5">5</option>
	</select>
	<input type="hidden" name="id" value="<?php echo $_SESSION['id'];?>">
	<input id="form-review-submit" type="submit">
</form>
