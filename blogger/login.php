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
        <script src="custom_js/login.js" type="text/javascript"></script>
    </head>
    <body>
        <?php
        ob_start();

        //session_start();
        ?>
        <!-- header-section-starts -->
        <?php
        include ('bar.php');
        include ("header.php");
        //$_SESSION['log_on'] = false;
        ?>
        <div class="full">
            <div class="side-menu login">
                <?php
                include 'side.php';
                ?>
            </div>
            <div class="col-md-9 main">
                <!-- login-page -->
                <div class="login">
                    <div class="login-grids">
                        <div class="col-md-6 log">
                            <h3 class="tittle">Login <i class="glyphicon glyphicon-lock"></i></h3>
                            <p>Welcome, please enter the following to continue.</p>


                            <form>
                                <h5>User Name:</h5>	
                                <input type="text" name="username" id="username" value="">
                                <h5>Password:</h5>
                                <input type="password" name="password" id="password" value="">	
                                <h4 id="error"></h4>
                                <input type="button" id="login" value="Login">
                            </form>

                        </div>
                        <div class="col-md-6 login-right">
                            <h3 class="tittle">New Registration <i class="glyphicon glyphicon-file"></i></h3>
                            <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                            <a href="registration.php" class="hvr-bounce-to-bottom button">Create An Account</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!-- //login-page -->
                <div class="clearfix"> </div>
                <!--/footer-->
                <?php
                include ("footer.php");
                ?>

            </div>
            <div class="clearfix"> </div>
        </div>	
        <!--//footer-->

    </body>
</html>