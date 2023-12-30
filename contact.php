<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="bootstrap.css">
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
                <li><a href="about.php">About</a></li>
                <li><a class="active" href="contact.php">Contact</a></li>
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
        <h2>#Let's_talk</h2>
        <p>LEAVE A MESSAGE, We Love to hear from you</p>
    </section>

    <section id="contact-details" class="section-p1">
        <div class="details">
            <span>GET IN TOUCH</span>
            <h2>Visit on our Location or contact us today</h2>
            <h3>Our Exact Location</h3>
            <div>
                <li>
                    <i class="bi bi-map"></i>
                    <p>NO:20/12 Saiva Muthaiya Mudhali street,
                        2nd line,Mannady ,Chennai-600001.</p>
                </li>
                <li>
                    <i class="bi bi-envelope"></i>
                    <p>sruthis2722@gmail.com </p>
                </li>
                <li>
                    <i class="bi bi-phone"></i>
                    <p>7904519572/8682933028 </p>
                </li>
                <li>
                    <i class="bi bi-alarm"></i>
                    <p>10:00 AM to 9:00 PM </p>
                </li>
                <li>
                    <i class="bi bi-calendar"></i>
                    <p>Mon-Sun </p>
                </li>
            </div>
        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d357.3514242450003!2d80.28715468232087!3d13.10397508512965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a526fd601a882c9%3A0x9fecf45771f25e37!2sRoyapuram%20Railway%20Station!5e0!3m2!1sen!2sin!4v1665566782556!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    
        </div>
    </section>

    <section id="form-details">
        <form action="process.php" method="POST">
            <span>FEEDBACK FORM</span>
            <h2>We Love To Hear From You</h2>
            <input type="text" name="cname" placeholder="Your Name">
            <input type="text" name="email" placeholder="Email">
            <input type="text" name="subject" placeholder="Subject">
            <textarea name="msg" id="" cols="30" rows="10" placeholder="Your Lovely Words"></textarea>
            <button class="submit">Submit</button>
        </form>

        <div class="people">
            <div>
                <img src="image/people/1.jpg" alt="">
                <p><span>SRUTHI DEEKONDA</span><br>Owner of the website<br>Phone:7904519572<br>Email:sruthisri2722@gmail.com</p>
            </div>
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