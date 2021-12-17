<form class="contactform" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
<fieldset class = "contactfield">
<label for="name">Name:</label>
<input type="text" name="name" value="
<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']);?>">
<span class="contacterror"><?php echo $name_Err;?></span>

<label for="email">Email:</label>
<input type="email" name="email" value="
<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']);?>">
<span class="contacterror"><?php echo $email_Err;?></span>

<label for="phone">Phone number:</label>
<input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="
<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']);?>">
<span class="contacterror"><?php echo $phone_Err;?></span>

<label for="contactoption">How would you like to be contacted?</label>
<select name="contactoption">
<option value="" NULL
<?php if(isset($_POST['contactoption']) && $_POST['contactoption'] == NULL) echo 'selected = "unselected"' ;?>>Please select one</option>
<option value="email"
<?php if(isset($_POST['contactoption']) && $_POST['contactoption'] == 'email') echo 'selected = "selected"' ;?>>Send me an email please!</option>
<option value="phone"
<?php if(isset($_POST['contactoption']) && $_POST['contactoption'] == 'phone') echo 'selected = "selected"' ;?>>Give me a call!</option>
</select>
<span class="contacterror"><?php echo $contactoption_Err;?></span>

<label for="heard">How did you hear about us?</label>
<select name="heard">
<option value="" NULL
<?php if(isset($_POST['heard']) && $_POST['heard'] == NULL) echo 'selected = "unselected"' ;?>>Please select one</option>
<option value="search"
<?php if(isset($_POST['heard']) && $_POST['heard'] == 'search') echo 'selected = "selected"' ;?>>Search Engine</option>
<option value="google"
<?php if(isset($_POST['heard']) && $_POST['heard'] == 'fbgr') echo 'selected = "selected"' ;?>>Facebook groups/posts</option>
<option value="twt"
<?php if(isset($_POST['heard']) && $_POST['heard'] == 'twt') echo 'selected = "selected"' ;?>>Twitter post</option>
<option value="ig"
<?php if(isset($_POST['heard']) && $_POST['heard'] == 'ig') echo 'selected = "selected"' ;?>>Instagram posts/stories</option>
<option value="othersm"
<?php if(isset($_POST['heard']) && $_POST['heard'] == 'othersm') echo 'selected = "selected"' ;?>>Other social media</option>
<option value="mouth"
<?php if(isset($_POST['heard']) && $_POST['heard'] == 'mouth') echo 'selected = "selected"' ;?>>Word of mouth</option>
<option value="other"
<?php if(isset($_POST['heard']) && $_POST['heard'] == 'other') echo 'selected = "selected"' ;?>>Other</option>
</select>
<span class="contacterror"><?php echo $heard_Err;?></span>


<label for="about">Why are you filling up this form?</label>
<ul>
<li>
<input type="checkbox" name="about[]" value="comment"
<?php if(isset($_POST['about']) && in_array('comment', $about)) echo 'checked="checked" ' ;?>>I have some comments/suggestions.
</li>
<li>
<input type="checkbox" name="about[]" value="question"
<?php if(isset($_POST['about']) && in_array('question', $about)) echo 'checked="checked" ' ;?>>I have a question.
</li>
<li>
<input type="checkbox" name="about[]" value="collab"
<?php if(isset($_POST['about']) && in_array('collab', $about)) echo 'checked="checked" ' ;?>>I would like to work with you.
</li>
</ul>
<span class="contacterror"><?php echo $about_Err;?></span>

<label for="privacy"></label>
<ul>
<li><input type="radio" name="privacy" value="agree"
<?php if(isset($_POST['privacy']) && $_POST['privacy'] == 'agree') echo 'checked="checked" ' ;?>>I agree!</li>
</ul>
<span class="contacterror"><?php echo $privacy_Err;?></span>

<input type="submit" value="Send it">
<p class="reset"><a href="">Reset</a></p>

</fieldset>
</form>