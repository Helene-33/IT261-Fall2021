<?php

$name = 'Olga';
$weather = 'Today is a sunny day';
$body_temp = 98.6;
//98.6 is a float - if it were 98, it would be an integer

echo $name;
echo '<br>';
echo 'My name is $name';
echo '<br>';
echo '<br>';
echo "My name is $name";
echo '<br>';

//if use single quotes around a variable, the value of the variable will not display
//if use double quotes, the variable value will display!

echo 'My name is '.$name.' ';
echo '<br>';
echo $weather;
echo '<br>';
echo $body_temp;
echo '<br>';
echo 'The normal body temperature is '.$body_temp.' and all is well!';
$name = 'Sharon';
echo'<br>';
echo $name;
echo'<br>';

$x = 20;
$y = 5;
echo $x;
echo'<br>';
$z = $x + $y;
echo'<br>';
echo $z;
$z = $x * $y;
echo'<br>';
echo $z;
echo '<br>';

$first_name = 'Olga';
$last_name = 'Smith';

echo $first_name.' '.$last_name;
echo '<br>';
echo ' '.$first_name.' '.$last_name.'';
echo '<br>';
echo 'Here are the names with a single quote! '.$first_name.' '.$last_name.' ';
//punctuation challenges - inside single quotes, you MUST nest the variable with the following '.$variable.'
//Now, when you have an apostraphe, you must use ESCAPE before the apostraphe \'

echo '<br>';
echo "Here are the names with a double's quote! $first_name $last_name";
echo '<br>';
$name = 'Olga';
$name .='Smith';
echo $name;
echo '<br>';

$x = 20;
$x *= 2;
echo $x;

echo '<br>';

$x = 120;
$x /= 2;
echo $x;

echo '<br>';

$x = 120;
$x *= .09;
echo $x;

//our first function - number_format()
echo '<br>';
$x = 137;
$x /= 4;
$friendly_x = number_format($x, 1);
echo $friendly_x;
echo '<br>';

//our second pre set function - the date function
echo date('Y');
echo '<br>';
echo date('l');
echo '<br>';

//arrays - you cannot echo an array
$fruit[] = 'orange';
$fruit[] = 'banana';
$fruit[] = 'grapes';
$fruit[] = 'apples';
$fruit[] = 'cherries';
echo '<br>';
echo $fruit[3]; //you can echo an indexed option
echo '<br>';
$fruit = array(
    'orange', 
    'banana',
    'grapes',
    'apples',
    'cherries',
);

$fruit =[
    'orange', 
    'banana',
    'grapes',
    'apples',
    'cherries',
    'strawberries',
];
 // cannot echo an array!
echo $fruit;
echo '<br>';
print_r($fruit);
echo '<br>';
var_dump($fruit);

echo '<br>';
//another array in the world of websites

$nav[]='Home';
$nav[]='About';
$nav[]='Daily';
$nav[]='Contact';
$nav[]='Gallery';

echo $nav[0];

echo '<br>';
//associative array

$nav['index.php']='Home';
$nav['about.php']='About';
$nav['daily.php']='Daily';
$nav['contact.php']='Contact';
$nav['gallery.php']='Gallery';

//index.php is the key of the array, and Home is the value
$nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery'
);

echo '<pre>';
var_dump($nav);
echo '</pre>';

echo '<br>';

$show = 'The Crown';
$show_actor = 'Olivia Colman';
$show_genre = 'Historical Fiction';

echo 'My favorite series during 2020 was "'.$show.'" staring, '.$show_actor.',
and it is a '.$show_genre.' ';


