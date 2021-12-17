<?php
include('config.php');
include('includes/header.php');?>

<header>
<div class="welcome-logout">
<p><a href="index.php?logout='1'">Log out</a></p>
</div>
</header>

<div id="wrapper">
<main class="contact">
    <h1><?php echo $headline; ?></h1>
    <h3 class="contact">Thanks again for visiting our website. </h3>
    <img class="contact" src="images/P1060042.JPG" alt="Sunset Monument Valley">
    <p class="contact">Any comments? Suggestions? Questions? 
    <br> If so, please fill out this form and we will come back to you within 48h! </p>
    
<?php
include('includes/form.php'); ?>

</main>

<?php
include('includes/footer.php'); ?>