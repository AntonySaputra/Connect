<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
    <head>
        <title>Connect</title>        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Blogger Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android  Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
        <link href='//fonts.googleapis.com/css?family=Open+Sans:700,700italic,800,300,300italic,400italic,400,600,600italic' rel='stylesheet' type='text/css'>
        <!--Custom-Theme-files-->
        <link href="css/style.css" rel='stylesheet' type='text/css' />	
        <script src="js/jquery.min.js"></script>
        <!--/script-->
        <script type="text/javascript" src="js/move-top.js"></script>
        <script type="text/javascript" src="js/easing.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $(".scroll").click(function (event) {
                    event.preventDefault();
                    $('html,body').animate({scrollTop: $(this.hash).offset().top}, 900);
                });
            });
        </script>

    </head>
    <body>
        <!-- header-section-starts -->
        <?php
        include ("header.php");
        ?>
        <div class="full">
            <?php
            include ('bar.php');
            ?>
            <div class="side-menu about">
                <?php
                include 'side.php';
                ?>
            </div>
            <div class="col-md-9 main">
                <!--banner-section-->
                <div class="banner-section">

                    <div class="top-news">
                        <div class="about-content">
                            <!-- about -->
                            <h3 class="tittle">About <i class="glyphicon glyphicon-user"></i></h3>
                            <img src="images/ab.jpg" alt=" " />
                            <p>
                                <label>Connect is made by Antony Saputra  and Bryan Tee. Connect is a set up for our year 2 web project in Dundalk Institute of Technology, Dundalk, Ireland.
                                </label></p>
                            <div class="clearfix"></div>

                        </div>

                    </div>
                    <!--//top-news-->
                </div>

                <div class="clearfix"> </div>
                <!--/footer-->
                <?php
                include ("footer.php");
                ?>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>	
        <!--//footer-->

    </body>
</html>