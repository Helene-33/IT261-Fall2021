<?php
include('config.php');
include('includes/header.php'); ?>

    <div id="wrapper">
    <div id="herorandom">
<?php
echo '<img style="width:60%; display:block; margin:auto;" src="images/'.$random_pics.'" alt="'.$photos[$i].'">';
?>
<h2>
<pre>
<br>
function random_pics($photos) {

}
</pre>
</h2>
    </div> <!--end hero-->
<main>
    <h1><?php echo $headline; ?></h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore 
        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
        aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
        dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
        deserunt mollit anim id est laborum.</p>

</main>

<aside>
<h3>Here is my aside</h3>
</aside>

<?php
include('includes/footer.php'); ?>