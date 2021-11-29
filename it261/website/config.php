<?php

ob_start();  // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE');  // We want to see our errors

include('credentials.php');

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

    case 'project-view.php';
    $title = 'Ballet page of our IT 261 Website';
    $body = 'project inner';
    $headline = 'Here is more information!';
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
    
$to = 'heleneliobard@hotmail.com';
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


//gallery page

$potter['Philosopher_Stone'] = 'stone_Harry Potter and the Philosopher\'s Stone (1997) is a fantasy novel written by British author 
J. K. Rowling. It follows Harry Potter, a young wizard who discovers his magical heritage 
on his eleventh birthday, when he receives a letter of acceptance to Hogwarts School of Witchcraft and Wizardry.';
$potter['The_Chamber_of_Secrets'] = 'secre_Harry Potter and the Chamber of Secrets (1998) follows Harry\'s second year at Hogwarts, during which 
a series of messages on the walls of the school\'s corridors warn that the "Chamber of Secrets" has been 
opened and that the "heir of Slytherin" would kill all pupils who do not come from all-magical families.';
$potter['The_Prisoner_of_Azkaban'] = 'azkab_Harry Potter and the Prisoner of Azkaban (1999) is the third in the Harry Potter series. 
The book follows Harry Potter, a young wizard, in his third year at Hogwarts School of Witchcraft and Wizardry. 
Along with friends Ronald Weasley and Hermione Granger, Harry investigates Sirius Black, an escaped prisoner from Azkaban, 
the wizard prison, believed to be one of Lord Voldemort\'s old allies.';
$potter['Goblet_of_Fire'] = 'goble_Harry Potter and the Goblet of Fire (2000) is the fourth novel in the Harry Potter series. 
It follows Harry Potter, a wizard in his fourth year at Hogwarts School of Witchcraft and Wizardry, and the
 mystery surrounding the entry of Harry\'s name into the Triwizard Tournament, in which he is forced to compete.';
$potter['Order_of_Phoenix'] = 'phoen_In Harry Potter and the Order of the Phoenix (2003), Harry is due to start his fifth year at Hogwarts School of 
Witchcraft and Wizardry. He is desperate to get back to school and find out why his friends Ron and Hermione have been so secretive 
all summer. However, what Harry is about to discover in his new year at Hogwarts will turn his world upside down.';
$potter['The_Half-Blood_Prince'] = 'blood_Harry Potter and the Half-Blood Prince (2005) is set during Harry Potter\'s sixth year at Hogwarts. The novel 
explores the past of the boy wizard\'s nemesis, Lord Voldemort, and Harry\'s preparations for the final battle against Voldemort 
alongside his headmaster and mentor Albus Dumbledore.';
$potter['The_Deathly_Hallows'] = 'death_Harry Potter and the Deathly Hallows (2009) is the last book of the saga. Readers beware: the brilliant, 
breathtaking conclusion to J.K. Rowling\'s spellbinding series is not for the faint of heart--such revelations, battles, and betrayals 
await in Harry Potter and the Deathly Hallows that no fan will make it to the end unscathed.';
// $name                     $image
// $key                      $value




?>


