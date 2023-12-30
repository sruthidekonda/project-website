<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="style.css">
</head>

<body>

   <section id="header">
        <a href="#"><img src="image/" alt=""></a>

        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a class="active" href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="customize.php">Customize</a></li>
                <div>
                    <?php
                    $count=0;
                    if(isset($_SESSION['cart']))
                    {
                        $count=count($_SESSION['cart']);
                    }
                    ?>
                    <li><a href="cart.php"><i class="bi bi-cart"></i>(<?php echo $count; ?>)</a></li>
                </div>
            </ul>
        </div>

    </section>

    <section id="page-header" class="about-header">
        <h2>#KnowUs More</h2>
        <p>This is a <span>Entrepreneur</span> Website....</p>
    </section>

    <section id="about-head" class="section-p1">
        <img src="image/blog/blogimg/about.jpeg" alt="">
        <div>
            <h2>Who We Are?</h2>
            <p>Stay Home and SHOP ONLINE in my store<br> fashion is the armor to survive the reality of everyday life <br> we are giving that confidence.....</p>
        </div>
    </section>

    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="image/shepping.jpg" alt="">
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="image/online1.jpg" alt="">
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="image/save2.jpg" alt="">
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="image/promotion2.jpg" alt="">
            <h6>Promotion</h6>
        </div>
        <div class="fe-box">
            <img src="image/happy2.jpg" alt="">
            <h6>Happy Sell</h6>
        </div>
        <div class="fe-box">
            <img src="image/support1.webp" alt="">
            <h6>F24/7 Support</h6>
        </div>
    </section>

    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="image/lllfff.png" alt="">
            <h4>Contact</h4>
            <p><strong>Address:</strong>No:20/12 Saiva Muthaiya Mudhalli Street,</p>
            <p>2nd line,Mannady,Chennai</p>
            <p><strong>Phone:</strong>7904519572/8682933028</p>
            <p><strong>Hours:</strong>10:00 AM - 9:00 PM Mon-Sun</p>
            <div class="follow">
                <h4>Follow us</h4>
                <div class="icon">
                    <i class="bi bi-instagram"></i>
                </div>
            </div>
        </div>
        <div class="col">
            <h4>About</h4>
            <a href="about.php">About us</a>
            <a href="contact.php">Contact us</a>
        </div>
        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign In</a>
            <a href="cart.php">View Cart</a>
            <a href="index.php">My Wishlist</a>
            <a href="contact.php">Help</a>
        </div>
        <div class="col">
            <h4>Payment Process</h4>
            <p>Secured Payment Getways</p>
            <img src="image/payment.jpg" alt="">
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>