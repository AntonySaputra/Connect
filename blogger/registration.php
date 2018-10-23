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
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
        <!--Custom-Theme-files-->
        <link href="css/style.css" rel='stylesheet' type='text/css' />	
        <script src="js/jquery.min.js"></script>
        <!--/script-->
        <script type="text/javascript" src="js/move-top.js"></script>
        <script type="text/javascript" src="js/easing.js"></script>
        <script type="text/javascript">
//            jQuery(document).ready(function ($) {
//                $(".scroll").click(function (event) {
//                    event.preventDefault();
//                    $('html,body').animate({scrollTop: $(this.hash).offset().top}, 900);
//                });
//            });
        </script>
        <script src="custom_js/registration.js" type="text/javascript"></script>

    </head>
    <body>
        <!-- header-section-starts -->
        <?php
        ob_start();
        include ("header.php");
        ?>
        <div class="full">
            <?php
            include ('bar.php');
            ?>
            <div class="side-menu registration">
                <?php
                include 'side.php';
                ?>
            </div>
            <div class="col-md-9 main">
                <!-- register -->
                <div class="sign-up-form">
                    <form id="form" name="form" action="register.php" method="post"  enctype="multipart/form-data">
                        <h3 class="tittle">Registration <i class="glyphicon glyphicon-file"></i></h3>
                        <div class="sign-up">
                            <h3 class="tittle reg">Personal Information <i class="glyphicon glyphicon-user"></i></h3>
                            <div class="sign-u">
                                <div class="sign-up1">
                                    <h4 class="a">Username :</h4>
                                </div>
                                <div class="sign-up2">
                                    <input type="text" class="text" name="username" id="username">
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>

                        <div class="sign-u">
                            <div class="sign-up1">
                                <h4 class="c">Email Address* :</h4>
                            </div>
                            <div class="sign-up2">
                                <input type="text" class="text" name="email_address" id="email_address">
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="sign-u">
                            <div class="sign-up1">
                                <h4 class="b">Avatar :</h4>
                            </div>
                            <div class="sign-up2">
                                <input type="file" name="avatar" id="avatar">
                            </div>
                            <div class="clearfix"> </div>
                            <h3 class="tittle reg">Login Information <i class="glyphicon glyphicon-off"></i></h3>
                            <div class="sign-u">
                                <div class="sign-up1">
                                    <h4 class="d">Password* :</h4>
                                </div>
                                <div class="sign-up2">
                                    <input type="password" class="Password" name="password" id="password">
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="sign-u">
                                <div class="sign-up1">
                                    <h4>Confirm Password* :</h4>
                                </div>
                                <div class="sign-up2">
                                    <input type="password" class="Password" name="confirm_password" id="confirm_password">
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <h4 id="error"></h4>
                            <h4 id="error2"></h4>
                            <input type="button" value="Submit" id="register">

                        </div>
                    </form>
                </div>
                <!-- //register -->
                <!-- //login-page -->
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