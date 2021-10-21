<?php
// Prints the day, date, month, year, time, AM or PM
echo date("l jS \of F Y h:i:s A");
echo '<br>';

// small h is giving the 12 hours format, big H the 24 hours format!!
echo date("H:i");
echo '<br>';

date_default_timezone_set('America/Los_Angeles');
echo date("H:i");
echo '<br>';

// I will use an if/elseif statement, resulting in a different message based on the time of day
// if the time is less than 11, it's morning
// it the time is less than 16, it's afternoon
// else, it's evening
// we need to assign our date to a variable!!
$time = date("H:i");
if($time <= 11) {
echo '<h2 style = "color:yellow;">Good Morning, Olga</h2>';
} elseif($time <= 16) {
echo '<h2 style = "color:lightblue;">Good Afternoon, Olga</h2>';
} else {
echo '<h2 style = "color:purple;">Good Evening, Olga</h2>';
}
// we can place html elements inside our echo