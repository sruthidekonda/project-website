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
                <li><a class="active" href="shop.php">Shop</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="customize.php">Customize</a></li>
                <li><a href="cart.php"><i class="bi bi-cart"></i></a></li>
            </ul>
        </div>

    </section>

    <section id="prodetails" class="section-p1">
        <div class="single-pro-image">
            <form action="cart.php" method="POST"><img src="image/home/2.jpg" weight=100%   id="MainImg" alt="">  </form>    
            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="image/home/2.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="image/singlepro/6.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="image/singlepro/7.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="image/singlepro/8.jpg" width="100%" class="small-img" alt="">
                </div>
            </div>
        </div>
        <form action="cart.php" method="POST">
            <div class="single-pro-details">
                <h6>Home/Diwali Collection</h6>
                <h5>Woman's Festival Collection</h5>
                <div class="dress-name">
                    <h3>Floral Fit & Flare Suit</h3>
                </div>
                <div class="price">
                    <h2>RS-2800</h2>
                </div>
                <select class="dress-size">
                    <option>Available Size</option>
                    <option>XXL</option>
                    <option>XL</option>
                    <option>L</option>
                    <option>M</option>
                    <option>S</option>
                    <option>XS</option>
                </select>
                <button type="submit" name="add_to_cart" class="btn btn-info">ADD TO BAG</button>
                <input type="hidden" name="item_name" value="Floral Fit & Flare Suit">
                <input type="hidden" name="price" value="2800">
                <h4>Product Details</h4>
                <span>Look like an absolute diva at the next festive or wedding parties with 
                    this three piece set for women from Global Desi. A perfect blend between 
                    ethnic and contemporary, this set is crafted from plush shantoon fabric 
                    with floral printed motifs all over. This set comprises a crop top with 
                    spaghetti straps and embellishment detail on the neckline, printed A-line 
                    culottes with two utilitarian pockets and an organza dupatta with scallop 
                    embroidery detail. Elevate this ensemble with ethnic gold and kundan 
                    earrings and kolhapuris.</span>
            </div>
        </form>
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
                <img src="image/product/2.jpg">
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
                <img src="image/product/3.jpg">
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
                <img src="image/product/4.jpg">
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
                <img src="image/product/5.jpg">
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
                <img src="image/product/6.jpg">
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
                <img src="image/product/7.jpg">
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
                <img src="image/product/8.jpg">
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
		<a href="shop.php"><i class="bi bi-arrow-left-circle"></i></a>
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
            <a href="#">About us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Contact us</a>
        </div>
        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign In</a>
            <a href="#">View Cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>
        <div class="col">
            <h4>Payment Process</h4>
            <p>Secured Payment Getways</p>
            <img src="image/payment.jpg" alt="">
        </div>
    </footer>

    <script>
        var mainimg=document.getElementById("MainImg");
        var smallimg=document.getElementsByClassName("small-img");

        smallimg[0].onclick = function(){
            MainImg.src = smallimg[0].src;
        }
        smallimg[1].onclick = function(){
            MainImg.src = smallimg[1].src;
        }
        smallimg[2].onclick = function(){
            MainImg.src = smallimg[2].src;
        }
        smallimg[3].onclick = function(){
            MainImg.src = smallimg[3].src;
        }
    </script>

    <script src="script.js"></script>
</body>
</html>