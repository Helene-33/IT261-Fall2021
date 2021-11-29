<?php
// people.php
//people-view.php
// config file
// credentials
// don't forget, this needs to be UPLOADED onto your server, will NOT work on localhost!

include('config.php');
include('includes/header.php');
// for your big database assignment, your header include would go right here!!!

// we need to grab our table and assign it to a variable
?>
<h1>Welcome to my people page class exercise!</h1>
<main>
<?php
$sql = 'SELECT * FROM people';

// we need to connect to the database using mysqli_connect() function!!!

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

// create a variable $result 

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

// time for the if statement --- if we have more than 0 rows... yippy skippy

if(mysqli_num_rows($result) > 0) {
// now time for the while loop - and the while loop will return the array 
while($row = mysqli_fetch_assoc($result)) {
echo '<ul>';
echo '<li><p>For more information about '.$row['first_name'].', please click <a href="people-view.php? id='.$row['people_id'].'">here!</a></p></li>';
echo '<li>'.$row['first_name'].'</li>';
echo '<li>'.$row['last_name'].'</li>';
echo '<li>'.$row['email'].'</li>';
echo '</ul>';
echo '<hr>';
} //closing while

} else {
    echo 'Houston, we have a problem!!!';
}

mysqli_free_result($result);
mysqli_close($iConn);

?>
</main>

<aside>
<img class="center" src="images/asidepicture.jpg" alt="Uncle Sam">';


</aside>

</div> <!--end wrapper-->
<?php
include('includes/footer.php');
