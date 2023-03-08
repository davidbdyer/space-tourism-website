<?php
$page_name = "Home";
require_once './partials/head.php';
?>

<body class="home">
    <a class="skip-to-content" href="#main">Skip to content</a>

    <header class="primary-header flex">
        <div>
            <img src="./assets/shared/logo.svg" alt="space tourism logo" class="logo">
        </div>
        <?php require './partials/nav.php'; ?>
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