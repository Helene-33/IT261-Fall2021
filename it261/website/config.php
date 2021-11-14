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

    case 'thx.php';
    $title = 'Thank you!';
    $body = 'thx inner';
    $headline = 'You\'re amazing!';
    break;
    
    case 'gallery.php';
    $title = 'Gallery page of our IT 261 Website';
    $body = 'gallery inner';
    $headline = 'Welcome to our Gallery page for our IT 261 Website!';
    break;
}


// email contact form php!!!
$name = '';
$email = '';
$phone = '';
$animals = '';
$contactoption = '';
$heard = '';
$privacy = '';

$name_Err = '';
$email_Err = '';
$phone_Err = '';
$animals_Err = '';
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

if(empty($_POST['animals'])){
    $animals_Err = 'Please select at least one animal!';
} else {
$animals = $_POST['animals'];
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

function my_animals() {
    $my_return = '';
    if(!empty($_POST['animals'])) {
        $my_return = implode(', ', $_POST['animals'] );
    }
return $my_return;
}

if(isset(
    $_POST['name'],
    $_POST['email'],
    $_POST['phone'],
    $_POST['animals'],
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
    Animals selected: '.my_animals().' '.PHP_EOL.'
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


//random home page pictures!!!
$photos = array(
    'landscape1',
    'landscape2',
    'landscape3',
    'landscape4',
    'landscape5',
);

$photos[0] = 'landscape1';
$photos[1] = 'landscape2';
$photos[2] = 'landscape3';
$photos[3] = 'landscape4';
$photos[4] = 'landscape5';

$i = rand(0, 4);
$random_pics = ''.$photos[$i].'.jpg';













?>


