<?php
    session_start();
    if(isset($_SESSION['user_id'])){
        require "connections/dbh.inc.php";
        $id = $_SESSION['user_id'];
        $user = "SELECT * FROM users WHERE user_id = '".$id."'";
        $result = mysqli_query($con,$user);

        if(!$result){
            echo "error in implementing the command";
        }else{
            $row = mysqli_fetch_assoc($result);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
        <link rel="stylesheet" href="../css/style.css">
        <title> ♦ Afrolago Rwanda</title>
    </head>
    <body>
        <section class="featured" id="fearured">
            <h1 class="heading">New <span>Product</span></h1>
            <div class="row">
                <div class="image-container">
                    <div class="big-image">
                        <img src="../img/product1/1.jpg" alt="" class="big-image-1">
                    </div>
                </div>
                <div class="content">
                    <h3>new nike airmac shoes</h3>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Fugit officiis omnis quo laboriosam velit culpa ex illo, error enim nostrum?
                    </p>
                    <div class="price">$90 <span>$120</span></div>
                </div>
            </div>
        </section>
        <!--end featured-->
        <section class="cridet" id="cridet">
            <div class="box">
                <h3>&copy; All Right Reserved. Powered by <span>Lunar Tights Group</span></h3>
            </div>
        </section>
    </body>
</html>

<script src="js/script_Old1.js"></script>

