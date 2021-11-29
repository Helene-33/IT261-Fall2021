<form class="contactform" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
<fieldset class = "contactfield">
<label for="name">What is your name?</label>
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

<label for="animals">Which animals would you like to support or have more information about?</label>
<ul>
<li>
<input type="checkbox" name="animals[]" value="elephant"
<?php if(isset($_POST['animals']) && in_array('elephant', $animals)) echo 'checked="checked" ' ;?>>African Elephant
</li>
<li>
<input type="checkbox" name="animals[]" value="rhino"
<?php if(isset($_POST['animals']) && in_array('rhino', $animals)) echo 'checked="checked" ' ;?>>African Rhino
</li>
<li>
<input type="checkbox" name="animals[]" value="leopard"
<?php if(isset($_POST['animals']) && in_array('leopard', $animals)) echo 'checked="checked" ' ;?>>Amur Leopard
</li>
<li>
<input type="checkbox" name="animals[]" value="articfox"
<?php if(isset($_POST['animals']) && in_array('articfox', $animals)) echo 'checked="checked" ' ;?>>Artic Fox
</li>
<li>
<input type="checkbox" name="animals[]" value="orang"
<?php if(isset($_POST['animals']) && in_array('orang', $animals)) echo 'checked="checked" ' ;?>>Orangutan
</li>
<li>
<input type="checkbox" name="animals[]" value="gorilla"
<?php if(isset($_POST['animals']) && in_array('gorilla', $animals)) echo 'checked="checked" ' ;?>>Gorilla
</li>
<li>
<input type="checkbox" name="animals[]" value="turtle"
<?php if(isset($_POST['animals']) && in_array('turtle', $animals)) echo 'checked="checked" ' ;?>>Green Turtle
</li>
<li>
<input type="checkbox" name="animals[]" value="hedgehog"
<?php if(isset($_POST['animals']) && in_array('hedggehog', $animals)) echo 'checked="checked" ' ;?>>Hedgehog
</li>
<li>
<input type="checkbox" name="animals[]" value="whale"
<?php if(isset($_POST['animals']) && in_array('whale', $animals)) echo 'checked="checked" ' ;?>>Humpback Whale
</li>
<li>
<input type="checkbox" name="animals[]" value="koala"
<?php if(isset($_POST['animals']) && in_array('koala', $animals)) echo 'checked="checked" ' ;?>>Koala
</li>
<li>
<input type="checkbox" name="animals[]" value="otter"
<?php if(isset($_POST['animals']) && in_array('otter', $animals)) echo 'checked="checked" ' ;?>>Sea Otter
</li>
</ul>
<span class="contacterror"><?php echo $animals_Err;?></span>

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
<?php if(isset($_POST['heard']) && $_POST['heard'] == 'google') echo 'selected = "selected"' ;?>>Google Ads</option>
<option value="fb"
<?php if(isset($_POST['heard']) && $_POST['heard'] == 'fb') echo 'selected = "selected"' ;?>>Facebook Ads</option>
<option value="yt"
<?php if(isset($_POST['heard']) && $_POST['heard'] == 'yt') echo 'selected = "selected"' ;?>>Youtube Ads</option>
<option value="fbgr"
<?php if(isset($_POST['heard']) && $_POST['heard'] == 'fbgr') echo 'selected = "selected"' ;?>>Facebook groups/posts</option>
<option value="twt"
<?php if(isset($_POST['heard']) && $_POST['heard'] == 'twt') echo 'selected = "selected"' ;?>>Twitter post</option>
<option value="ig"
<?php if(isset($_POST['heard']) && $_POST['heard'] == 'ig') echo 'selected = "selected"' ;?>>Instagram posts/stories</option>
<option value="othersm"
<?php if(isset($_POST['heard']) && $_POST['heard'] == 'othersm') echo 'selected = "selected"' ;?>>Other social media</option>
<option value="tv"
<?php if(isset($_POST['heard']) && $_POST['heard'] == 'tv') echo 'selected = "selected"' ;?>>TV</option>
<option value="radio"
<?php if(isset($_POST['heard']) && $_POST['heard'] == 'radio') echo 'selected = "selected"' ;?>>Radio</option>
<option value="np"
<?php if(isset($_POST['heard']) && $_POST['heard'] == 'np') echo 'selected = "selected"' ;?>>Newspaper</option>
<option value="mouth"
<?php if(isset($_POST['heard']) && $_POST['heard'] == 'mouth') echo 'selected = "selected"' ;?>>Word of mouth</option>
<option value="other"
<?php if(isset($_POST['heard']) && $_POST['heard'] == 'other') echo 'selected = "selected"' ;?>>Other</option>
</select>
<span class="contacterror"><?php echo $heard_Err;?></span>

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