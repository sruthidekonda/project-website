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
                <img src="image/winter/1.jpg">
                <div class="des">
                    <span>srisu</span>
                    <h5>Plain Cyan Blue Hoodies for Women</h5>
                    <h4>RS-660</h4>
                    <div class="star">
                        <input type="radio" name="star25" id="star121">
                        <label for="star121" class="fa fa-star"></label>
                        <input type="radio" name="star25" id="star122">
                        <label for="star122" class="fa fa-star"></label>
                        <input type="radio" name="star25" id="star123">
                        <label for="star123" class="fa fa-star"></label>
                        <input type="radio" name="star25" id="star124">
                        <label for="star134" class="fa fa-star"></label>
                        <input type="radio" name="star25" id="star125">
                        <label for="star125" class="fa fa-star"></label>
                    </div>
                </div>
            </div>
            <div class="pro">
                <img src="image/winter/2.jpg" >
                <div class="des">
                    <span>srisu</span>
                    <h5>Batman The Dark Knight Hoodies for Women</h5>
                    <h4>RS-800</h4>
                    <div class="star">
                        <input type="radio" name="star26" id="star126">
                        <label for="star126" class="fa fa-star"></label>
                        <input type="radio" name="star26" id="star127">
                        <label for="star127" class="fa fa-star"></label>
                        <input type="radio" name="star26" id="star128">
                        <label for="star128" class="fa fa-star"></label>
                        <input type="radio" name="star26" id="star129">
                        <label for="star129" class="fa fa-star"></label>
                        <input type="radio" name="star26" id="star130">
                        <label for="star130" class="fa fa-star"></label>
                    </div>
                </div>
            </div>
            <div class="pro">
                <img src="image/winter/3.jpg" >
                <div class="des">
                    <span>srisu</span>
                    <h5>Wanderer Travel Hoodies for Women</h5>
                    <h4>RS-750</h4>
                    <div class="star">
                        <input type="radio" name="star27" id="star131">
                        <label for="star131" class="fa fa-star"></label>
                        <input type="radio" name="star27" id="star132">
                        <label for="star132" class="fa fa-star"></label>
                        <input type="radio" name="star27" id="star133">
                        <label for="star133" class="fa fa-star"></label>
                        <input type="radio" name="star27" id="star134">
                        <label for="star134" class="fa fa-star"></label>
                        <input type="radio" name="star27" id="star135">
                        <label for="star135" class="fa fa-star"></label>
                    </div>
                </div>
            </div>
            <div class="pro">
                <img src="image/winter/4.jpg">
                <div class="des">
                    <span>srisu</span>
                    <h5>Plain Burgundy Hoodies for Women</h5>
                    <h4>RS-800</h4>
                    <div class="star">
                        <input type="radio" name="star28" id="star136">
                        <label for="star136" class="fa fa-star"></label>
                        <input type="radio" name="star28" id="star137">
                        <label for="star137" class="fa fa-star"></label>
                        <input type="radio" name="star28" id="star138">
                        <label for="star138" class="fa fa-star"></label>
                        <input type="radio" name="star28" id="star139">
                        <label for="star139" class="fa fa-star"></label>
                        <input type="radio" name="star28" id="star140">
                        <label for="star140" class="fa fa-star"></label>
                    </div>
                </div>
            </div>
            <div class="pro">
                <img src="image/winter/5.jpg">
                <div class="des">
                    <span>srisu</span>
                    <h5>Dreamy Tom Hoodies for Women</h5>
                    <h4>RS-850</h4>
                    <div class="star">
                        <input type="radio" name="star29" id="star141">
                        <label for="star141" class="fa fa-star"></label>
                        <input type="radio" name="star29" id="star142">
                        <label for="star142" class="fa fa-star"></label>
                        <input type="radio" name="star29" id="star143">
                        <label for="star143" class="fa fa-star"></label>
                        <input type="radio" name="star29" id="star144">
                        <label for="star144" class="fa fa-star"></label>
                        <input type="radio" name="star29" id="star145">
                        <label for="star145" class="fa fa-star"></label>
                    </div>
                </div>
            </div>
            <div class="pro">
                <img src="image/winter/6.jpg">
                <div class="des">
                    <span>srisu</span>
                    <h5>Game Over Hoodies for Women</h5>
                    <h4>RS-690</h4>
                    <div class="star">
                        <input type="radio" name="star30" id="star146">
                        <label for="star146" class="fa fa-star"></label>
                        <input type="radio" name="star30" id="star147">
                        <label for="star147" class="fa fa-star"></label>
                        <input type="radio" name="star30" id="star148">
                        <label for="star148" class="fa fa-star"></label>
                        <input type="radio" name="star30" id="star149">
                        <label for="star149" class="fa fa-star"></label>
                        <input type="radio" name="star30" id="star150">
                        <label for="star150" class="fa fa-star"></label>
                    </div>
                </div>
            </div>
            <div class="pro">
                <img src="image/winter/7.jpg">
                <div class="des">
                    <span>srisu</span>
                    <h5>Relax Hoodies for Women</h5>
                    <h4>RS-680</h4>
                    <div class="star">
                        <input type="radio" name="star31" id="star151">
                        <label for="star151" class="fa fa-star"></label>
                        <input type="radio" name="star31" id="star152">
                        <label for="star152" class="fa fa-star"></label>
                        <input type="radio" name="star31" id="star153">
                        <label for="star153" class="fa fa-star"></label>
                        <input type="radio" name="star31" id="star154">
                        <label for="star154" class="fa fa-star"></label>
                        <input type="radio" name="star31" id="star155">
                        <label for="star155" class="fa fa-star"></label>
                    </div> 
                </div>
            </div>
            <div class="pro">
                <img src="image/winter/8.jpg">
                <div class="des">
                    <span>srisu</span>
                    <h5>World Peace Hoodies for Women</h5>
                    <h4>RS-600</h4>
                    <div class="star">
                        <input type="radio" name="star32" id="star156">
                        <label for="star156" class="fa fa-star"></label>
                        <input type="radio" name="star32" id="star157">
                        <label for="star157" class="fa fa-star"></label>
                        <input type="radio" name="star32" id="star158">
                        <label for="star158" class="fa fa-star"></label>
                        <input type="radio" name="star32" id="star159">
                        <label for="star159" class="fa fa-star"></label>
                        <input type="radio" name="star32" id="star160">
                        <label for="star160" class="fa fa-star"></label>
                    </div>
                </div>
            </div>
            <div class="pro">
                <img src="image/winter/9.jpg">
                <div class="des">
                    <span>srisu</span>
                    <h5>Bugs Bunny Player Sweatshirt for Women</h5>
                    <h4>RS-650</h4>
                    <div class="star">
                        <input type="radio" name="star33" id="star161">
                        <label for="star161" class="fa fa-star"></label>
                        <input type="radio" name="star33" id="star162">
                        <label for="star162" class="fa fa-star"></label>
                        <input type="radio" name="star33" id="star163">
                        <label for="star163" class="fa fa-star"></label>
                        <input type="radio" name="star33" id="star164">
                        <label for="star164" class="fa fa-star"></label>
                        <input type="radio" name="star33" id="star165">
                        <label for="star165" class="fa fa-star"></label>
                    </div>
                </div>
            </div>
            <div class="pro">
                <img src="image/winter/10.jpg">
                <div class="des">
                    <span>srisu</span>
                    <h5>Smiling Sylvester Sweatshirt for Women </h5>
                    <h4>RS-750</h4>
                    <div class="star">
                        <input type="radio" name="star34" id="star166">
                        <label for="star166" class="fa fa-star"></label>
                        <input type="radio" name="star34" id="star167">
                        <label for="star167" class="fa fa-star"></label>
                        <input type="radio" name="star34" id="star168">
                        <label for="star168" class="fa fa-star"></label>
                        <input type="radio" name="star34" id="star169">
                        <label for="star169" class="fa fa-star"></label>
                        <input type="radio" name="star34" id="star170">
                        <label for="star170" class="fa fa-star"></label>
                    </div>
                </div>
            </div>
            <div class="pro">
                <img src="image/winter/11.jpg">
                <div class="des">
                    <span>srisu</span>
                    <h5>Baby Panda Sweatshirt for Women</h5>
                    <h4>RS-880</h4>
                    <div class="star">
                        <input type="radio" name="star35" id="star171">
                        <label for="star171" class="fa fa-star"></label>
                        <input type="radio" name="star35" id="star172">
                        <label for="star172" class="fa fa-star"></label>
                        <input type="radio" name="star35" id="star173">
                        <label for="star173" class="fa fa-star"></label>
                        <input type="radio" name="star35" id="star174">
                        <label for="star174" class="fa fa-star"></label>
                        <input type="radio" name="star35" id="star175">
                        <label for="star175" class="fa fa-star"></label>
                    </div>
                </div>
            </div>
            <div class="pro">
                <img src="image/winter/12.jpg">
                <div class="des">
                    <span>srisu</span>
                    <h5>Be Young Forever Sweatshirt for Women</h5>
                    <h4>RS-800</h4>
                    <div class="star">
                        <input type="radio" name="star36" id="star176">
                        <label for="star176" class="fa fa-star"></label>
                        <input type="radio" name="star36" id="star177">
                        <label for="star177" class="fa fa-star"></label>
                        <input type="radio" name="star36" id="star178">
                        <label for="star178" class="fa fa-star"></label>
                        <input type="radio" name="star36" id="star179">
                        <label for="star179" class="fa fa-star"></label>
                        <input type="radio" name="star36" id="star180">
                        <label for="star180" class="fa fa-star"></label>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="pagination" class="section-p1">
        <a href="shop.php">1</a>
		<a href="Tshirts.php">2</a>
        <a href="winter.php"><i class="bi bi-arrow-right-circle"></i></a>
        <a href="spring.php">4</a>
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