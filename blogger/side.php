
    <div class="logo">
        <a href="index.php"><h1>Connect</h1></a>
    </div>
    <div class="top-menu">
        <?php
        if (isset($_SESSION['log_on'])) {
            if ($_SESSION['log_on']) {
                echo "<a href='user.php'><img src='" . $_SESSION['avatar'] . "'/></a>";
                echo "<h4>" . $_SESSION['username'] . "</h4>";
            }
        }
        ?>

        <span class="menu"> </span>

        <ul class="cl-effect-16">
            <li><a href="index.php" data-hover="HOME">Home</a></li> 
            <li><a href="about.php" data-hover="About">About</a></li>
            <li><a href="create_post.php" data-hover="Create Post">Create Post</a></li>
            <li><a href="search.php" data-hover="Search a Post">Search a Post</a></li>
            <li><a href="contact.php" data-hover="CONTACT">Contact</a></li>
        </ul>
        <!-- script-for-nav -->
        <script>
            $("span.menu").click(function () {
                $(".top-menu ul").slideToggle(300, function () {
                    // Animation complete.
                });
            });
        </script>
        <!-- script-for-nav --> 	
        
    </div>

