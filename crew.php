<!DOCTYPE html>
<html lang="en">

	<head>
		<?php
		$page_title = "Crew";
		require_once './partials/head.php';
		?>
		<script src="./scripts/tabs.js" defer></script>
	</head>

	<body class="crew">

		<header class="primary-header flex">
			<div>
				<img src="./assets/shared/logo.svg" alt="space tourism logo" class="logo">
			</div>
			<?php require './partials/nav.php'; ?>
		</header>

		<main id="main" class="grid-container grid-container--crew flow">
			<h1 class="numbered-title"><span aria-hidden="true">02</span> Meet your crew</h1>

			<div class="dot-indicators flex" role="tablist" aria-label="crew member list">
				<button aria-selected="true" aria-controls="commander-tab" role="tab" data-image="commander-image" tabindex="0"><span class="sr-only">The commander</span></button>
				<button aria-selected="false" aria-controls="mission-tab" role="tab" data-image="mission-image" tabindex="-1"><span class="sr-only">The mission specialist</span></button>
				<button aria-selected="false" aria-controls="pilot-tab" role="tab" data-image="pilot-image" tabindex="-1"><span class="sr-only">The pilot</span></button>
				<button aria-selected="false" aria-controls="crew-tab" role="tab" data-image="crew-image" tabindex="-1"><span class="sr-only">The crew engineer</span></button>
			</div>

			<!-- commander -->
			<article class="crew-info flow" id="commander-tab" role="tabpanel" tabindex="0">
				<header class="flow flow--space-small">
					<h2 class="fs-600 ff-serif uppercase">Commander</h2>
					<p class="fs-700 uppercase ff-serif">Douglas Hurley</p>
				</header>
				<p>Douglas Gerald Hurley is an American engineer, former Marine Corps pilot
					and former NASA astronaut. He launched into space for the third time as
					commander of Crew Dragon Demo-2.</p>
			</article>

			<!-- mission specialist -->
			<article class="crew-info flow" id="mission-tab" role="tabpanel" tabindex="0" hidden>
				<header class="flow flow--space-small">
					<h2 class="fs-600 ff-serif uppercase">Mission Specialist</h2>
					<p class="fs-700 uppercase ff-serif">Mark SHuttleworth</p>
				</header>
				<p>Mark Richard Shuttleworth is the founder and CEO of Canonical, the company behind
					the Linux-based Ubuntu operating system. Shuttleworth became the first South
					African to travel to space as a space tourist.</p>
			</article>

			<!-- pilot -->
			<article class="crew-info flow" id="pilot-tab" role="tabpanel" tabindex="0" hidden>
				<header class="flow flow--space-small">
					<h2 class="fs-600 ff-serif uppercase">Pilot</h2>
					<p class="fs-700 uppercase ff-serif">Victor Glover</p>
				</header>
				<p>Pilot on the first operational flight of the SpaceX Crew Dragon to the
					International Space Station. Glover is a commander in the U.S. Navy where
					he pilots an F/A-18.He was a crew member of Expedition 64, and served as a
					station systems flight engineer.</p>
			</article>

			<!-- engineer -->
			<article class="crew-info flow" id="crew-tab" role="tabpanel" tabindex="0" hidden>
				<header class="flow flow--space-small">
					<h2 class="fs-600 ff-serif uppercase">Flight Engineer</h2>
					<p class="fs-700 uppercase ff-serif">Anousheh Ansari</p>
				</header>
				<p>Anousheh Ansari is an Iranian American engineer and co-founder of Prodea Systems.
					Ansari was the fourth self-funded space tourist, the first self-funded woman to
					fly to the ISS, and the first Iranian in space.</p>
			</article>

			<picture id="commander-image">
				<source srcset="assets/crew/image-douglas-hurley.webp" type="image/webp">
				<img src="assets/crew/image-douglas-hurley.png" alt="Douglas Hurley">
			</picture>
			<picture id="mission-image" hidden>
				<source srcset="assets/crew/image-mark-shuttleworth.webp" type="image/webp">
				<img src="assets/crew/image-mark-shuttleworth.png" alt="Douglas Hurley">
			</picture>
			<picture id="pilot-image" hidden>
				<source srcset="assets/crew/image-victor-glover.webp" type="image/webp">
				<img src="assets/crew/image-victor-glover.png" alt="Douglas Hurley">
			</picture>
			<picture id="crew-image" hidden>
				<source srcset="assets/crew/image-anousheh-ansari.webp" type="image/webp">
				<img src="assets/crew/image-anousheh-ansari.png" alt="Douglas Hurley">
			</picture>
		</main>
	</body>

</html>