<?php
include('config.php');
include('includes/header.php'); ?>

<!--LOGIC: have to add an average speed?? YES!!!
    Include travel time depending on speed: total miles / speed in mph
The input is HOURS/DAY I want to drive, BUT the output is TOTAL HOURS (TRAVEL TIME) needed for the trip in hours & days!!!!!!!
Need calculate TOTAL = total cost for gas 
    FORMULA: (total miles / vehicule MPG) * gas price per gallon
Need have hours turned into days
    FORMULA: days = hours / 24-->

<form action="
<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>
" method="post">
<fieldset>
<label for="name">Your Name:</label>
<input type="text" name="name" value="
<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']) ;?>
">

<label for="miles">How many miles will you be driving?</label>
<input type="text" name="miles" value="
<?php if(isset($_POST['miles'])) echo htmlspecialchars($_POST['miles']) ;?>
">

<label for="speed">What will be your average speed in mph?</label>
<input type="text" name="speed" value="
<?php if(isset($_POST['speed'])) echo htmlspecialchars($_POST['speed']) ;?>
">

<label for="hours">How many hours per day would you like to be driving?</label>
<input type="text" name="hours" value="
<?php if(isset($_POST['hours'])) echo htmlspecialchars($_POST['hours']) ;?>
">

<label for="price">Price per gallon?</label>
<ul>
<li><input type="radio" name="price" value="3.00"
<?php if(isset($_POST['price']) && $_POST['price'] == '3.00') echo 'checked="checked"' ;?>>
$3.00</li>
<li><input type="radio" name="price" value="3.50"
<?php if(isset($_POST['price']) && $_POST['price'] == '3.50') echo 'checked="checked"' ;?>>
$3.50</li>
<li><input type="radio" name="price" value="4.00"
<?php if(isset($_POST['price']) && $_POST['price'] == '4.00') echo 'checked="checked"' ;?>>
$4.00</li>
</ul>

<!-- Great value is 40 miles per hour, Terrible value is 10-->

<label for="efficiency">Fuel Efficiency:</label>
<select name="efficiency">
<option value="" NULL
<?php if (isset($_POST['efficiency']) && $_POST['efficiency'] == NULL) echo 'selected= "unselected"' ;?>>
Select Fuel Efficiency</option>
<option value="10" 
<?php if (isset($_POST['efficiency']) && $_POST['efficiency'] == '10') echo 'selected= "selected"' ;?>>
Terrible</option>
<option value="20"
<?php if (isset($_POST['efficiency']) && $_POST['efficiency'] == '20') echo 'selected= "selected"' ;?>>
Getting Better</option>
<option value="30"
<?php if (isset($_POST['efficiency']) && $_POST['efficiency'] == '30') echo 'selected= "selected"' ;?>>
Good</option>
<option value="40"
<?php if (isset($_POST['efficiency']) && $_POST['efficiency'] == '40') echo 'selected= "selected"' ;?>>
Great</option>
</select>

<input type="submit" value="Calculate">
<p><a href="">Reset</a></p>
</fieldset>
</form>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {

if(empty($_POST['name'])) {
    echo '<span class="error">Please fill out your name</span>';
}

if(empty($_POST['miles'])) {
    echo '<span class="error">Please fill out your number of miles</span>';
}

if(empty($_POST['speed'])) {
    echo '<span class="error">Please fill out your average speed</span>';
}

if(empty($_POST['hours'])) {
    echo '<span class="error">Please fill out your number of hours</span>';
}

if(empty($_POST['price'])) {
    echo '<span class="error">Please select a price per gallon</span>';
}

if($_POST['efficiency'] == NULL) {
    echo '<span class="error">Please select your vehicule\'s efficiency!</span>';
}

if(isset(
    $_POST['name'],
    $_POST['miles'],
    $_POST['speed'],
    $_POST['hours'],
    $_POST['price'],
    $_POST['efficiency'])
) {
$name = $_POST['name'];
$miles = $_POST['miles'];
$speed = $_POST['speed'];
$hours = $_POST['hours'];
$price = $_POST['price'];
$efficiency = $_POST['efficiency'];




if($miles == 0) {
    $miles = 1;
}
if($efficiency == 0) {
    $efficiency = 1;
}
$totalmoney = (intval($miles) / intval($efficiency)) * intval($price);
if($speed == 0) {
    $speed = 1;
}
$traveltime = (intval($miles) / intval($speed));
if($hours == 0) {
    $hours = 1;
}
$traveltimedays = intval($traveltime) / intval($hours);

if(!empty ($name && $miles && $speed && $hours && $price && $efficiency)) {
    
echo '
<div class="boxcalc">
<h2 class="h2calc">Calculator Results</h2>
<p>'.$name.', you will be driving <b>'.$miles.' miles</b><br>
Your vehicule has an efficiency rating of <b>'.$efficiency.' miles per gallon</b><br>
Your total cost for gas will be <b>$'.floor($totalmoney).' dollars</b><br>
You will be driving a total of <b>'.floor($traveltime).' hours equating to '.floor($traveltimedays).' days.</b></p>
</div>';

} // close if empty

} // close isset

} //server request

?>

<?php
include('includes/footer.php'); ?>