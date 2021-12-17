<?php 

// this index page is the home page of your wonderful website§
// also, after creating this index.php page, you will not be able to access it UNLESS you login as a user, or register first, then login!

session_start();

include('config.php');

// if the user has not logged in correctly, they will be directed to the log page???

if(!isset($_SESSION['username'])) {
    $_SESSION['msg'] = 'You must login first!';
    header('Location:login.php');
}

if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('Location:login.php');
}

include('includes/header.php');

// Notification message
// if successful, welcome the end user!!!

/*if(isset($_SESSION['success'])) :?>
<div class="success">
<h3>
<?php echo $_SESSION ['success'];
unset ($_SESSION['success']);
?>
</h3>
</div> <!-- end div success -->
<?php endif ;*/

if(isset($_SESSION['username'])) : ?>
<header>
<div class="welcome-logout">
<h3> Hello <?php echo $_SESSION ['username'] ;?></h3>
<p><a href="index.php?logout='1'">Log out</a></p>
</div>
<?php endif ;?>
</header>

<aside>
    <img class="imgaside" src="images/P1060148.JPG" alt="Road trip">
    <h2 class="homeaside"><em>Oh, the places you'll go...</em></h2>
    <p class="homeaside">So many places to visit, so many websites listing them... But what if you don't know <em>exactly</em> where you'd like to go?
Then you came to the right place! <br> Fell free to visit our random daily trip generator, or our "trips'list" to give you ideas and make you discover
places you might not even know about! </p>
</aside>


<div id="wrapperhome">
<h1 class="welcomepage">Welcome <?php echo $_SESSION ['username'] ;?> to A Trip A Day!</h1>
<img class="indexsuccess" src="images/P1050788.JPG" alt="Bryce Canyon">
<p class="indexp">We are super excited to have you on our site!</p>

<!-- Your footer will be place at the bottom of the page -->
</div> <!-- end wrapper--> 
<?php include('includes/footer.php'); ?>