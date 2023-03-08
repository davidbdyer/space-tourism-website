<?php
$page_name = "Technology";
require_once './partials/head.php';
?>

<body class="technology">

	<header class="primary-header flex">
		<div>
			<img src="./assets/shared/logo.svg" alt="space tourism logo" class="logo">
		</div>
		<?php require './partials/nav.php'; ?>
	</header>

	<main id="main" class="grid-container grid-container--technology flow">

		<h1 class="numbered-title"><span aria-hidden="true">03</span> Space launch 101</h1>

		<picture id="vehicle-image">
			<source media="(orientation: portrait)" srcset="assets/technology/image-launch-vehicle-landscape.jpg" type="image/jpg">
			<source media="(orientation: landscape)" srcset="assets/technology/image-launch-vehicle-portrait.jpg" type="image/jpg">
			<img src="assets/technology/image-launch-vehicle-landscape.jpg" alt="vehicle-image">
		</picture>
		<picture id="spaceport-image" hidden>
			<source media="(orientation: portrait)" srcset="assets/technology/image-spaceport-landscape.jpg" type="image/jpg">
			<source media="(orientation: landscape)" srcset="assets/technology/image-spaceport-portrait.jpg" type="image/jpg">
			<img src="assets/technology/image-spaceport-landscape.jpg" alt="vehicle-image">
		</picture>
		<picture id="capsule-image" hidden>
			<source media="(orientation: portrait)" srcset="assets/technology/image-space-capsule-landscape.jpg" type="image/jpg">
			<source media="(orientation: landscape)" srcset="assets/technology/image-space-capsule-portrait.jpg" type="image/jpg">
			<img src="assets/technology/image-space-capsule-landscape.jpg" alt="vehicle-image">
		</picture>

		<div class="number-indicators flex" role="tablist" aria-label="technology list">
			<button aria-selected="true" role="tab" aria-controls="vehicle-tab" tabindex="0" data-image="vehicle-image" class="ff-serif fs-500 text-dark bg-white">1</button>
			<button aria-selected="false" role="tab" aria-controls="spaceport-tab" tabindex="-1" data-image="spaceport-image" class="ff-serif fs-500 text-dark bg-white">2</button>
			<button aria-selected="false" role="tab" aria-controls="capsule-tab" tabindex="-1" data-image="capsule-image" class="ff-serif fs-500 text-dark bg-white">3</button>
		</div>

		<!-- launch vehicle -->
		<article class="technology-info flow" id="vehicle-tab" role="tabpanel" tabindex="0">
			<header class="flow flow--space-small">
				<h2 class="fs-200 ff-sans-cond letter-spacing-2 text-white uppercase">The terminology...</h2>
				<p class="fs-700 uppercase ff-serif">Launch vehicle</p>
			</header>
			<p>
				A launch vehicle or carrier rocket is a rocket-propelled vehicle used to carry a
				payload from Earth's surface to space, usually to Earth orbit or beyond. Our
				WEB-X carrier rocket is the most powerful in operation. Standing 150 metres tall,
				it's quite an awe-inspiring sight on the launch pad!
			</p>
		</article>

		<!-- spaceport -->
		<article class="technology-info flow" id="spaceport-tab" role="tabpanel" tabindex="0" hidden>
			<header class="flow flow--space-small">
				<h2 class="fs-200 ff-sans-cond letter-spacing-2 text-white uppercase">The terminology...</h2>
				<p class="fs-700 uppercase ff-serif">Spaceport</p>
			</header>
			<p>
				A spaceport or cosmodrome is a site for launching (or receiving) spacecraft,
				by analogy to the seaport for ships or airport for aircraft. Based in the
				famous Cape Canaveral, our spaceport is ideally situated to take advantage
				of the Earth’s rotation for launch.
			</p>
		</article>

		<!-- space capsule -->
		<article class="technology-info flow" id="capsule-tab" role="tabpanel" tabindex="0" hidden>
			<header class="flow flow--space-small">
				<h2 class="fs-200 ff-sans-cond letter-spacing-2 text-white uppercase">The terminology...</h2>
				<p class="fs-700 uppercase ff-serif">Space Capsule</p>
			</header>
			<p>
				A space capsule is an often-crewed spacecraft that uses a blunt-body reentry
				capsule to reenter the Earth's atmosphere without wings. Our capsule is where
				you'll spend your time during the flight. It includes a space gym, cinema,
				and plenty of other activities to keep you entertained.
			</p>
		</article>

	</main>

	<script src="navigation.js"></script>
	<script src="tabs.js"></script>
</body>

</html>