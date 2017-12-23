<?php
	define("TITLE", "Planning | Norway Travel");
	
	require('inc/header.php');
?>
<section class="container planning">
	<h2>General information for your planning</h2>
	<div class="plan-group">
	<?php
		//Display a card for each team agent
	foreach($planning as $plan) { ?>
	<div class="plan-tip">
		<h3><?php echo $plan["title"]; ?></h3>
		<p><?php echo $plan["desc"]; ?></p>
	</div>
	<?php } ?>
	</div>
</section>
<?php
	require('inc/footer.php');
?>