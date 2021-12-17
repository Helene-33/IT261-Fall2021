<?php

include('config.php');

//if isset $_GET['today'] <etc class="">

if(isset($_GET['id'])) {
$id = (int)$_GET['id'];
} else {
    header('Location: includes/header.php');
}

$sql = 'SELECT * FROM tripslist WHERE id_trip = '.$id.'';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

// create a variable $result 

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {
// now time for the while loop - and the while loop will return the array 
while($row = mysqli_fetch_assoc($result)) {
$destination = stripslashes($row['destination']);
$how_long = stripslashes($row['how_long']);
$num_miles = stripslashes($row['num_miles']);
$description = stripslashes($row['description']);
$dont_missout = stripslashes($row['dont_missout']);
$feedback = '';
} //ending while

} else {
    $feedback = 'Something is not working!!!';
}

include('includes/header.php');

?>
<main id="listview">
<h1 class="listview"> Welcome to the page about <?php echo $destination; ?>!</h1>

<?php
if($feedback == '') {
echo '<ul class="listview">';
echo '<li class="listview"><b>Destination: </b>'.$destination.'</li>';
echo '<li class="listview"><b>How many hours to get there? </b>'.$how_long.'</li>';
echo '<li class="listview"><b>Number of miles: </b>'.$num_miles.'</li>';
echo '</ul>';
echo '<p class="listview">'.$description.'</p>'; 
echo '<p class="listview">Return back to the <a href="list.php">trips\' list page!</a></p>';
}


?>

</main>

<aside class="listview">
<?php
if($feedback == '') {
echo '<img class="listview" src="images/list'.$id.'.jpg" alt="'.$destination.'">';
echo '<p class="dont_missout">'.$dont_missout.'</p>';
}

?>
</aside>

<?php

mysqli_free_result($result);
mysqli_close($iConn);

include('includes/footer.php'); ?>
