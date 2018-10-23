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
            <div class="side-menu create-post">
                <?php
                include 'side.php';
                ?>
            </div>
            <div class="col-md-9 main">
                <!--grids-->
                <div class="grid-section">
                    <h3 class="tittle">Create Post<i class="glyphicon glyphicon-stop"></i></h3>
                    <form id="form" name="form" action="new_post.php" method="post"  enctype="multipart/form-data">

                        <div class="sign-up">
                            <h3 class="tittle reg">Post Details <i class="glyphicon glyphicon-user"></i></h3>
                            <div class="sign-u">
                                <div class="sign-up1">
                                    <h4 class="a">Title :</h4>
                                </div>
                                <div class="sign-up2">
                                    <input type="text" class="col-md-10" name="title" id="title">
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>

                        <div class="sign-u">
                            <div class="sign-up1">
                                <h4 class="c">Post Content :</h4>
                            </div>
                            <div class="sign-up2">
                                <textarea class="col-md-10" name="content" rows="10"></textarea>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="sign-u">
                            <div class="sign-up1">
                                <h4 class="b">Image :</h4>
                            </div>
                            <div class="sign-up2">
                                <input type="file" name="image" id="image">
                            </div>
                            <div class="clearfix"> </div>

                            <div class="sign-u">
                                <div class="sign-up1">
                                    <h4 class="d">Tag :</h4>
                                </div>
                                <div class="sign-up2">
                                    <input type="text" class="col-md-10" name="tag" id="tag">
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="sign-u">
                                <div class="sign-up1">
                                    <h4 class="d">Disable Comment :</h4>
                                </div>
                                <div class="sign-up2">
                                    <input type="hidden" name="disable_comment" id="disable_comment_false" value="0">
                                    <input type="checkbox" name="disable_comment" id="disable_comment_true" value="1">
                                </div>
                                <div class="clearfix"> </div>
                            </div>

                            <input type="hidden" name="user_id" id="user_id" value='<?php echo $_SESSION['user_id']; ?>'>
                            <h4 id="error"></h4>
                            <h4 id="error2"></h4>
                            <input type="submit" value="Post" id="post">

                        </div>
                    </form>
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