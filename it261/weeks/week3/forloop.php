<?php
//for loops
// tricky!

for ($x = 0; $x <= 21; $x += 3) {
    echo "The number is: $x <br>";
}

echo '<br>';

// is a for loop for our famous celcius - far converter

//do not call out the celsius variable outside of the loop!!!!!!

for ($celsius = 0; $celsius <= 100; $celsius ++) {
$far = ($celsius * 9/5) + 32;
$friendly_far = floor($far);
echo '<b> Farenheit: </b> '.$friendly_far.' <b> Celsius: </b> <span style = "color:red; font-weight:bold;">'.$celsius.' </span><hr> ';

}

//kilometers and we have miles

for ($kilometer = 0; $kilometer <= 50; $kilometer ++) {
    $miles = ($kilometer / 1.609344);
    $friendly_miles = number_format($miles, 2);
    echo '<b> Miles: </b> '.$friendly_miles.' <b> Kilometer: </b> <span style = "color:green; font-weight:bold;">'.$kilometer.' </span><hr> ';
    
    }

