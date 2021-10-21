<?php
//More on variables, arithmetic and additional set functions

$a = '20';
$b = '30';
$c = $a + $b;
echo $c;
echo '<br>';

$a = '700';
$b = '330';
$c = $a - $b;
echo $c;
echo '<br>';

$a = '50';
$b = '5';
$c = $a * $b;
echo $c;
echo '<br>';

$money = 100;
$money /= 7;
$friendly_money = number_format($money,2);
echo $friendly_money;
echo '<br>';

// Two new functions: rounding up and rounding down (floor and ceil)
$friendly_money = floor($money);
echo $friendly_money;
echo '<br>';

$friendly_money = ceil($money);
echo $friendly_money;
echo '<br>';

//Logic and calculations!!
//Circumference of a circle: circumference = 2 pie r
$radius= '10';
$pie= 3.14;
$circumference = (2 * $pie) * $radius;
echo $circumference;
echo '<br>';

//alway think logic first
// 22 degrees celsius = ? far?
// far = (C * 9/5) + 32
$celsius = 14;
$far = ($celsius * 9/5) + 32;
$friendly_far = floor($far);
echo '<br>';
echo ''.$friendly_far.' degrees';
echo '<br>';

//logic and the exchange rate
// canadian = 100
// exchange = .79 

$canada = 1433;
$canada *= .79;
echo $canada;

echo '<p> I have <b>$'.$canada.'</b> American dollars! </p>';
echo '<br>';

$canada = 1433;
$canada *= .79;
$friendly_canada = ceil($canada);

echo '<p> I have <b>$'.$friendly_canada.'</b> American dollars! </p>';