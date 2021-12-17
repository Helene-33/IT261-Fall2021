<?php
include('config.php');
include('includes/header.php'); ?>

<header>
<div class="welcome-logout">
<p><a href="index.php?logout='1'">Log out</a></p>
</div>
</header>

<?php  
// this is the beginning of the switch!!!!!
if(isset($_GET['today'])) {
    $today = $_GET['today'];
    } else {
    $today = date('l');
    }

switch($today) {
    case 'Monday' :
        $place = '<h2> On Monday, let\'s go to Alaska! </h2>';
        $pic = 'lights.jpg';
        $alt = 'Northern Lights';
        $content = 'Alaska is a gorgeous wild state that I had the chance to visit in January 2018. With only 4 hours of daylight, we made
        the most of our snowy weekend in Fairbanks by seeing Northern lights, going dog sleeding and visiting a ice museum.
        <br><b>Extra:</b> North Pole, situated 14 miles southeast of Fairbanks, is a cute little town with a full
        Christmas spirit all year long, candy canes lamposts in the streets, and even Santa\'s workshop!';
        $bgcolor = 'background-color:aliceblue';
        break;
            
    case 'Tuesday' :
        $place = '<h2> Let\'s head South to Key West on Tuesday! </h2>';
        $pic = 'keywest.jpg';
        $alt = 'KeyWest';
        $content = 'As close to Cuba as you can be while still being in the U.S., Key West is a day dream destination.
        Full of pastel, conch style houses, little stores, nice beaches and snorkeling oportunities, you do not want to miss it!
        <br><b>Extra:</b> If you want to avoid the struggle of driving and parking all the way down there, some bus companies are 
        leaving everyday from Miami and will take you safetly, stressfree and comfortably to Key West!';
        $bgcolor = 'background-color:antiquewhite';
        break;
            
    case 'Wednesday' :
        $place = '<h2> Wednesday... Time for the Happiest place on Earth! </h2>';
        $pic = 'disneyland.JPG.jpg';
        $alt = 'Disneyland';
        $content = 'The first Disney park (and the only one Walt Disney was able to visit) is in Anhaeim, California. Divided in 
        two parks, Disneyland Park and Walt Disney Studio, this destination open all year long offers rides, shows, treats, and 
        definitely a lot of fun for everyone!
        <br><b>Extra:</b> To avoid lines, start with the end of the park and work your way back to the begining to finish your day there!';
        $bgcolor = 'background-color:lightpink';
        break;

    case 'Thursday' :
        $place = '<h2> Crater Lake is for Thursday! </h2>';
        $pic = 'craterlake.jpg';
        $alt = 'Crater Lake';
        $content = 'My favorite american park; Crater Lake. Famous for its deep blue color and water clarity, Crater Lake was formed 7.700 years ago
        when a 12.000 foot tall volcano erupted and collapsed. 
        <br><b>Extra:</b> If you are brave enough to go all the way down (and all the way back up), you are allowed to kayak in this lake!';
        $bgcolor = 'background-color:lightskyblue';
        break;
        
    case 'Friday' :
        $place = '<h2> New York day on Friday! </h2>';
        $pic = 'newyork.jpg';
        $alt = 'NewYork';
        $content = 'If I can make it there, I\'ll make it anywhere! You know the song, New York City never sleeps, and is the place to be if you 
        want to experience tons of museums, parks, shops, and amazing views from skygratters.
        <br><b>Extra:</b> First time in the Big Apple? If you plan to do a lot of touristic activity, take a city pass; it contains 5 tickets
        to some of the biggest attractions NYC has to offer.';
        $bgcolor = 'background-color:thistle';
        break;
        
    case 'Saturday' :
        $place = '<h2> Saturday is San Francisco day! </h2>';
        $pic = 'sanfransisco.jpg';
        $alt = 'San Fransisco';
        $content = 'San Fransisco is a great destination for a day, or two, or ten! You will always find something to do there.
        <br><b>Extra:</b> Right accros the Golden Gate Bridge, Kirby Cove is a tiny unknown beach that offers tranquility and an amazing 
        view (if you don\'t believe me, take another look at the picture of the page!';
        $bgcolor = 'background-color:wheat';
        break;
        
    case 'Sunday' :
        $place = '<h2> Sunday is Seattle day! </h2>';
        $pic = 'seattle.jpg';
        $alt = 'Seattle';
        $content = 'The rainy city is my home since almost 2 years now, and I wouldn\'t exchange it for any sunny destinations. The wramth and 
        constant welcoming of its habitant is making up for the long and rainy winters!
        <br><b>Extra:</b> Weither you are into hiking or water activity, Seattle has it all: endless hikes in the mountains, many lakes all around, 
        and the proximity of the ocean where you can observe whales and orcas!';
        $bgcolor = 'background-color:teal';
        break;
        
        }

?>


<div id="wrapper">

<main class="daily" style="<?php echo $bgcolor;?>">
    <h1><?php echo $headline; ?></h1>
    <?php echo $place; ?>
    <img class="daily" src="images/<?php echo $pic; ?>" alt="<?php echo $alt; ?>">
<p class="daily"><?php echo $content; ?></p>
</main>

<aside class="daily">
    <h2 class="daily">A Trip a Day!</h2>
    <h3 class="daily">Check out the other ideas of destinations!</h3>
<ul>
    <li class="daily"><a href ="switch.php?today=Monday" class="daily">Monday</a></li>
    <li class="daily"><a href ="switch.php?today=Tuesday" class="daily">Tuesday</a></li>
    <li class="daily"><a href ="switch.php?today=Wednesday" class="daily">Wednesday</a></li>
    <li class="daily"><a href ="switch.php?today=Thursday" class="daily">Thursday</a></li>
    <li class="daily"><a href ="switch.php?today=Friday" class="daily">Friday</a></li>
    <li class="daily"><a href ="switch.php?today=Saturday" class="daily">Saturday</a></li>
    <li class="daily"><a href ="switch.php?today=Sunday" class="daily">Sunday</a></li>
</ul>
</aside>

<?php
include('includes/footer.php'); ?>
