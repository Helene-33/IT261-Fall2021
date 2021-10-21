<?php
include('includes/header.php'); ?>

<?php  
// this is the beginning of the switch for homework 3!!!!!
if(isset($_GET['today'])) {
    $today = $_GET['today'];
    } else {
    $today = date('l');
    }

switch($today) {
    case 'Monday' :
        $puppy = '<h2> Monday is CavaPoo day! </h2>';
        $pic = 'cavapoo.jpg';
        $alt = 'Cavapoo';
        $content = 'A <b>Cavapoo</b> is a mix between a Cavalier King Charles and a Poodle. Cavapoos go by several names, including Cavadoodle and Cavoodle. <br> Despite their unfortunate status as a designer breed, you can find these mixed breed dogs in shelters and rescues, so remember to adopt! Don’t shop! <br> These adorable pups make amazing family pets, as they’re outgoing and adore attention. While they can work in smaller settings, they definitely thrive in a “pack” setting. If you want a loyal, playful dog who enjoys romping around with you or snuggling on the couch, the Cavapoo may be the dog for you!';
        $bgcolor = 'background-color:olivedrab';
        break;
            
    case 'Tuesday' :
        $puppy = '<h2> Tuesday is Bernese Mountain Dog day! </h2>';
        $pic = 'bernese.jpeg';
        $alt = 'Bernese Mountain Dog';
        $content = 'Big, powerful, and built for hard work, the <b>Bernese Mountain Dog</b> is also strikingly beautiful and blessed with a sweet, affectionate nature. Berners are generally placid but are always up for a romp with the owner, whom they live to please.
        <br>The Bernese Mountain Dog is a large, sturdy worker who can stand over 27 inches at the shoulder. The thick, silky, and moderately long coat is tricolored: jet black, clear white, and rust. The distinctive markings on the coat and face are breed hallmarks and, combined with the intelligent gleam in the dark eyes, add to the Berner\'s aura of majestic nobility. A hardy dog who thrives in cold weather, the Berner\'s brain and brawn helped him multitask on the farms and pastures of Switzerland. Berners get along with the entire family and are particularly gentle with children, but they will often become more attached to one lucky human. Berners are imposing but not threatening, and they maintain an aloof dignity with strangers.';
        $bgcolor = 'background-color:tomato';
        break;
            
    case 'Wednesday' :
        $puppy = '<h2> Wednesday is Old English Sheepdog day! </h2>';
        $pic = 'english.jpg';
        $alt = 'Old English Sheepdog';
        $content = 'The <b>Old English Sheepdog</b> is the archetypical shaggy dog, famous for his profuse coat and peak-a-boo hairdo, a distinctive bear-like gait, and a mellow, agreeable nature. <br>The OES is a big, agile dog who enjoys exploring and a good romp.
        Beneath the Old English Sheepdog\'s profuse double coat is a muscular and compact drover, with plenty of bone and a big rump, standing 21 or 22 inches at the shoulder. Their eyes (when you can see them) are dark brown, or blue, or one of each. The OES breed standard says the skull is \'capacious and rather squarely formed, giving plenty of room for brain power.\' OES move with a bear-like shuffle but are famous for their nimbleness afoot. Regular exercise is required for these strong, able-bodied workers. Equally famed are their many fine housedog qualities: watchfulness, courage, kindliness, and intelligence. Great with children, OES make patient, protective playmates. They are sensible watchdogs known for a loud, ringing bark.';
        $bgcolor = 'background-color:slateblue';
        break;

    case 'Thursday' :
        $puppy = '<h2> Thursday is Border Collie day! </h2>';
        $pic = 'bordercollie.jpg';
        $alt = 'Border Collie';
        $content = 'A remarkably bright workaholic, the <b>Border Collie</b> is an amazing dog\'maybe a bit too amazing for owners without the time, energy, or means to keep it occupied. These energetic dogs will settle down for cuddle time when the workday is done.
        Borders are athletic, medium-sized herders standing 18 to 22 inches at the shoulder. The overall look is that of a muscular but nimble worker unspoiled by passing fads. Both the rough coat and the smooth coat come in a variety of colors and patterns. The almond eyes are the focus of an intelligent expression\'an intense gaze, the Border\'s famous \'herding eye\', is a breed hallmark. <br> On the move, Borders are among the canine kingdom\'s most agile, balanced, and durable citizens. The intelligence, athleticism, and trainability of Borders have a perfect outlet in agility training. Having a job to perform, like agility\'or herding or obedience work\'is key to Border happiness. Amiable among friends, they may be reserved with strangers.';
        $bgcolor = 'background-color:lightgrey';
        break;
        
    case 'Friday' :
        $puppy = '<h2> Friday is AussieDoodle day! </h2>';
        $pic = 'aussiedoodle.jpg';
        $alt = 'AussieDoodle';
        $content = 'The <b>Aussiedoodle</b> is a mixed breed dog — a cross between the Australian Shepherd and Poodle dog breeds. Incredibly smart, playful, and loyal, these pups inherited some of the best qualities from both of their parents.
        Aussiedoodles go by several names, including Aussiepoo and Aussiepoodle. Despite their unfortunate status as a designer breed, you may find these mixed breed dogs in shelters and rescues. So please remember to adopt! Don’t shop! <br>
        These active dogs, often referred to as an “Einstein” breed for their smarts, do well in homes that can provide plenty of attention and exercise. The Aussiedoodle makes an excellent family dog, as long as smaller children know how to safely play with the pup. They are also incredible therapy dogs, given how quickly they bond to a specific human or two.
        See below for all mixed dog breed traits and facts about Aussiedoodles';
        $bgcolor = 'background-color:rosybrown';
        break;
        
    case 'Saturday' :
        $puppy = '<h2> Saturday is French Bulldog day! </h2>';
        $pic = 'frenchy.png';
        $alt = 'French Bulldog';
        $content = 'The one-of-a-kind <b>French Bulldog</b>, with his large bat ears and even disposition, is one of the world\'s most popular small-dog breeds, especially among city dwellers. The Frenchie is playful, alert, adaptable, and completely irresistible.
        The French Bulldog resembles a Bulldog in miniature, except for the large, erect \'bat ears\' that are the breed\'s trademark feature. The head is large and square, with heavy wrinkles rolled above the extremely short nose. The body beneath the smooth, brilliant coat is compact and muscular. The bright, affectionate Frenchie is a charmer. <br> Dogs of few words, Frenchies don\'t bark much\'but their alertness makes them excellent watchdogs. They happily adapt to life with singles, couples, or families, and do not require a lot of outdoor exercise. They get on well with other animals and enjoy making new friends of the human variety. It is no wonder that city folk from Paris to Peoria swear by this vastly amusing and companionable breed.';
        $bgcolor = 'background-color:khaki';
        break;
        
    case 'Sunday' :
        $puppy = '<h2> Sunday is Corgi day! </h2>';
        $pic = 'corgi.jpg';
        $alt = 'Corgi';
        $content = 'Among the most agreeable of all small housedogs, the <b>Pembroke Welsh Corgi</b> is a strong, athletic, and lively little herder who is affectionate and companionable without being needy. They are one the world\'s most popular herding breeds.
        At 10 to 12 inches at the shoulder and 27 to 30 pounds, a well-built male Pembroke presents a big dog in a small package. Short but powerful legs, muscular thighs, and a deep chest equip him for a hard day\'s work. Built long and low, Pembrokes are surprisingly quick and agile. They can be red, sable, fawn, and black and tan, with or without white markings. <br> The Pembroke is a bright, sensitive dog who enjoys play with his human family and responds well to training. As herders bred to move cattle, they are fearless and independent. They are vigilant watchdogs, with acute senses and a \'big dog\' bark. Families who can meet their bold but kindly Pembroke\'s need for activity and togetherness will never have a more loyal, loving pet.';
        $bgcolor = 'background-color:brown';
        break;
        
        }

?>

<style>
img {
    width: 340px;
    margin: 20px;
}

p{
    margin: 10px;
    font-size: 14px;
    font-family: Verdana, Helvetica, sans-serif;
    line-height: 28px;
}

h2, h3 {
    margin: 10px;
}

li {
    list-style-type: none;
    margin-left:30px;
}

a {
    text-decoration:none;
    font-size: 14px;
    font-family: Verdana, Helvetica, sans-serif;
    line-height: 28px;
}
</style>

<div id="wrapper">

<main style="<?php echo $bgcolor;?>">
    <h1><?php echo $headline; ?></h1>
    <?php echo $puppy; ?>
    <img src="images/<?php echo $pic; ?>" alt="<?php echo $alt; ?>">
<p><?php echo $content; ?></p>
</main>

<aside>
    <h2>A pup a day!</h2>
    <h3>Check out the other daily pups!</h3>
<ul>
    <li><a href ="daily.php?today=Monday">Monday</a></li>
    <li><a href ="daily.php?today=Tuesday">Tuesday</a></li>
    <li><a href ="daily.php?today=Wednesday">Wednesday</a></li>
    <li><a href ="daily.php?today=Thursday">Thursday</a></li>
    <li><a href ="daily.php?today=Friday">Friday</a></li>
    <li><a href ="daily.php?today=Saturday">Saturday</a></li>
    <li><a href ="daily.php?today=Sunday">Sunday</a></li>
</ul>
</aside>

<?php
include('includes/footer.php'); ?>