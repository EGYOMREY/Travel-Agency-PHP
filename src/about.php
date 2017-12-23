<?php
	define("TITLE", "About Us | Norway Travel");
	
	require('inc/header.php');
?>
<section class="container about">
	
	<div class="about__story">
		<h3>Our Story</h3>
		<p>
			One afternoon of August 10, 2001, we wondered how we could make known to the world the beautiful country in which we live? Posting photos and inviting the world was not enough, we had to do something else! That day was born the idea of helping people outside Norway to better understand the country, its customs, letting them know the best places to visit and share with family and friends. Behind an extensive research on the best tourist sites in Norway, we bring the most attractive sights and also take into consideration what our customers say and recommend.
		</p>
	</div>
	<h2>Meet our team</h2>
	<div class="tourism-agent-group">
		<?php
		//Display a card for each team agent
		foreach($agents as $agent) { ?>
		
		<div class="agent">
			<figure>
				<img src="images/<?php echo $agent["img"]; ?>" alt="Tourism agent <?php echo $agent["name"]; ?>">
				<figcaption><?php echo $agent["name"]; ?></figcaption>
			</figure>
			<p>
				<?php echo $agent["description"]; ?>
			</p>
			<p> <strong><?php echo $contactDetails[0]; ?></strong></p>
			<svg role="img" aria-label="Contact now" width="40" height="40" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="<?php echo $contactDetails[1]; ?>"/></svg>
		</div>
		<?php } ?>
		
	</div>
	
</section>
<?php
	require('inc/footer.php');
?>