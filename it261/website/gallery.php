<?php
include('config.php');
include('includes/header.php');?>


<div id="wrapper">
<div id="herotable">
<h3 class="harrypotter">Harry Potter <br> Books and Movies</h3>
</div> <!--end herotable-->

<main class="gallery">
    <h1><?php echo $headline; ?></h1>
    <h2>Our gallery topic is about Harry Potter; an introduction to the books and movies.</h2>
<table class="harrypotter">
<tr>
    <th>Books</th>
    <th>Books titles</th>
    <th>Books information</th>
    <th>Movies Posters</th>
</tr>
<?php foreach($potter as $name => $image): ?>
<tr>
    <td><img src="images/books/<?php echo substr($image, 0, 4);?>.jpg" alt="<?php echo str_replace('_', ' ', $name) ;?>"></td> 
    <td><?php echo str_replace('_', ' ', $name) ;?></td>
    <td><?php echo substr($image, 6) ;?></td>
    <td><img src="images/movies/<?php echo substr($image, 0, 5);?>.jpg" alt="<?php echo str_replace('_', ' ', $name) ;?>"></td>
</tr>
<?php endforeach; ?>
</table>
</main>


<?php include('includes/footer.php'); ?>