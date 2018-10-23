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
            <div class="side-menu contact">
                <?php
                include 'side.php';
                ?>
            </div>
            <!-- contact -->
            <div class="col-md-9 main">
                <div class="contact">
                    <h3 class="tittle">Find Us <i class="glyphicon glyphicon-map-marker"></i></h3>
                    <div class="contact-left">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2346.0650563638123!2d-6.398848366693584!3d53.983868630117605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4860cc1416459c83%3A0x6cc743bdadf216c2!2sDundalk+Institute+of+Technology!5e0!3m2!1sen!2sie!4v1524597302984" allowfullscreen></iframe>
                    </div>
                    <div class="contact-right">
                        <p class="phn">+353 83 882 7149</p>
                        <p class="phn-bottom">Antony Saputra & Bryan Tee
                            <span>Dublin Rd, Dundalk</span></p>
                        <p class="lom">Contact Antony and Bryan for more info or feed back</p>
                    </div>
                    <div class="clearfix"> </div>


                    <!-- //contact -->
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