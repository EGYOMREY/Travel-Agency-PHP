<?php
	define("TITLE", "Contact Us | Norway Travel");
	
	require('inc/header.php');
?>
<section class="container restaurants">
<h2> Restaurants</h2>
<div class="restaurant-group">
	<?php
			//Display a card for each team agent
	foreach($restaurants as $item) { ?>
	<div class="restaurant">
		<img src="images/<?php echo $item["img"]; ?>" alt="<?php echo $item["name"]; ?> Restaurant">
		<h3><?php echo $item["name"]; ?></h3>
		<p><?php echo $item["desc"]; ?></p>
	</div>
	<?php } ?>
</div>
	
	<a href="https://foursquare.com/explore?mode=url&near=Norway&nearGeoId=72057594041072032&q=Food">Do you want to see more options?</a>
	</section>
	<?php
		require('inc/footer.php');
	?>