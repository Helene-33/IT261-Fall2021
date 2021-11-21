<?php
include('config.php');
include('includes/header.php'); ?>

<div id="wrapper">
<div id="herotable">
<h3 class="harrypotter">Harry Potter <br> Books and Movies</h3>
</div> <!--end hero-->

<main class="gallery">
    <h1><?php echo $headline; ?></h1>
    <h2>Our gallery topic is about Harry Potter; an introduction to the books and movies.</h2>
<table class="harrypotter">
<tr>
    <th>Books</th>
    <th>Books information</th>
    <th>Movies information</th>
    <th>Movies</th>
</tr>
<tr>
    <td><img src="images/book1.jpg" alt="Harry Potter and the Philosopher's Stone"></td>
    <td><p><b>Harry Potter and the Philosopher's Stone (1997)</b> is a fantasy novel written by British author 
    J. K. Rowling. <br>It follows Harry Potter, a young wizard who discovers his magical heritage 
    on his eleventh birthday, when he receives a letter of acceptance to Hogwarts School of Witchcraft and Wizardry. </p></td>
    <td><p>Warner Bros. bought the film rights to the book in 1999 for a reported £1 million. 
    Production began in the United Kingdom in 2000, with Chris Columbus being chosen to create the film from a 
    shortlist of directors that included Steven Spielberg and Rob Reiner.</p></td>
    <td><img src="images/movie1.jpg" alt="Harry Potter and the Philosopher's Stone - Poster of the movie"></td>
</tr>
<tr>
    <td><img src="images/book2.jpg" alt="Harry Potter and the Chamber of Secrets"></td>
    <td><p><b>Harry Potter and the Chamber of Secrets (1998)</b> follows Harry's second year at Hogwarts, during which 
    a series of messages on the walls of the school's corridors warn that the "Chamber of Secrets" has been 
    opened and that the "heir of Slytherin" would kill all pupils who do not come from all-magical families. Throughout the year, 
    Harry and his friends Ron and Hermione investigate the attacks.</p></td>
    <td><p>Just like the first movie of the saga, Harry Potter 2 was directed by Chris Columbus and distributed by Warner Bros. Pictures. It
        came out in 2002 with a budget of $100 million and brought back over $879.6 million.</p></td>
    <td><img src="images/movie2.jpg" alt="Harry Potter and the Chamber of Secrets - Poster of the movie"></td>
</tr>
<tr>
    <td><img src="images/book3.jpg" alt="Harry Potter and the Prisoner of Azkaban"></td>
    <td><p><b>Harry Potter and the Prisoner of Azkaban (1999)</b> is the third in the Harry Potter series. 
    The book follows Harry Potter, a young wizard, in his third year at Hogwarts School of Witchcraft and Wizardry. 
    Along with friends Ronald Weasley and Hermione Granger, Harry investigates Sirius Black, an escaped prisoner from Azkaban, 
    the wizard prison, believed to be one of Lord Voldemort's old allies.</p></td>
    <td><p>Alphonso Cuaron directed this fantasy film in 2004.</p></td>
    <td><img src="images/movie3.jpg" alt="Harry Potter and the Prisoner of Azkaban - Poster of the movie"></td>
</tr>
<tr>
    <td><img src="images/book4.jpg" alt="Harry Potter and the Goblet of Fire"></td>
    <td><p><b>Harry Potter and the Goblet of Fire (2000)</b>  is the fourth novel in the Harry Potter series. 
    It follows Harry Potter, a wizard in his fourth year at Hogwarts School of Witchcraft and Wizardry, and the
     mystery surrounding the entry of Harry's name into the Triwizard Tournament, in which he is forced to compete. </p></td>
    <td><p>Directed by Mike Newell and distributed by Warner Bros. Pictures in 2005.</p></td>
    <td><img src="images/movie4.jpg" alt="Harry Potter and the Goblet of Fire - Poster of the movie"></td>
</tr>
<tr>
    <td><img src="images/book5.jpg" alt="Harry Potter and the Order of the Phoenix"></td>
    <td><p>In <b>Harry Potter and the Order of the Phoenix (2003)</b>, Harry is due to start his fifth year at Hogwarts School of 
    Witchcraft and Wizardry. He is desperate to get back to school and find out why his friends Ron and Hermione have been so secretive 
    all summer. However, what Harry is about to discover in his new year at Hogwarts will turn his world upside down.</p></td>
    <td><p>In the theaters in 2007, this movie brought $942.2 millions to the box office.</p></td>
    <td><img src="images/movie5.jpg" alt="Harry Potter and the Order of the Phoenix - Poster of the movie"></td>
</tr>
<tr>
    <td><img src="images/book6.jpg" alt="Harry Potter and the Half-Blood Prince"></td>
    <td><p><b>Harry Potter and the Half-Blood Prince (2005)</b> is set during Harry Potter's sixth year at Hogwarts. The novel 
    explores the past of the boy wizard's nemesis, Lord Voldemort, and Harry's preparations for the final battle against Voldemort 
    alongside his headmaster and mentor Albus Dumbledore.</p></td>
    <td><p>The movie came out in 2009. <br>As Death Eaters wreak havoc in both Muggle and Wizard worlds, Hogwarts is no longer a safe haven for students. 
        Though Harry (Daniel Radcliffe) suspects there are new dangers lurking within the castle walls, Dumbledore is more 
        intent than ever on preparing the young wizard for the final battle with Voldemort.</p></td>
    <td><img src="images/movie6.jpg" alt="Harry Potter and the Half-Blood Prince - Poster of the movie"></td>
</tr>
<tr>
    <td><img src="images/book7.jpg" alt="Harry Potter and the Deathly Hallows "></td>
    <td><p><b>Harry Potter and the Deathly Hallows (2009)</b> is the last book of the saga. <br><b>Readers beware.</b> The brilliant, 
    breathtaking conclusion to J.K. Rowling's spellbinding series is not for the faint of heart--such revelations, battles, and betrayals 
    await in Harry Potter and the Deathly Hallows that no fan will make it to the end unscathed.</p></td>
    <td><p>Without the guidance and protection of their professors, Harry (Daniel Radcliffe), Ron (Rupert Grint) and Hermione (Emma Watson) 
        begin a mission to destroy the Horcruxes, the sources of Voldemort's immortality.<br> The book was separated in two movies that came out in
    2010 and 2011.</p></td>
    <td><img src="images/movie7.jpg" alt="Harry Potter and the Deathly Hallows  - Poster of the movie"></td>
</tr>
</table>
</main>

<?php
include('includes/footer.php'); ?>