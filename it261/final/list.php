<?php
include('config.php');
include('includes/header.php'); ?>

<header>
<div class="welcome-logout">
<p><a href="index.php?logout='1'">Log out</a></p>
</div>
</header>

<div id="triplist">
<main id="triplist">
    <h1 class="triplist"><?php echo $headline; ?></h1>
    <h2 class="triplist">Trips'List</h2>
    <?php
$sql = 'SELECT * FROM tripslist';

// we need to connect to the database using mysqli_connect() function!!!

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

// create a variable $result 

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

// time for the if statement --- if we have more than 0 rows... yippy skippy

if(mysqli_num_rows($result) > 0) {
// now time for the while loop - and the while loop will return the array 
while($row = mysqli_fetch_assoc($result)) {
echo '<ul>';
echo '<li class="triplist">'.$row['destination'].'</li>';
echo '<li class="triplist">'.$row['dont_missout'].'</li>';
echo '<li class="triplistp"><p>For more information about '.$row['destination'].', please 
click <a href="list-view.php? id='.$row['destination'].'">here!</a></p></li>';
echo '</ul>';
echo '<hr class="triplist">';
} //closing while

} else {
    echo 'Houston, we have a problem!!!';
}

mysqli_free_result($result);
mysqli_close($iConn);

?>

</main>

<?php
include('includes/footer.php'); ?>

