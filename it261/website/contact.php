<?php
include('config.php');
include('includes/header.php'); ?>

<div id="wrapper">
<main class="contact">
    <h1><?php echo $headline; ?></h1>
    <p class="contact">So many species need our help and support. <br> Are you interested
        in sponsoring an animal from our endangered species association? <br>
    Would you like to have more information about how symbolic species adoptions
works? <br> If so, please fill out this form and we will contact you soon! </p>
    <h2 class="contact">Thank you for your interest!</h2>
    
<?php
include('includes/form.php'); ?>

</main>

<aside class="contact">
    <h3 class="contact">Thank you for your support!</h3>
    <img class="contact" src = "images/happykoala.jpg" alt = "Happy Koala!">
</aside>

<?php
include('includes/footer.php'); ?>