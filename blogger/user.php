<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <?php
    include 'function.php';
    include ("header.php");
    ?>
    <body>
        <div class="full">
            <?php
            include ("bar.php");
            ?> 

            <div class="side-menu user">

                <?php
                include ("side.php");
                ?> 

            </div>
            <div class="col-md-9 main">
                <div class="container">
                    <div class="card">
                        <?php
                        echo "<img src='" . $_SESSION['avatar'] . "'/>";
                        echo "<h4 class='card-title'>" . $_SESSION['username'] . "</h4>"
                        ?>

                        <p class="card-text"><?php echo "Number of Post: ".countPost($_SESSION['user_id'])['numOfPost']  ?></p>

                    </div>
                </div>
                <?php
                include ("footer.php");
                ?>
            </div>
        </div>	       
    </body>
</html>
