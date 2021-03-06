<?php
// class coffee exercise
// if today is Thursday, it will be pumpkin latte day
// we will start with the isset() function
// then we will introduce our first GLOBAL variable
// our switch

//$variable = 'life is good';
//if(isset($variable)) {
//echo 'Yippy-skippy!!!';
//} else {
//echo 'Not';
//}

// starting the switch
// if something is set, $today, then all is well
// else, today is TODAY

//GLOBAL VARIABLES are capitalized and start with $_GET


if(isset($_GET['today'])) {
$today = $_GET['today'];
} else {
$today = date('l');
}

switch($today) {
case 'Monday' :
$coffee = '<h2> Monday is our Pumpkin Spice Day! </h2>';
$pic = 'pumpkin.jpg';
$alt = 'Pumpkin';
$content = 'The <b>Pumpkin Spice Latte</b> is a coffee drink made with a mix of traditional autumn spice flavors, steamed milk, espresso, and often sugar, topped with whipped cream and pumpkin pie spice. The beverage is most commonly associated with Starbucks, which first offered the drink in 2003, and the season of fall.';
$bgcolor = 'background-color:lightsalmon';
break;

case 'Tuesday' :
$coffee = '<h2> Tuesday is our Latte Day! </h2>';
$pic = 'latte.jpg';
$alt = 'Latte';
$content = 'A <b>latte</b> is a classic coffee that’s constructed with the two pillar ingredients: espresso and steamed milk. The word “latte” comes from the Italian word “caffè e latte” (other variants are “caffeelatte” and “caffellatte”), which simply means “coffee & milk.” The standard combination for a latte is 1/3 espresso, 2/3 steamed milk, and a small, thin layer of microfoam on the surface. With this ratio, baristas can easily adjust the size of the latte when you order it, though the traditional size of the latte ranges between 10-12 ounces. ';
$bgcolor = 'background-color:peachpuff';
break;
        
case 'Wednesday' :
$coffee = '<h2> Wednesday is our Mocha Day! </h2>';
$pic = 'mocha.jpg';
$alt = 'Mocha';
$content = 'Simply put: the <b>mocha</b> is short for a “mocha latte” or a “caffe mocha,” which is just a regular latte with chocolate syrup added to it. One of the great reasons why many coffee fanatics love the latte is because they are customizable, and the mocha is a prime example of that.';
$bgcolor = 'background-color:steelblue';
break;


case 'Thursday' :
$coffee = '<h2> Thursday is our Cap Day! </h2>';
$pic = 'cap.jpg';
$alt = 'Cappucino';
$content = 'A <b>cappuccino</b> is an espresso-based coffe drink that originated in Italy, and is simply prepared with steamed milk foam. Variations of the drink involve the use of cream instead of milk, using non-dairy milk substitutes and flavoring with cinnamon or chocolate powder.';
$bgcolor = 'background-color:indianred';
break;

case 'Friday' :
$coffee = '<h2> Friday is our Americano Day! </h2>';
$pic = 'americano.jpg';
$alt = 'Americano';
$content = '<b>Caffe Americano</b> is a type of coffee drink prepared by diluting an espresso with hot water, giving it a similar strength to, but different flavor from, traditionally brewed coffee. The strength of an Americano varies with the number of shots of espresso and the amount of water added.';
$bgcolor = 'background-color:brown';
break;

case 'Saturday' :
$coffee = '<h2> Saturday is our Regular Joe Day! </h2>';
$pic = 'coffee.png';
$alt = 'Coffee';
$content = 'In New York, coffee snobbery is the norm with fancy (and admittedly delicious) java joints like Blue Bottle, Gorilla Coffee and Brooklyn Roasting. But the mark of an authentic coffee snob is someone who demands a "regular coffee"-usally at a deli/corner store/bodega. <br> <i> A <b>regular coffee</b> is a coffee with cream (or milk) and two sugars.</i>';
$bgcolor = 'background-color:chocolate';
break;

case 'Sunday' :
$coffee = '<h2> Sunday is our Green Tea Day! </h2>';
$pic = 'green-tea.jpg';
$alt = 'Green Tea';
$content = '<b>Green Tea</b> is a type of tea that is made from Camellia sinensis leaves and buds that have not undergone the same withering and oxidation process used ot make oolong teas and black teas. Green tea originated in China, but its production and manufacture has spread to other countries in East Asia.';
$bgcolor = 'background-color:aquamarine';
break;
}
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Switch Classwork Exercise</title>
<style>

#wrapper {
    width: 940px;
    margin: 20px auto;
}

</style>

</head>
<body style="<?php echo $bgcolor;?>">
<div id="wrapper">
<h1>My Wonderful Switch Classwork Exercise!</h1>
<?php
echo $coffee;
?>
<img src="images/<?php echo $pic; ?>" alt="<?php echo $alt; ?>">
<p><?php echo $content; ?></p>

<h2>Check out our Daily Specials</h2>
<ul>
    <li><a href ="switch.php?today=Monday">Monday</a></li>
    <li><a href ="switch.php?today=Tuesday">Tuesday</a></li>
    <li><a href ="switch.php?today=Wednesday">Wednesday</a></li>
    <li><a href ="switch.php?today=Thursday">Thursday</a></li>
    <li><a href ="switch.php?today=Friday">Friday</a></li>
    <li><a href ="switch.php?today=Saturday">Saturday</a></li>
    <li><a href ="switch.php?today=Sunday">Sunday</a></li>
</ul>
</div>
</body>
</html>