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
              <form action="cart.php" method="post"><img src="image/product/4.jpg" weight=100%   id="MainImg" alt=""> </form>
                <div class="small-img-group">
                    <div class="small-img-col">
                        <img src="image/product/4.jpg" width="100%" class="small-img" alt="">
                    </div>
                    <div class="small-img-col">
                        <img src="image/ssproducts/10.jpg" width="100%" class="small-img" alt="">
                    </div>
                    <div class="small-img-col">
                        <img src="image/ssproducts/11.jpg" width="100%" class="small-img" alt="">
                    </div>
                    <div class="small-img-col">
                        <img src="image/ssproducts/12.jpg" width="100%" class="small-img" alt="">
                    </div>
                </div>
            </div>
        
        <form action="cart.php" method="POST">
            <div class="single-pro-details">
                <h5>New  Trendy Collection</h5>
                <div class="dress-name">
                    <h3>Solid Shift Dress</h3>
                </div>
                <div class="price">
                    <h2>RS-1500</h2>
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
                <input type="hidden" name="item_name" value="Solid Shift Dress">
                <input type="hidden" name="price" value="1500">
            <h4>Product Details</h4>
            <span>This beautiful hue of lilac is just perfect to augment the other stereotypical muted
                tones of winters. Make dressing up fun and layer this elegant shift lilac dress with 
                stockings, boots and a scarf around your neck. Perhaps, even a jacket over it. The 
                front adorned with minimalist oversized pockets gives the dress an impeccable accent</span>
        </div>
    </section>

    <section id="product1" class="section-p1">
        <h2>New Arrivals</h2>
        <p>Spring and Summer Collection</p>
        <div class="pro-container">
        <div class="pro">
                <img src="image/home/5.jpg"  >
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
                <img src="image/home/6.jpg"  >
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
                <img src="image/home/7.jpg"  >
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
                <img src="image/home/8.jpg">
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