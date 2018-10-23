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
        <script src="custom_js/like.js" type="text/javascript"></script>
        <script src="custom_js/comment.js" type="text/javascript"></script>


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
            <div class="side-menu single">
                <?php
                include 'side.php';
                ?>
            </div>
            <div class="col-md-9 main">
                <!--banner-section-->
                <div class="banner-section">
                    <h3 class="tittle">Post <i class="glyphicon glyphicon-file"></i></h3>
                    <div class="single">
                        <?php
                        $post_id = filter_input(INPUT_GET, "post_id");
                        include 'function.php';
                        $post = getPost($post_id);
                        ?>
                        <input type="hidden" id='post_id' value='<?php echo $post['Post_id'] ?>'>
                        <input type="hidden" id='user_id' value='<?php echo $_SESSION['user_id'] ?>'>
                        <img src="<?php echo $post['Image'] ?>" class="img-responsive" alt="" />
                        <div class="b-bottom"> 
                            <h5 class="top"><a href="#"><?php echo $post['Title'] ?></a></h5>
                            <p class="sub"><?php echo $post['Text'] ?></p>
                            <p><?php echo $post['Date'] ?> 
                                <span class="glyphicon glyphicon-thumbs-up" id='like'></span>
                                <span id="like_count"><?php echo " " . $post['upvote'] ?></span>
                                <span id='error'></span>
                            </p>
                            <p>Tags: <?php echo $post['Tags']; ?></p>
                        </div>
                    </div>

                    <div class="response" <?php if ($post['disable_comment']) {
                            echo "hidden";
                        } ?>>
                        <h4>Responses</h4>
                        <?php
                        $comments = selectAllComment($post_id);
                        foreach ($comments as $comment):
                            $user = getUser($comment['User_id']);
                            ?>
                            <div class="media response-info">
                                <div class="media-left response-text-left">
                                    <a href="#">
                                        <img class="media-object" src="<?php echo $user['Avatar_image'] ?>" alt=""/>
                                    </a>
                                    <h5><?php echo $user['User_name']; ?></h5>
                                </div>
                                <div class="media-body response-text-right">
                                    <p><?php echo $comment['Text']; ?></p>
                                    <ul>
                                        <li><?php echo $comment['Date']; ?></li>

                                    </ul>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
<?php endforeach; ?>

                    </div>	
                    <div class="coment-form" <?php if ($post['disable_comment']) {
    echo "hidden";
} ?>>
                        <h4>Leave your comment</h4>
                        <form id="comment_form">

                            <textarea onfocus="this.value = '';" onblur="if (this.value == '') {
                                        this.value = 'Your Comment...';
                                    }" required="" id="comment">Your Comment...</textarea>

                            <div id="comment_error"></div>  
                            <?php
                            if (isset($_SESSION['log_on'])) {
                                if ($_SESSION['log_on']) {
                                    echo '<input type="button" id="comment_button" value="Submit Comment" >';
                                } else {
                                    echo "<a href='login.php'>Login to leave a comment</a>";
                                }
                            } else {
                                echo "<a href='login.php'>Login to leave a comment</a>";
                            }
                            ?>

                        </form>
                    </div>	
                    <div class="clearfix"></div>
                </div>
                <!--//banner-->
                <!--//banner-section-->
                <div class="banner-right-text">
                    <h3 class="tittle">News  <i class="glyphicon glyphicon-facetime-video"></i></h3>
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
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>	
        <!--//footer-->

    </body>
</html>