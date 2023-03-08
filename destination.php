<!DOCTYPE html>
<html lang="en">

	<head>
		<?php
		$page_title = "Destination";
		require_once './partials/head.php';
		?>
		<script src="./scripts/tabs.js" defer></script>
	</head>

	<body class="destination">
		<header class="primary-header flex">
			<div>
				<img src="./assets/shared/logo.svg" alt="space tourism logo" class="logo">
			</div>
			<?php require './partials/nav.php'; ?>
		</header>

		<main id="main" class="grid-container grid-container--destination flow">
			<h1 class="numbered-title"><span aria-hidden="true">01</span>Pick your destination</h1>

			<picture id="moon-image">
				<source srcset="assets/destination/image-moon.webp" type="image/webp">
				<img src="assets/destination/image-moon.png" alt="the moon">
			</picture>

			<picture id="mars-image" hidden>
				<source srcset="assets/destination/image-mars.webp" type="image/webp">
				<img src="assets/destination/image-mars.png" alt="the planet mars">
			</picture>

			<picture id="europa-image" hidden>
				<source srcset="assets/destination/image-europa.webp" type="image/webp">
				<img src="assets/destination/image-europa.png" alt="the moon europa">
			</picture>

			<picture id="titan-image" hidden>
				<source srcset="assets/destination/image-titan.webp" type="image/webp">
				<img src="assets/destination/image-titan.png" alt="the moontitan">
			</picture>

			<div class="tab-list underline-indicators flex" role="tablist" aria-label="destination list">
				<button type="button" aria-selected="true" role="tab" aria-controls="moon-tab" class="uppercase ff-sans-cond text-accent letter-spacing-2" tabindex="0" data-image="moon-image">Moon</button>
				<button type="button" aria-selected="false" role="tab" aria-controls="mars-tab" class="uppercase ff-sans-cond text-accent letter-spacing-2" tabindex="-1" data-image="mars-image">Mars</button>
				<button type="button" aria-selected="false" role="tab" aria-controls="europa-tab" class="uppercase ff-sans-cond text-accent letter-spacing-2" tabindex="-1" data-image="europa-image">Europa</button>
				<button type="button" aria-selected="false" role="tab" aria-controls="titan-tab" class="uppercase ff-sans-cond text-accent letter-spacing-2" tabindex="-1" data-image="titan-image">Titan</button>
			</div>

			<!-- the moon -->
			<article class="destination-info flow" id="moon-tab" tabindex="0" role="tabpanel">
				<h2 class="fs-800 uppercase ff-serif">Moon</h2>
				<p>
					See our planet as you’ve never seen it before. A perfect relaxing trip away to help
					regain perspective and come back refreshed. While you’re there, take in some history
					by visiting the Luna 2 and Apollo 11 landing sites.
				</p>
				<div class="destination-meta flex">
					<div>
						<h3 class="text-accent fs-200 uppercase">Avg. distance</h3>
						<p class="fs-500 ff-serif uppercase">384,400 km</p>
					</div>
					<div>
						<h3 class="text-accent fs-200 uppercase">Est. travel time</h3>
						<p class="fs-500 ff-serif uppercase">3 days</p>
					</div>
				</div>
			</article>

			<!-- mars -->
			<article hidden class="destination-info flow" id="mars-tab" tabindex="0" role="tabpanel">
				<h2 class="fs-800 uppercase ff-serif">Mars</h2>
				<p>
					Don’t forget to pack your hiking boots. You’ll need them to tackle Olympus Mons,
					the tallest planetary mountain in our solar system. It’s two and a half times
					the size of Everest!
				</p>
				<div class="destination-meta flex">
					<div>
						<h3 class="text-accent fs-200 uppercase">Avg. distance</h3>
						<p class="fs-500 ff-serif uppercase">225 mil. km</p>
					</div>
					<div>
						<h3 class="text-accent fs-200 uppercase">Est. travel time</h3>
						<p class="fs-500 ff-serif uppercase">9 months</p>
					</div>
				</div>
			</article>

			<!-- europa -->
			<article hidden class="destination-info flow" id="europa-tab" tabindex="0" role="tabpanel">
				<h2 class="fs-800 uppercase ff-serif">Europa</h2>
				<p>
					The smallest of the four Galilean moons orbiting Jupiter, Europa is a
					winter lover’s dream. With an icy surface, it’s perfect for a bit of
					ice skating, curling, hockey, or simple relaxation in your snug
					wintery cabin.
				</p>
				<div class="destination-meta flex">
					<div>
						<h3 class="text-accent fs-200 uppercase">Avg. distance</h3>
						<p class="fs-500 ff-serif uppercase">628 mil. km</p>
					</div>
					<div>
						<h3 class="text-accent fs-200 uppercase">Est. travel time</h3>
						<p class="fs-500 ff-serif uppercase">3 years</p>
					</div>
				</div>
			</article>

			<!-- titan -->
			<article hidden class="destination-info flow" id="titan-tab" tabindex="0" role="tabpanel">
				<h2 class="fs-800 uppercase ff-serif">Titan</h2>
				<p>
					The only moon known to have a dense atmosphere other than Earth, Titan
					is a home away from home (just a few hundred degrees colder!). As a
					bonus, you get striking views of the Rings of Saturn.
				</p>
				<div class="destination-meta flex">
					<div>
						<h3 class="text-accent fs-200 uppercase">Avg. distance</h3>
						<p class="fs-500 ff-serif uppercase">1.6 bil. km</p>
					</div>
					<div>
						<h3 class="text-accent fs-200 uppercase">Est. travel time</h3>
						<p class="fs-500 ff-serif uppercase">7 years</p>
					</div>
				</div>
			</article>

		</main>
	</body>

</html>