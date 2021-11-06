<?php

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['calculator-days-errors-sticky.php'] = 'Calculator';
$nav['project.php'] = 'Project';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

// create a function for our navigation, so the function is called out on our header.php page

function my_nav($nav) {
$my_return = '';
foreach($nav as $key => $value) {
if(THIS_PAGE == $key) {
$my_return .= '<li><a href=" '.$key.'" class="current">'.$value.'</a></li>';
} else {
$my_return .= '<li><a href=" '.$key.'">'.$value.'</a></li>';
} //end else
} //end foreach
return $my_return;
} //end function

switch(THIS_PAGE) {
    case 'index.php';
    $title = 'Home page of our IT 261 Website';
    $body = 'home';
    $headline = 'Welcome to our Home page for our IT 261 Website!';
    break;
    
    case 'about.php';
    $title = 'About page of our IT 261 Website';
    $body = 'about inner';
    $headline = 'Welcome to our About page for our IT 261 Website!';
    break;
    
    case 'daily.php';
    $title = 'Daily page of our IT 261 Website';
    $body = 'daily inner';
    $headline = 'Welcome to our Daily page!';
    break;

    case 'calculator-days-errors-sticky.php';
    $title = 'Calculator page of our IT 261 Website';
    $body = 'calculator inner';
    $headline = 'Welcome to our Calculator page!';
    break;
    
    case 'project.php';
    $title = 'Project page of our IT 261 Website';
    $body = 'project inner';
    $headline = 'Welcome to our Project page for our IT 261 Website!';
    break;
    
    case 'contact.php';
    $title = 'Contact page of our IT 261 Website';
    $body = 'contact inner';
    $headline = 'Welcome to our Contact page for our IT 261 Website!';
    break;
    
    case 'gallery.php';
    $title = 'Gallery page of our IT 261 Website';
    $body = 'gallery inner';
    $headline = 'Welcome to our Gallery page for our IT 261 Website!';
    break;
}

// email form php!