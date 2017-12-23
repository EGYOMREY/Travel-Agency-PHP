<?php
	define("TITLE", "Home | Norway Travel");
	
	require_once('inc/header.php');
?>
		
		<section class="home container">
			<div class="home__intro">
				<h1>¿Why Norway?</h1>
				<p class="">In Norway you will find the most fascinating landscapes in the world, from kayaking through the fjords, lakes and hiking through the imposing mountains. Discover the Jotunheimen National Park, with its immense waterfalls, dreamy mountains, rivers of blue water, and discover the beautiful wildlife and flora that comprise it. </p>
			</div>
			<div class="home__offers">
				<div class="offers">
					<h3>Special Offers</h3>
					<ul class="offer-list">
						<li class="offer-list__item">Music Festivals</li>
						<li class="offer-list__item">Outdoor Courses</li>
						<li class="offer-list__item">City Tours</li>
						<li class="offer-list__item">Cinematography</li>
					</ul>
				</div>
				<div class="newsletter">
					<h4>Subscribe to our Newsletter</h4>
					<form action="">
						<label for="email"><span>Email address</span>
						<input type="text"  id="email" placeholder="example@mail.com">
					</label>
					<button class="btn btn--submit"> Submit</button>
				</form>
			</div>
		</div>
	</section>
	
	
	<?php 
	require_once('inc/footer.php');
	 ?>
