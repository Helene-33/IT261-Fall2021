<?php

ob_start();  // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE');  // We want to see our errors

include('credentials.php');


//login and register pages
// initialize/define our variables
 $first_name = '';
 $last_name = '';
 $email = '';
 $username = '';
 $password = '';
 $success = 'You have successfully logged on!';
 $errors = array();


function myError($myFile, $myLine, $errorMsg)
{
if(defined('DEBUG') && DEBUG)
{
 echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
      echo 'Error message: <b> '.$errorMsg.'</b>';
      die();
  }  else {
      echo ' Houston, we have a problem!';
      die();
  }
    
}


//home
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

$nav['index.php'] = 'Home';
$nav['switch.php'] = 'A Trip A Day!';
$nav['list.php'] = 'Trips\'List';
$nav['about.php'] = 'About';
$nav['contact.php'] = 'Contact';

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
    $title = 'Home page';
    $body = 'home';
    /*$headline = 'Welcome to our Home page for our IT 261 Website!';*/
    break;
    
    case 'switch.php';
    $title = 'A Trip A Day';
    $body = 'tripday';
    $headline = 'Trip Generator!';
    break;
    
    case 'list.php';
    $title = 'Trips\'List';
    $body = 'triplist';
    $headline = 'Searching for an idea? Search no more!';
    break;

    case 'about.php';
    $title = 'About';
    $body = 'about inner';
    $headline = 'About the author of this site:';
    break;
    
    case 'contact.php';
    $title = 'Contact';
    $body = 'contact inner';
    $headline = 'Contact page';
    break;

    case 'thx.php';
    $title = 'Thank you!';
    $body = 'thx inner';
    $headline = 'Thank you for your interest!';
    break;
}



// contact page form
$name = '';
$email = '';
$phone = '';
$about = '';
$contactoption = '';
$heard = '';
$privacy = '';

$name_Err = '';
$email_Err = '';
$phone_Err = '';
$about_Err = '';
$contactoption_Err = '';
$heard_Err = '';
$privacy_Err = '';

if($_SERVER['REQUEST_METHOD'] == 'POST') {

if(empty($_POST['name'])){
    $name_Err = 'Please enter your name';
} else {
    $name = $_POST['name'];
}

if(empty($_POST['email'])){
    $email_Err = 'Please enter your email';
} else {
    $email = $_POST['email'];
}

if(empty($_POST['phone'])) {  // if empty, type in your number
    $phone_Err = 'Please enter your phone number';
} elseif(array_key_exists('phone', $_POST)) {
if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
{ // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
 $phone_Err = 'Invalid format!';
 unset($_POST['phone']);
} else {
$phone = $_POST['phone'];
}
}

if(empty($_POST['about'])){
    $about_Err = 'Please select at least one option';
} else {
$about = $_POST['about'];
}

if(empty($_POST['contactoption'])){
    $contactoption_Err = 'Please select an option';
} else {
$contactoption = $_POST['contactoption'];
}

if(empty($_POST['heard'])){
    $heard_Err = 'Please select an option';
} else {
$heard = $_POST['heard'];
}

if(empty($_POST['privacy'])){
    $privacy_Err = 'You must agree';
} else {
$privacy = $_POST['privacy'];
}

function my_about() {
    $my_return = '';
    if(!empty($_POST['about'])) {
        $my_return = implode(', ', $_POST['about'] );
    }
return $my_return;
}

if(isset(
    $_POST['name'],
    $_POST['email'],
    $_POST['phone'],
    $_POST['about'],
    $_POST['contactoption'],
    $_POST['heard'],
    $_POST['privacy']
    )){
    
$to = 'helene.liobard33@gmail.com';
$subject = 'Test Email,' .date('m/d/y');
$body = '
    This form is from: '.$name.' '.PHP_EOL.'
    Email: '.$email.' '.PHP_EOL.'
    Phone: '.$phone.' '.PHP_EOL.'
    Reason of contact: '.my_about().' '.PHP_EOL.'
    Contact prefered: '.$contactoption.' '.PHP_EOL.'
    How did he/she/they hear about us? '.$heard.' '.PHP_EOL.'

    ';
    
$headers = array(
    'From' => 'noreply@mystudentswa.com',
    'Reply-to' => ''.$email.''
    
    );
    
mail($to, $subject, $body, $headers);
header('Location: thx.php');
    
    }

}