<?php 

// logically, if we have more that 0 errors, we need to display a message
// if end-user did not fill in the email input field, the messgae will display - Email is required
// array_push($errors, 'Email is required')
// don't forget, we CANNOT echo an array - foreach loop

if (count($errors) > 0) :?>
<div class = "error">
<?php foreach($errors as $error) :?>
<p><?php echo $error ;?> </p>
<?php endforeach; ?>
</div>
<?php endif ;?>
