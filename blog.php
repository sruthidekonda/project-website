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
                <li><a class="active" href="blog.php">Blog</a></li>
                <li><a href="about.php">About</a></li>
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

    <section id="page-header" class="blog-header">
        <h2>#readmore</h2>
        <p>Read all case studies about our products!</p>
    </section>

    <section id="blog">
        <div class="blog-box">
            <div class="blog-img">
                <img src="image/blog/blogimg/66.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>Festive & Fabulous</h4>
                <p>End of the year always brings with itself a wave of celebratory spirit, whether 
                    its festivals, weddings or even parties, there is always something coming up on 
                    your social calendar. We understand that this year is a little different, weddings 
                    have become smaller and parties cosier but the festive spirit has become bigger as 
                    we have come to value time with our close friends even more.</p>
                <a href="#">CONTINUE READING</a>
            </div>
            <h1>22/27</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="image/blog/blogimg/64.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>Wedding Season!!!!!</h4>
                <p>The wedding season is back and with so many weddings lined up, it gets difficult 
                    to dress up so often with limited options. Itse is prepared to make you look the 
                    most stunning at a wedding, with millions of options at pocket-friendly prices.</p>
                <a href="#">CONTINUE READING</a>
            </div>
            <h1>22/27</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="image/blog/blogimg/61.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>Trends You Need this Summer ~ Schiffili</h4>
                <p>Summer dresses are something that we all girls are inevitably pumped up about. 
                    They always look the most flattering and are the most comfortable silhouettes. 
                    This Schiffili dress is crafted with the finest summer soothing material with 
                    the embroidery placed on the hemline as a thick border with scallop detailing.</p>
                <a href="#">CONTINUE READING</a>
            </div>
            <h1>22/27</h1>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="image/blog/blogimg/pic1.jpg" alt="">
            </div>
            <div class="blog-details">
                <h4>Tie-Up Shorts + One Shoulder Top—Perfect Match!</h4>
                <p>A combination of front tie-up shorts and the one-shoulder top is spot-on for 
                    the sweltering weather, especially when this look is crafted to appear 
                    oh-so-cool and boho-chic!</p>
                <a href="#">CONTINUE READING</a>
            </div>
            <h1>22/27</h1>
        </div>
    </section>

    <section id="pagination" class="section-p1">
        <a href="#">1</a>
		<a href="#">2</a>
		<a href="#"><i class="bi bi-arrow-right-circle"></i></a>
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