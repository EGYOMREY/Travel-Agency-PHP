<?php
	define("TITLE", "Hotels | Norway Travel");
	
	require('inc/header.php');
?>
<section class="hotels container">
	
	<h2>Hotels</h2>
	<div class="hotel-info-group">
		<?php
		//Display a card for each team agent
		foreach($hotels as $hotel) { ?>
		<div class="hotel-info">
			<img src="images/<?php echo $hotel["img"]; ?>" alt="<?php echo $hotel["name"]; ?>" >
			<h3><?php echo $hotel["name"]; ?></h3>
			<p><?php echo $hotel["description"]; ?></p>
			<p><span>Phone numbers:</span> <?php echo $hotel["phones"]; ?></p>
			<p><span>Service:</span> <?php echo $hotel["services"]; ?></p>
			<p class="stars"><span>Rating:</span><?php echo $hotel["rating"]; ?> </p>
			<button type="button" class="btn btn--book">Book now</button>
		</div>
		<?php } ?>
	</div>
	<h3>Want to see more?</h3>
	<a href="https://www.rentbyowner.com/listing?q=Norway&ref=home">Click here!</a>
</section>

<?php
	require('inc/footer.php');
?>