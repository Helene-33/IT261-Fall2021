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
    <img class="about" src="images/mtrainier.jpg" alt="Hiking Mt Rainier">
    <p class="about">Hello!<br> My name is Helene, and for two years I traveled at least once a month in a 
different U.S. state. <br> I feel extremely lucky to have been able to discover so many national parks, to 
visit so many cities and little towns, to experience so many different cultures and to meet so many people. <br> 
Due to the COVID pandemic and changes in my personal life, I aheven't been able to travel as much recently, but would 
love to share my passion and experience in North American trips with people here. </p>
    
</main>

<?php
include('includes/footer.php'); ?>