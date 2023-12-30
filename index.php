<?php 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <section id="header">
        <a href="#"><img src="image/" alt=""></a>

        <div>
            <ul id="navbar">
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
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

    <section id="hero">
        <h4>Trade-in-offer</h4>
        <h2>Super value deals</h2>
        <h1>On all products</h1>
        <p>Save more with coupons & up to 70% off! </p>
        <button onclick="window.location.href='shop.php';" alt="">Shop Now</button>
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

    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>Diwali Collection New Designs</p>
        <div class="pro-container">
            <div class="pro">
                <img src="image/home/1.jpg" alt="">
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
            <div class="pro" >
                <img src="image/home/2.jpg" alt="">
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
                <img src="image/home/3.jpg" alt="">
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
                <img src="image/home/4.jpg" alt="">
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
                <img src="image/home/5.jpg" alt="">
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
                <img src="image/home/6.jpg" alt="">
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
                <img src="image/home/7.jpg" alt="">
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
                <img src="image/home/8.jpg" alt="">
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
        </div>
    </section>
    
    <section id="banner" class="section-m1">
        <h4>Repair Services</h4>
        <h2>UPCOMMING OFFERS up to<span>70% off</span>- in All Accessories</h2>
        <button class="normal  ">Explore more</button>
    </section>

    <section id="product1" class="section-p1">
        <h2>New Arrivals</h2>
        <p>Spring and Summer Collection</p>
        <div class="pro-container">
            <div class="pro">
                <img src="image/product/1.jpg" alt="">
                <div class="des">
                    <span>srisu</span>
                    <h5>Floral dress</h5>
                    <h4>RS-1200</h4>
                    <div class="star">
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
                <img src="image/product/2.jpg" alt="">
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
                <img src="image/product/3.jpg" alt="">
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
                <img src="image/product/4.jpg" alt="">
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
                <img src="image/product/5.jpg" alt="">
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
                <img src="image/product/6.jpg" alt="">
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
                <img src="image/product/7.jpg" alt="">
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
                <img src="image/product/8.jpg" alt="">
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
            
    <section id="product1" class="section-p1">
        <h2>New Trendy Prints</h2>
        <p>T-SHIRTS</p>
        <div class="pro-container">
            <div class="pro">
                <img src="image/t-shirt/4.jpg">
                <div class="des">
                    <span>srisu</span>
                    <h5>Sleep More Work Less T-shirts for Girls</h5>
                    <h4>RS-330</h4>
                    <div class="star">
                        <input type="radio" name="star20" id="star96">
                        <label for="star96" class="fa fa-star"></label>
                        <input type="radio" name="star20" id="star97">
                        <label for="star97" class="fa fa-star"></label>
                        <input type="radio" name="star20" id="star98">
                        <label for="star98" class="fa fa-star"></label>
                        <input type="radio" name="star20" id="star99">
                        <label for="star99" class="fa fa-star"></label>
                        <input type="radio" name="star20" id="star100">
                        <label for="star100" class="fa fa-star"></label>
                    </div>
                </div>
            </div>
            <div class="pro">
                <img src="image/t-shirt/6.jpg">
                <div class="des">
                    <span>srisu</span>
                    <h5>O Womaniya T-shirts for Girls</h5>
                    <h4>RS-280</h4>
                    <div class="star">
                        <input type="radio" name="star22" id="star106">
                        <label for="star106" class="fa fa-star"></label>
                        <input type="radio" name="star22" id="star107">
                        <label for="star107" class="fa fa-star"></label>
                        <input type="radio" name="star22" id="star108">
                        <label for="star108" class="fa fa-star"></label>
                        <input type="radio" name="star22" id="star109">
                        <label for="star109" class="fa fa-star"></label>
                        <input type="radio" name="star22" id="star110">
                        <label for="star110" class="fa fa-star"></label>
                    </div>
                </div>
            </div>
            <div class="pro">
                <img src="image/t-shirt/7.jpg">
                <div class="des">
                    <span>srisu</span>
                    <h5>Mountains Lover T-shirts for Girls</h5>
                    <h4>RS-200</h4>
                    <div class="star">
                        <input type="radio" name="star23" id="star111">
                        <label for="star111" class="fa fa-star"></label>
                        <input type="radio" name="star23" id="star112">
                        <label for="star112" class="fa fa-star"></label>
                        <input type="radio" name="star23" id="star113">
                        <label for="star113" class="fa fa-star"></label>
                        <input type="radio" name="star23" id="star114">
                        <label for="star114" class="fa fa-star"></label>
                        <input type="radio" name="star23" id="star115">
                        <label for="star115" class="fa fa-star"></label>
                    </div>
                </div>
            </div>
            <div class="pro">
                <img src="image/t-shirt/8.jpg">
                <div class="des">
                    <span>srisu</span>
                    <h5>Not So Sati Savitri T-shirt For Girls</h5>
                    <h4>RS-300</h4>
                    <div class="star">
                        <input type="radio" name="star24" id="star116">
                        <label for="star116" class="fa fa-star"></label>
                        <input type="radio" name="star24" id="star117">
                        <label for="star117" class="fa fa-star"></label>
                        <input type="radio" name="star24" id="star118">
                        <label for="star118" class="fa fa-star"></label>
                        <input type="radio" name="star24" id="star119">
                        <label for="star119" class="fa fa-star"></label>
                        <input type="radio" name="star24" id="star120">
                        <label for="star120" class="fa fa-star"></label>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="sm-banner" class="section-p1"> 
        <div class="banner-box">
            <h2>FUTURE UPCOMING PRODUCTS</h2>
            <span>The best classic dress is on sale at srisu</span>
            <button onclick="window.location.href='Futureproducts.php';" alt="" class="white">Learn More</button>
        </div>
        <div class="banner-box banner-box2">
            <h4>Spring/Summer</h4>
            <h2>Upcomming Season</h2>
            <span>The best classic dress is on sale at srisu</span>
            <button  onclick="window.location.href='spring.php';" alt="" class="white">Collection</button>
        </div>
    </section>

    <section id="banner3">
        <div class="banner-box" onclick="window.location.href='winter.php';" alt="">
            <h2>SEASONAL SALE</h2>
            <h3>Winter Collection</h3>
        </div>
        <div class="banner-box banner-box2" onclick="window.location.href='accessories.php';" alt="">
            <h2>ACCESSORIES</h2>
            <h3>TrendY Thread Collection</h3>
        </div>
        <div class="banner-box banner-box3" onclick="window.location.href='Tshirts.php';" alt="">
            <h2>T-SHIRTS</h2>
            <h3>New Trendy Prints</h3>
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