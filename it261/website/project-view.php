<?php

include('config.php');

//if isset $_GET['today'] <etc class="">

if(isset($_GET['id'])) {
$id = (int)$_GET['id'];
} else {
    header('Location: project.php');
}

$sql = 'SELECT * FROM ballets WHERE ballet_number = '.$id.'';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

// create a variable $result 

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {
// now time for the while loop - and the while loop will return the array 
while($row = mysqli_fetch_assoc($result)) {
$ballet_name = stripslashes($row['ballet_name']);
$birthdate = stripslashes($row['birthdate']);
$composer = stripslashes($row['composer']);
$country_origin = stripslashes($row['country_origin']);
$story = stripslashes($row['story']);
$more_info = stripslashes($row['more_info']);
$feedback = '';
} //ending while

} else {
    $feedback = 'Something is not working!!!';
}

include('includes/header.php');
// for the big assignment, you will now call out the header include

?>
<main id="balletpage">
<h1 class="balletpage"> Welcome to our page about <?php echo $ballet_name; ?>!</h1>

<?php
if($feedback == '') {
echo '<ul class="ballet">';
echo '<li class="balletpage"><b>Ballet: </b>'.$ballet_name.'</li>';
echo '<li class="balletpage"><b>Composer: </b>'.$composer.'</li>';
echo '<li class="balletpage"><b>Premiered in: </b>'.$birthdate.'</li>';
echo '<li class="balletpage"><b>Where? </b>' .$country_origin.'</li>';
echo '</ul>';
echo '<p class="balletpage">'.$story.'</p>'; 
echo '<p class="balletpage">Return back to the <a href="project.php">ballets list page!</a></p>';
}


?>

</main>

<aside class="balletpage">
<?php
if($feedback == '') {
echo '<img class="balletpage" src="images/ballet'.$id.'.jpg" alt="'.$ballet_name.'">';
echo '<p class="more_info">'.$more_info.'</p>';
}

?>
</aside>

<?php

mysqli_free_result($result);
mysqli_close($iConn);

include('includes/footer.php');