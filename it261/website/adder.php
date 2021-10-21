<!doctype html>
<head>
<title>My Adder Assignment</title>
<style>
body {
    background:beige;
    font-family: Arial, sans-serif;
}

h1 {
    color:teal;
    text-align: center;
}

fieldset {
    border:1px solid green;
    padding:10px;
    width:400px;
    margin:0px auto;
}

h2 {
    text-align:center;
}

p {
    color:red;
    text-align:center;
}
</style>
</head>
<body>
<h1>Adder.php</h1> 
<form action="" method="post">
<fieldset>
<label for="num1">Enter the first number:</label>
<input type="number" name="num1"><br>
<label for="num2">Enter the second number:</label>
<input type="number" name="num2"><br>
<input type="submit" value="Add Em!!"> 
</fieldset>
</form>

<?php //adder troubleshooting homework

if (isset($_POST['num1'])){

$num1 = $_POST['num1']; $num1_int = intval($num1);
$num2 = $_POST['num2']; $num2_int = intval($num2);
$myTotal = $num1_int + $num2_int;

echo '<h2>You added '.$num1_int.' and '.$num2_int.'</h2>';
echo '<p> and the answer is <br>
'.$myTotal .'!</p>';
echo '<p><a href="">Reset page</a></p>';

}
?>

</body>
</html>

<!-- I MOVED THE ENTIRE PHP IN THE BODY AFTER THE FORM!!!-->

<!--line 1: added !doctype before html-->
<!--lines 5 to 29: edited the CSS-->
<!--line 34: the opening tag for <form> was incorrect and the method was missing-->
<!--line 35: <fieldset> was missing + the closing </fieldset> was added on line 41-->
<!--line 36: the opening tag <label> was missing-->
<!--lines 36 and 38: for="num1"> and for="num2"> were missing -->
<!--line 37: Corrected Num1 to num1-->
<!--line 38: the closing tag label was at the place of the opening one, and the closing one was missing-->
<!--lines 37 and 39: the type was "text" but we are entering numbers so I changed it to "number"-->
<!--line 40: the double quotes after Add Em!! were missing-->
<!--line 50: a - sign was in front of the = sign and I changed $Num2 to $num2_int-->
<!--line 52: lots of mix up between the double quotes and the single quotes, especially around the $num1 and $num2--> 
<!--line 52: the closing tag </h2> was missing-->
<!--line 54: $myTotal was wrongly nested (there was a ' and a . missing)-->
<!--line 54: useless double quote before </p> and missing single quote after </p>-->
<!--line 54: I removed the style to put it within the <head>-->
<!--line 55: the closing tag </p> was missing-->
<!--line 55: the ; at the end was missing-->
<!--line 58: the closing PHP tag ?> was missing / at the wrong place-->
<!--line 61: the signs after the closing tag </html> were not needed / at the wrong place-->

<!--TO AVOID THE NON-NUMERIC ERROR :
    I added $num1_int = intval($num1); on line 48 and $num1_int = intval($num2); on line 49
    On line 50 I changed $num1 into $num1_int and $num2 into $num2_int
    On line 52 I changed $num1 into $num1_int and $num2 into $num2_int-->