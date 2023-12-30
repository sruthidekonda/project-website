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
                <img src="image/home/1.jpg"  onclick="window.location.href='sproduct.php';" alt="">
                <div class="des">
                    <span>srisu</span>
                    <h5>Mustard Ethnic Motifs Flared Skirt</h5>
                    <h4>RS-2700</h4>
                    <div class="star">
                        <input type="radio" name="star1" id="star1">
                        <label for="star1" class="fa fa-star"></label>
                        <input type="radio" name="star1" id="star2">
                        <label for="star2" class="fa fa-star"></label>
                        <input type="radio" name="star1" id="star3">
                        <label for="star3" class="fa fa-star"></label>
                        <input type="radio" name="star1" id="star4">
                        <label for="star4" class="fa fa-star"></label>
                        <input type="radio" name="star1" id="star5">
                        <label for="star5" class="fa fa-star"></label>
                    </div>
                </div>
            </div>
            <div class="pro">
                <img src="image/home/2.jpg"  onclick="window.location.href='sproduct2.php';" alt="">
                <div class="des">
                    <span>srisu</span>
                    <h5>Floral Fit & Flare Suit</h5>
                    <h4>RS-2800</h4>
                    <div class="star">
                        <input type="radio" name="star2" id="star6">
                        <label for="star6" class="fa fa-star"></label>
                        <input type="radio" name="star2" id="star7">
                        <label for="star7" class="fa fa-star"></label>
                        <input type="radio" name="star2" id="star8">
                        <label for="star8" class="fa fa-star"></label>
                        <input type="radio" name="star2" id="star9">
                        <label for="star9" class="fa fa-star"></label>
                        <input type="radio" name="star2" id="star10">
                        <label for="star10" class="fa fa-star"></label>
                    </div>
                </div>
            </div>
            <div class="pro">
                <img src="image/home/3.jpg"  onclick="window.location.href='sproduct3.php';" alt="">
                <div class="des">
                    <span>srisu</span>
                    <h5>Mustard Floral Flared Suit</h5>
                    <h4>RS-2200</h4>
                    <div class="star">
                        <input type="radio" name="star3" id="star11">
                        <label for="star11" class="fa fa-star"></label>
                        <input type="radio" name="star3" id="star12">
                        <label for="star12" class="fa fa-star"></label>
                        <input type="radio" name="star3" id="star13">
                        <label for="star13" class="fa fa-star"></label>
                        <input type="radio" name="star3" id="star14">
                        <label for="star14" class="fa fa-star"></label>
                        <input type="radio" name="star3" id="star15">
                        <label for="star15" class="fa fa-star"></label>
                    </div>
                </div>
            </div>
            <div class="pro">
                <img src="image/home/4.jpg"  onclick="window.location.href='sproduct4.php';" alt="">
                <div class="des">
                    <span>srisu</span>
                    <h5>Embroidered Fit and Flare Maxi Kurta</h5>
                    <h4>RS-2400</h4>
                    <div class="star">
                        <input type="radio" name="star4" id="star16">
                        <label for="star16" class="fa fa-star"></label>
                        <input type="radio" name="star4" id="star17">
                        <label for="star17" class="fa fa-star"></label>
                        <input type="radio" name="star4" id="star18">
                        <label for="star18" class="fa fa-star"></label>
                        <input type="radio" name="star4" id="star19">
                        <label for="star19" class="fa fa-star"></label>
                        <input type="radio" name="star4" id="star20">
                        <label for="star20" class="fa fa-star"></label>
                    </div>
                </div>
            </div>
            <div class="pro">
                <img src="image/home/5.jpg"  onclick="window.location.href='sproduct5.php';" alt="">
                <div class="des">
                    <span>srisu</span>
                    <h5>Geometric Blouson Stitched Saree</h5>
                    <h4>RS-3500</h4>
                    <div class="star">
                        <input type="radio" name="star5" id="star21">
                        <label for="star21" class="fa fa-star"></label>
                        <input type="radio" name="star5" id="star22">
                        <label for="star22" class="fa fa-star"></label>
                        <input type="radio" name="star5" id="star23">
                        <label for="star23" class="fa fa-star"></label>
                        <input type="radio" name="star5" id="star24">
                        <label for="star24" class="fa fa-star"></label>
                        <input type="radio" name="star5" id="star25">
                        <label for="star25" class="fa fa-star"></label>
                    </div>
                </div>
            </div>
            <div class="pro">
                <img src="image/home/6.jpg"  onclick="window.location.href='sproduct6.php';" alt="">
                <div class="des">
                    <span>srisu</span>
                    <h5>Embroidered V-Neck Tunic</h5>
                    <h4>RS-3800</h4>
                    <div class="star">
                        <input type="radio" name="star6" id="star26">
                        <label for="star26" class="fa fa-star"></label>
                        <input type="radio" name="star6" id="star27">
                        <label for="star27" class="fa fa-star"></label>
                        <input type="radio" name="star6" id="star28">
                        <label for="star28" class="fa fa-star"></label>
                        <input type="radio" name="star6" id="star29">
                        <label for="star29" class="fa fa-star"></label>
                        <input type="radio" name="star6" id="star30">
                        <label for="star30" class="fa fa-star"></label>
                    </div>
                </div>
            </div>
            <div class="pro">
                <img src="image/home/7.jpg"  onclick="window.location.href='sproduct7.php';" alt="">
                <div class="des">
                    <span>srisu</span>
                    <h5>Floral Flared Suit</h5>
                    <h4>RS-1800</h4>
                    <div class="star">
                        <input type="radio" name="star7" id="star31">
                        <label for="star31" class="fa fa-star"></label>
                        <input type="radio" name="star7" id="star32">
                        <label for="star32" class="fa fa-star"></label>
                        <input type="radio" name="star7" id="star33">
                        <label for="star33" class="fa fa-star"></label>
                        <input type="radio" name="star7" id="star34">
                        <label for="star34" class="fa fa-star"></label>
                        <input type="radio" name="star7" id="star35">
                        <label for="star35" class="fa fa-star"></label>
                    </div>
                </div>
            </div>
            <div class="pro">
                <img src="image/home/8.jpg"  onclick="window.location.href='sproduct8.php';" alt="">
                <div class="des">
                    <span>srisu</span>
                    <h5>Mustard Geometric Print Fit and Flare Jumpsuit</h5>
                    <h4>RS-2800</h4>
                    <div class="star">
                        <input type="radio" name="star8" id="star36">
                        <label for="star36" class="fa fa-star"></label>
                        <input type="radio" name="star8" id="star37">
                        <label for="star37" class="fa fa-star"></label>
                        <input type="radio" name="star8" id="star38">
                        <label for="star38" class="fa fa-star"></label>
                        <input type="radio" name="star8" id="star39">
                        <label for="star39" class="fa fa-star"></label>
                        <input type="radio" name="star" id="star40">
                        <label for="star40" class="fa fa-star"></label>
                    </div>
                </div>
            </div>
            <div class="pro">
                <img src="image/product/1.jpg"  onclick="window.location.href='ssproduct.php';" alt="">
                <div class="des">
                    <span>srisu</span>
                    <h5>Floral dress</h5>
                    <h4>RS-1200</h4>
                    <<div class="star">
                        <input type="radio" name="star9" id="star41">
                        <label for="star41" class="fa fa-star"></label>
                        <input type="radio" name="star9" id="star42">
                        <label for="star42" class="fa fa-star"></label>
                        <input type="radio" name="star9" id="star43">
                        <label for="star43" class="fa fa-star"></label>
                        <input type="radio" name="star9" id="star44">
                        <label for="star44" class="fa fa-star"></label>
                        <input type="radio" name="star9" id="star45">
                        <label for="star45" class="fa fa-star"></label>
                    </div>
                </div>
            </div>
            <div class="pro">
                <img src="image/product/2.jpg"  onclick="window.location.href='ssproduct2.php';" alt="">
                <div class="des">
                    <span>srisu</span>
                    <h5>Design Flounce Gown</h5>
                    <h4>RS-1800</h4>
                    <div class="star">
                        <input type="radio" name="star10" id="star46">
                        <label for="star46" class="fa fa-star"></label>
                        <input type="radio" name="star10" id="star47">
                        <label for="star47" class="fa fa-star"></label>
                        <input type="radio" name="star10" id="star48">
                        <label for="star48" class="fa fa-star"></label>
                        <input type="radio" name="star10" id="star49">
                        <label for="star49" class="fa fa-star"></label>
                        <input type="radio" name="star10" id="star50">
                        <label for="star50" class="fa fa-star"></label>
                    </div>
                </div>
            </div>
            <div class="pro">
                <img src="image/product/3.jpg"  onclick="window.location.href='ssproduct3.php';" alt="">
                <div class="des">
                    <span>srisu</span>
                    <h5>Straight Dress</h5>
                    <h4>RS-1900</h4>
                    <div class="star">
                        <input type="radio" name="star11" id="star51">
                        <label for="star51" class="fa fa-star"></label>
                        <input type="radio" name="star11" id="star52">
                        <label for="star52" class="fa fa-star"></label>
                        <input type="radio" name="star11" id="star53">
                        <label for="star53" class="fa fa-star"></label>
                        <input type="radio" name="star11" id="star54">
                        <label for="star54" class="fa fa-star"></label>
                        <input type="radio" name="star11" id="star55">
                        <label for="star55" class="fa fa-star"></label>
                    </div>
                </div>
            </div>
            <div class="pro">
                <img src="image/product/4.jpg"  onclick="window.location.href='ssproduct4.php';" alt="">
                <div class="des">
                    <span>srisu</span>
                    <h5>Solid Shift Dress</h5>
                    <h4>RS-1500</h4>
                    <div class="star">
                        <input type="radio" name="star12" id="star56">
                        <label for="star56" class="fa fa-star"></label>
                        <input type="radio" name="star12" id="star57">
                        <label for="star57" class="fa fa-star"></label>
                        <input type="radio" name="star12" id="star58">
                        <label for="star58" class="fa fa-star"></label>
                        <input type="radio" name="star12" id="star59">
                        <label for="star59" class="fa fa-star"></label>
                        <input type="radio" name="star12" id="star60">
                        <label for="star60" class="fa fa-star"></label>
                    </div>
                </div>
            </div>
            <div class="pro">
                <img src="image/product/5.jpg"  onclick="window.location.href='ssproduct5.php';" alt="">
                <div class="des">
                    <span>srisu</span>
                    <h5>Straight Bottom Jean</h5>
                    <h4>RS-1000</h4>
                    <div class="star">
                        <input type="radio" name="star13" id="star61">
                        <label for="star61" class="fa fa-star"></label>
                        <input type="radio" name="star13" id="star62">
                        <label for="star62" class="fa fa-star"></label>
                        <input type="radio" name="star13" id="star63">
                        <label for="star63" class="fa fa-star"></label>
                        <input type="radio" name="star13" id="star64">
                        <label for="star64" class="fa fa-star"></label>
                        <input type="radio" name="star13" id="star65">
                        <label for="star65" class="fa fa-star"></label>
                    </div>
                </div>
            </div>
            <div class="pro">
                <img src="image/product/6.jpg"  onclick="window.location.href='ssproduct6.php';" alt="">
                <div class="des">
                    <span>srisu</span>
                    <h5>Stripes Cropped Set</h5>
                    <h4>RS-1500</h4>
                    <div class="star">
                        <input type="radio" name="star14" id="star66">
                        <label for="star66" class="fa fa-star"></label>
                        <input type="radio" name="star14" id="star67">
                        <label for="star67" class="fa fa-star"></label>
                        <input type="radio" name="star14" id="star68">
                        <label for="star68" class="fa fa-star"></label>
                        <input type="radio" name="star14" id="star69">
                        <label for="star69" class="fa fa-star"></label>
                        <input type="radio" name="star14" id="star70">
                        <label for="star70" class="fa fa-star"></label>
                    </div>
                </div>
            </div>
            <div class="pro">
                <img src="image/product/7.jpg"  onclick="window.location.href='ssproduct7.php';" alt="">
                <div class="des">
                    <span>srisu</span>
                    <h5>Straight Top</h5>
                    <h4>RS-500</h4>
                    <div class="star">
                        <input type="radio" name="star15" id="star71">
                        <label for="star71" class="fa fa-star"></label>
                        <input type="radio" name="star15" id="star72">
                        <label for="star72" class="fa fa-star"></label>
                        <input type="radio" name="star15" id="star73">
                        <label for="star73" class="fa fa-star"></label>
                        <input type="radio" name="star15" id="star74">
                        <label for="star74" class="fa fa-star"></label>
                        <input type="radio" name="star15" id="star75">
                        <label for="star75" class="fa fa-star"></label>
                    </div>
                </div>
            </div>
            <div class="pro">
                <img src="image/product/8.jpg"  onclick="window.location.href='ssproduct8.php';" alt="">
                <div class="des">
                    <span>srisu</span>
                    <h5>Straight Jumpsuit</h5>
                    <h4>RS-1200</h4>
                    <div class="star">
                        <input type="radio" name="star16" id="star76">
                        <label for="star76" class="fa fa-star"></label>
                        <input type="radio" name="star16" id="star77">
                        <label for="star77" class="fa fa-star"></label>
                        <input type="radio" name="star16" id="star78">
                        <label for="star78" class="fa fa-star"></label>
                        <input type="radio" name="star16" id="star79">
                        <label for="star79" class="fa fa-star"></label>
                        <input type="radio" name="star16" id="star80">
                        <label for="star80" class="fa fa-star"></label>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="pagination" class="section-p1">
        <a href="shop.php"><i class="bi bi-arrow-right-circle"></i></a>
		<a href="Tshirts.php">2</a>
        <a href="winter.php">3</a>
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