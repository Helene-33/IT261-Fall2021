<footer>
    <ul>
        <li>Copyright &copy; 
            <?php 
            $date_current = date('Y');
            $date_created = 2021;
            if($date_current == $date_created) {
                echo $date_current;
            } else {
                echo ' '.$date_created.' - '.$date_current.' ';
            }
            //if I want to simply see the date without authomatic changes: echo date('Y'); ?>
        </li>
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