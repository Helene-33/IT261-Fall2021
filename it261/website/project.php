<?php
include('config.php');
include('includes/header.php'); ?>

<div id="ballet">
<main id="ballet">
    <h1 class="ballet"><?php echo $headline; ?></h1>
    <h2 class="ballet">Classic ballets</h2>
    <p class="ballet">The Holidays season is upon us, and The Nutcraker is back at the Seattle Center! <br> If you would like to know more about
        some classic ballets, feel free to visit the following pages: </p>
    <?php
$sql = 'SELECT * FROM ballets';

// we need to connect to the database using mysqli_connect() function!!!

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

// create a variable $result 

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

// time for the if statement --- if we have more than 0 rows... yippy skippy

if(mysqli_num_rows($result) > 0) {
// now time for the while loop - and the while loop will return the array 
while($row = mysqli_fetch_assoc($result)) {
echo '<ul>';
echo '<li class="ballet">'.$row['ballet_name'].'</li>';
//echo '<li class="ballet">'.$row['birthdate'].'</li>';
echo '<li class="ballet">'.$row['composer'].'</li>';
//echo '<li class="ballet">'.$row['story'].'</li>';
//echo '<li class="ballet">'.$row['more_info'].'</li>';
echo '<li class="balletp"><p>For more information about '.$row['ballet_name'].', please click <a href="project-view.php? id='.$row['ballet_number'].'">here!</a></p></li>';
echo '</ul>';
echo '<hr class="ballet">';
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