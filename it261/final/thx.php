<?php
include('config.php');
include('includes/header.php'); ?>

<header>
<div class="welcome-logout">
<p><a href="index.php?logout='1'">Log out</a></p>
</div>
</header>

<div id="wrapper">
<main>
    <h1><?php echo $headline; ?></h1>
    <p class="contact">We will contact you shortly! </p>
    <img class="contact"src="images/P1060519 (6).jpg" style="width:90%;" alt="Hawaian sunset">
    
</main>

<?php
include('includes/footer.php'); ?>