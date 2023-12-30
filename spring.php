<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <section id="header">
        <a href="#"><img src="image/" alt=""></a>

        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a class="active" href="shop.php">Shop</a></li>
                <li><a href="blog.php">Blog</a></li>
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

    <section id="page-header">
        <h2>#stayhome</h2>
        <p>Save more with coupons & up to 70% off! </p>
    </section>

    <section id="product1" class="section-p1">
        <div class="pro-container">
            <div class="pro">
                <img src="image/winter/13.jpg">
                <div class="des">
                    <span>srisu</span>
                    <h5>Desert Orange Women Long Coat</h5>
                    <h4>RS-2200</h4>
                    <div class="star">
                        <input type="radio" name="star37" id="star181">
                        <label for="star181" class="fa fa-star"></label>
                        <input type="radio" name="star37" id="star182">
                        <label for="star182" class="fa fa-star"></label>
                        <input type="radio" name="star37" id="star183">
                        <label for="star183" class="fa fa-star"></label>
                        <input type="radio" name="star37" id="star184">
                        <label for="star184" class="fa fa-star"></label>
                        <input type="radio" name="star37" id="star185">
                        <label for="star185" class="fa fa-star"></label>
                    </div>
                </div>
            </div>
            <div class="pro">
                <img src="image/winter/14.jpg">
                <div class="des">
                    <span>srisu</span>
                    <h5>Charcoal Black Women Long Coat</h5>
                    <h4>RS-2400</h4>
                    <div class="star">
                        <input type="radio" name="star38" id="star186">
                        <label for="star186" class="fa fa-star"></label>
                        <input type="radio" name="star38" id="star187">
                        <label for="star187" class="fa fa-star"></label>
                        <input type="radio" name="star38" id="star188">
                        <label for="star188" class="fa fa-star"></label>
                        <input type="radio" name="star38" id="star189">
                        <label for="star189" class="fa fa-star"></label>
                        <input type="radio" name="star38" id="star190">
                        <label for="star190" class="fa fa-star"></label>
                    </div>
                </div>
            </div>
            <div class="pro">
                <img src="image/winter/15.jpg">
                <div class="des">
                    <span>srisu</span>
                    <h5>Deep Green Women Long Coat</h5>
                    <h4>RS-2000</h4>
                    <div class="star">
                        <input type="radio" name="star39" id="star191">
                        <label for="star191" class="fa fa-star"></label>
                        <input type="radio" name="star39" id="star192">
                        <label for="star192" class="fa fa-star"></label>
                        <input type="radio" name="star39" id="star193">
                        <label for="star193" class="fa fa-star"></label>
                        <input type="radio" name="star39" id="star194">
                        <label for="star194" class="fa fa-star"></label>
                        <input type="radio" name="star39" id="star195">
                        <label for="star195" class="fa fa-star"></label>
                    </div>
                </div>
            </div>
            <div class="pro">
                <img src="image/winter/16.jpg">
                <div class="des">
                    <span>srisu</span>
                    <h5>Grey Easy Fit Cotton Jacket For Women</h5>
                    <h4>RS-800</h4>
                    <div class="star">
                        <input type="radio" name="star40" id="star196">
                        <label for="star196" class="fa fa-star"></label>
                        <input type="radio" name="star40" id="star197">
                        <label for="star197" class="fa fa-star"></label>
                        <input type="radio" name="star40" id="star198">
                        <label for="star198" class="fa fa-star"></label>
                        <input type="radio" name="star40" id="star199">
                        <label for="star199" class="fa fa-star"></label>
                        <input type="radio" name="star40" id="star200">
                        <label for="star200" class="fa fa-star"></label>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="pagination" class="section-p1">
        <a href="shop.php">1</a>
		<a href="Tshirts.php">2</a>
        <a href="winter.php">3</a>
        <a href="spring.php"><i class="bi bi-arrow-right-circle"></i></a>
		<a href="accessories.php">5</a>
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