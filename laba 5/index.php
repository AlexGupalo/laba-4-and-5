<?php

require("db.php");
$plants = $db->query("SELECT * FROM plants")->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/media_style.css">
    <link rel="stylesheet" href="fontawasome/css/light.css">
    <link rel="stylesheet" href="fontawasome/css/fontawesome.css">
    <title>Laba 4 ИСУ 334130</title>
</head>
<body>
    <header>
        <div id="header_left">
            <img src="images/header.png" alt="mint photo">
        </div>
        <div id="header_right">
            <div id="header_right_top">
                <div id="help_for_nav"></div>
                <nav>
                    <a href="" class="nav_icon"><i class="fa-light fa-magnifying-glass"></i></a>
                    <a href="" class="nav_icon"><i class="fa-light fa-cart-shopping"></i></a>
                    <a id="log_in" href="">Log In</a>
                    <a href="" id="sign_up">Sign Up</a>
                </nav>
            </div>
            <div id="header_right_bottom">
                <h1>Plants <br> Web Market</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi labore ut tenetur soluta ea, aliquid hic blanditiis aspernatur, doloribus commodi, nihil dicta quasi itaque culpa. Quam deserunt odit facilis nam.</p>
            </div>
        </div>
    </header>

    <main>
        <div id="benefits">
            <div class="benefits_box" id="fast_delivery">
                <div class="benefits_box_top">
                    <span><i class="fa-light fa-truck-fast"></i></span>
                    <h3>fast <br> delivery</h3>
                </div>
                <div class="benefits_box_bottom">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae ut aliquam consequuntur doloremque quis quo. </p>
                </div>
            </div>
            <div class="benefits_box" id="great_service">
                <div class="benefits_box_top">
                    <span><i class="fa-light fa-headset"></i></span>
                    <h3>great customer <br> service</h3>
                </div>
                <div class="benefits_box_bottom">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae ut aliquam consequuntur doloremque quis quo. </p>
                </div>
            </div>
            <div class="benefits_box" id="original_plants">
                <div class="benefits_box_top">
                    <span><i class="fa-light fa-seedling"></i></span>
                    <h3>original <br> plants</h3>
                </div>
                <div class="benefits_box_bottom">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae ut aliquam consequuntur doloremque quis quo. </p>
                </div>
            </div>
            <div class="benefits_box" id="affordable_price">
                <div class="benefits_box_top">
                    <span><i class="fa-light fa-circle-dollar"></i></span>
                    <h3>affordable <br> price </h3>
                </div>
                <div class="benefits_box_bottom">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae ut aliquam consequuntur doloremque quis quo. </p>
                </div>
            </div>
        </div>
        <div id="featured_plants">
            <div id="featured_plants_top">
                <h2>Featured Plants</h2>
                <hr>
            </div>
        </div>
        <div id="plants_gallery">
            <?php foreach($plants as $plant) { ?>
                <div class="gallery_item">
                    <div class="gallery_item_photo" id="<?php echo $plant["photo"] ?>"></div>
                    <p class="gallery_item_name"><?php echo $plant["name"] ?></p>
                    <p class="gallery_item_price">$ <?php echo $plant["price"] ?></p>
                </div>
            <?php }?>
        </div>
        <div id="buy_more">
            <div id="buy_more_left">
                <h2>Buy more plants, it helps you with session</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa vero velit at nobis! Voluptates repudiandae ullam, molestias voluptas quam qui officiis vel reiciendis iure iusto, animi, quia temporibus dicta velit! Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                <div id="buy_more_left_photo"></div>
            </div>
            <div id="buy_more_right"></div>
        </div>
        <div id="visit_shop">
            <div id="visit_shop_left">
                <h2>Get your favourites plant on our shop now</h2>
                <a href="" id="visit_shop_link">Visit Shop</a>
            </div>
            <div id="visit_shop_right"></div>
        </div>
    </main>

    <footer>
        <div id="itmo_house">
            <h3>About website</h3>
            <h4>ITMO House</h4>
            <p>	Kronverksky Prospekt 49, bldg. A, Petrogradsky District, Saint Petersburg, 197101, Russia</p>
        </div>
        <div id="made_for">
            <h4>Made for</h4>
            <p>Web-design</p>
            <p>2022 year</p>
        </div>
        <div id="made_by">
            <h4>Made by</h4>
            <p>Alex Gupalo</p>
            <p>P32691, ISU: 334130</p>
        </div>
        <div id="feedback">
            <h4>Feedback</h4>
            <form action="">
                <input type="tel" placeholder="Telegram phone" pattern="[7-8][0-9]{3}[0-9]{3}[0-9]{4}">
                <button id="main_button">Submit</button>
                <button id="mobile_button"><a src="http://feedback_page.html">Send feedback</a></button>
            </form>
        </div>
    </footer>
</body>
</html>