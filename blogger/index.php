<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<?php
?>

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
        include ('bar.php');
        ?>
        <div class="full">
            <div class="side-menu">
                <?php
                include 'side.php';
                ?>
            </div>
            <div class="col-md-9 main">
                <!--banner-section-->
                <div class="banner-section">
                    <h3 class="tittle">General <i class="glyphicon glyphicon-picture"></i></h3>
                    <div class="banner">
                        <div  class="callbacks_container">
                            <?php
                            include 'function.php';
                            if (isset($_SESSION['log_on'])) {
                                if ($_SESSION['log_on']) {
                                    $recentPosts = selectLimitedPost("Date");
                                } else {
                                    $recentPosts = selectAllPost(4);
                                }
                            } else {
                                $recentPosts = selectAllPost(4);
                            }
                            ?>
                            <ul class="rslides" id="slider4">
                                <?php foreach ($recentPosts as $recentPost): ?>
                                    <li>
                                        <img src="<?php echo $recentPost['Image']; ?>" class="img-responsive" alt="" />
                                        <h5 class="top"><a href="single.php?post_id=<?php echo $recentPost['Post_id'] ?>"><?php echo $recentPost['Title']; ?></a></h5>
                                        <p><?php echo $recentPost['Date'] ?> <span class="glyphicon glyphicon-thumbs-up"></span><?php echo $recentPost['upvote'] ?></p>
                                    </li>
                                <?php endforeach ?>

                            </ul>
                        </div>
                        <!--banner-->
                        <script src="js/responsiveslides.min.js"></script>
                        <script>
            // You can also use "$(window).load(function() {"
            $(function () {
                // Slideshow 4
                $("#slider4").responsiveSlides({
                    auto: true,
                    pager: true,
                    nav: true,
                    speed: 500,
                    namespace: "callbacks",
                    before: function () {
                        $('.events').append("<li>before event fired.</li>");
                    },
                    after: function () {
                        $('.events').append("<li>after event fired.</li>");
                    }
                });

            });
                        </script>
                        <div class="clearfix"> </div>
                        <div class="clearfix"> </div>
                        <div class="b-bottom"> 


                        </div>
                    </div>
                    <!--//banner-->
                    <!--/top-news-->
                    <div class="top-news">
                        <div class="top-inner">
                            <?php
                            if (isset($_SESSION['log_on'])) {
                                if ($_SESSION['log_on']) {
                                    $popularPosts = selectLimitedPost("upvote");
                                } else {
                                    $popularPosts = selectAllPost(4);
                                }
                            }else
                            {
                                $popularPosts = selectAllPost(4);
                            }
                            foreach ($popularPosts as $popularPost):
                                ?>
                                <div class="col-md-6 top-text">
                                    <a href="single.php?post_id=<?php echo $popularPost['Post_id'] ?>"><img src="<?php echo $popularPost['Image'] ?>" class="img-responsive" alt=""></a>
                                    <h5 class="top"><a href="single.php?post_id=<?php echo $popularPost['Post_id'] ?>"><?php echo $popularPost['Title'] ?></a></h5>

                                    <p><?php echo $popularPost['Date'] ?> <span class="glyphicon glyphicon-thumbs-up"></span><?php echo $popularPost['upvote'] ?></p>
                                </div>

<?php endforeach; ?>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <!--//top-news-->
                </div>
                <!--//banner-section-->
                <div class="banner-right-text">
                    <h3 class="tittle">Recent Posts  <i class="glyphicon glyphicon-facetime-video"></i></h3>
                    <!--/general-news-->
                    <div class="general-news">
                        <div class="general-inner">


                            <div class="edit-pics">
<?php
$allPost = selectAllPost(8);

foreach ($allPost as $post):
    ?>
                                    <div class="editor-pics">
                                        <div class="col-md-3 item-pic">
                                            <img src="<?php echo $post['Image'] ?>" class="img-responsive" alt="">

                                        </div>
                                        <div class="col-md-9 item-details">
                                            <h5 class="inner two"><a href="single.php?post_id=<?php echo $post['Post_id'] ?>"><?php echo $post['Title'] ?></a></h5>
                                            <div class="td-post-date two">
                                                <i class="glyphicon glyphicon-time"></i><?php echo $post['Date'] ?>
                                                <span class="glyphicon glyphicon-thumbs-up"></span><?php echo $post['upvote'] ?>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
<?php endforeach; ?>

                            </div>

                        </div>
                    </div>	
                    <!--//general-news-->
                    <!--/news-->
                    <!--/news-->
                </div>
                <div class="clearfix"> </div>
                <!--/footer-->

<?php
include ("footer.php");
?>
            </div>
        </div>	        
    </body>
</html>