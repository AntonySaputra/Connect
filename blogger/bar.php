<div class="h-top" >
    <div class="top-header">
        <ul class="cl-effect-16 top-nag">
            <?php
            if (isset($_SESSION['log_on'])) {
                if ($_SESSION['log_on']) {
                    echo "<li><a href='#' id='logout' data-hover='Logout'>Logout</a></li>";
                } else {
                    echo "<li><a href='registration.php' data-hover='Registration'>Registration</a></li>";
                    echo "<li><a href='login.php' data-hover='Login'>Login</a></li>";
                }
            } else {
                echo "<li><a href='registration.php' data-hover='Registration'>Registration</a></li>";
                echo "<li><a href='login.php' data-hover='Login'>Login</a></li>";
            }
            ?>

            <li><a href="about.php" data-hover="About">About</a></li>
            
            <li><a href="contact.php" data-hover="CONTACT">Contact</a></li>
        </ul>
        <div class="search-box">
            
        </div>
        <div class="clearfix"></div>
    </div>
</div>