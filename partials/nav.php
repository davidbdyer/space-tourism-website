	<?php
	$current_page = basename($_SERVER['PHP_SELF']);

	function current_page($current_page, $url) {
		if($current_page == $url) {
			echo "class='active'";
		}
	}
	?>

	<button type="button" title="mobile nav menu" aria-label="mobile nav menu" aria-controls="primary-navigation" aria-hidden="true" class="mobile-nav-toggle"><span class="sr-only" aria-expanded="false">Menu</span></button>
	<nav>
		<ul id="primary-navigation" class="primary-navigation underline-indicators flex">
			<li <?php current_page($current_page, "index.php"); ?> ><a class="ff-sans-cond uppercase text-white letter-spacing-2" href="index.php"><span aria-hidden="true">00</span>Home</a></li>
			<li <?php current_page($current_page, "destination.php"); ?> ><a class="ff-sans-cond uppercase text-white letter-spacing-2" href="destination.php"><span aria-hidden="true">01</span>Destination</a></li>
			<li <?php current_page($current_page, "crew.php"); ?> ><a class="ff-sans-cond uppercase text-white letter-spacing-2" href="crew.php"><span aria-hidden="true">02</span>Crew</a></li>
			<li <?php current_page($current_page, "technology.php"); ?> ><a class="ff-sans-cond uppercase text-white letter-spacing-2" href="technology.php"><span aria-hidden="true">03</span>Technology</a></li>
		</ul>
	</nav>