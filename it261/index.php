<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" >
<link href="css/styles.css" type="text/css" rel="stylesheet">
<title>My IT261 Portal Page</title>

</head>

<body>
    <header>
        <div class="welcome">
            <a href="index.php">
                <img id="logo" src="images/logo.png" alt="logo"></a> 
                <h1> Welcome to my IT261 Portal Page</h1>
        </div>  
        <div class="header-inner">
            <nav>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="website/daily.php">Switch</a></li>
                    <li><a href="website/adder.php">Troubleshoot - Adder</a></li>
                    <li><a href="website/calculator-days-errors-sticky.php">Calculator</a></li>
                    <li><a href="">Email</a></li>
                    <li><a href="">Gallery</a></li>
                    <li><a href="">Database</a></li>
                </ul>
            </nav>
        </div> <!--end header-inner-->
    </header>
    <div id="wrapper">
    <div id="hero">

    </div> <!--end hero-->
<main>
    <h2>My IT261 Portal Page - Fall 2021</h2>
    <p>Hello, and welcome on my portal page for the class IT261 of Fall 2021. 
        My name is Helene (pronounced Ellen) Liobard, and I am a french student at Seattle Central.
        I love learning how to code and create websites, and am planning on getting an AAS in web development.</p>
    <p>When I am not studying, I love to hike and to travel. Traveling has been quite challenging in the last few months, 
        so I am focusing on (safely) exploring the gorgeous state I am currently living in; Washington State.</p>
    <p>While I am still learning and improving my skills, especially in HTML, CSS and JavaScript, I would love 
        to expend my network and connection, so please feel free to contact me.</p> 
    <h3>Homework 1 - MAMP and Error display</h3>
    <img id="mampscreenshot" src="images/mampscreencapture.png" alt="mampscreenshot">
    <img id="errorscreenshot" src="images/errorscreencapture.png" alt="errorscreenshot">
</main>

<aside>
    <img id="profilepic" src="images/profilepic.jpg" alt="profilepic">
    <h2>Weekly exercises list:</h2>
    <h3>Week 2:</h3>
    <ul>
        <li><a href="weeks/week2/var.php">var.php</a></li>
        <li><a href="weeks/week2/var2.php">var2.php</a></li>
        <li><a href="weeks/week2/currency-logic.php">currency-logic.php</a></li>
        <li><a href="weeks/week2/currency.php">currency.php</a></li>
        <li><a href="weeks/week2/heredoc.php">heredoc.php</a></li>
    </ul>
    <h3>Week 3:</h3>
    <ul>
        <li><a href="weeks/week3/if.php">if.php</a></li>
        <li><a href="weeks/week3/foreach.php">foreach.php</a></li>
        <li><a href="weeks/week3/forloop.php">forloop.php</a></li>
        <li><a href="weeks/week3/date.php">date.php</a></li>
        <li><a href="weeks/week3/switch.php">switch.php</a></li>
    </ul>
    <h3>Week 4:</h3>
    <ul>
        <li><a href="weeks/week4/form1.php">form1.php</a></li>
        <li><a href="weeks/week4/form2.php">form2.php</a></li>
        <li><a href="weeks/week4/form3.php">form3.php</a></li>
        <li><a href="weeks/week4/form-arithmetic.php">form-arithmetic.php</a></li>
        <li><a href="weeks/week4/celsius.php">celsius.php</a></li>
    </ul>
    <h3>Week 5:</h3>
    <ul>
        <li><a href="weeks/week5/currency1.php">currency1.php</a></li>
        <li><a href="weeks/week5/currency2.php">currency2.php</a></li>
        <li><a href="weeks/week5/null.php">null.php</a></li>
        <li><a href="weeks/week5/currency3.php">currency3.php</a></li>
        <li><a href="weeks/week5/currency4.php">currency4.php</a></li>
    </ul>
</aside>

<footer>
    <ul>
        <li>Copyright &copy; 2021 - <?=date("y")?></li>
        <li>All Rights Reserved</li>
        <li><a href="">Terms of use</a></li>
        <li><a href="https://www.ellencodes.com/" target="_blank">Web Design by Helene</a></li>
        <li><a href="https://validator.w3.org/nu/?doc=https://ellencodes.com/it261/" target="_blank">HTML Validation</a></li>
        <li><a href="https://jigsaw.w3.org/css-validator/validator?uri=https%3A%2F%2Fellencodes.com%2Fit261%2F&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=en" target="_blank">CSS Validation</a></li>
    </ul>


</footer>

    </div> <!--end wrapper-->


</body>
</html>