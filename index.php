<?php
$page_name = "Home";
require './partials/head.php';
?>

<body class="home">
    <a class="skip-to-content" href="#main">Skip to content</a>

    <header class="primary-header flex">
        <div>
            <img src="./assets/shared/logo.svg" alt="space tourism logo" class="logo">
        </div>
        <button type="button" title="menu" aria-label="menu" aria-controls="primary-navigation" aria-hidden="true" class="mobile-nav-toggle"></button>
        <nav>
            <ul id="primary-navigation" class="primary-navigation underline-indicators flex">
                <li class="active"><a class="ff-sans-cond uppercase text-white letter-spacing-2" href="index.php"><span aria-hidden="true">00</span>Home</a></li>
                <li><a class="ff-sans-cond uppercase text-white letter-spacing-2" href="destination.html"><span aria-hidden="true">01</span>Destination</a></li>
                <li><a class="ff-sans-cond uppercase text-white letter-spacing-2" href="crew.html"><span aria-hidden="true">02</span>Crew</a></li>
                <li><a class="ff-sans-cond uppercase text-white letter-spacing-2" href="technology.html"><span aria-hidden="true">03</span>Technology</a></li>
            </ul>
        </nav>
    </header>

    <main id="main" class="grid-container grid-container--home">
        <div class="flex-column">
            <h1 class="text-accent fs-500 ff-sans-cond uppercase letter-spaceing-1">So, you want to travel to
                <span class="d-block fs-900 ff-serif text-white">Space</span>
            </h1>
            <p class="text-accent">
                Let’s face it; if you want to go to space, you might as well genuinely go to outer space and not hover kind of on the edge of it. Well sit back, and relax because we’ll give you a truly out of this world experience!
            </p>
        </div>
        <div>
            <a class="large-button uppercase ff-serif fs-600 text-dark bg-white" href="destination.html">Explore</a>
        </div>
    </main>
</body>

</html>