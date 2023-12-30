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
              <form action="cart.php" method="post"><img src="image/product/5.jpg" weight=100%   id="MainImg" alt=""> </form>
                <div class="small-img-group">
                    <div class="small-img-col">
                        <img src="image/product/5.jpg" width="100%" class="small-img" alt="">
                    </div>
                    <div class="small-img-col">
                        <img src="image/ssproducts/13.jpg" width="100%" class="small-img" alt="">
                    </div>
                    <div class="small-img-col">
                        <img src="image/ssproducts/14.jpg" width="100%" class="small-img" alt="">
                    </div>
                    <div class="small-img-col">
                        <img src="image/ssproducts/15.jpg" width="100%" class="small-img" alt="">
                    </div>
                </div>
            </div>
        
        <form action="cart.php" method="POST">
            <div class="single-pro-details">
                <h5>New  Trendy Collection</h5>
                <div class="dress-name">
                    <h3>Woman's Straight Bottom Jean</h3>
                </div>
                <div class="price">
                    <h2>RS-1000</h2>
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
                <input type="hidden" name="item_name" value="Woman's Straight Bottom Jean">
                <input type="hidden" name="price" value="1000">
            <h4>Product Details</h4>
            <span>Invest in this impeccably stylish and uber-cool pair of jeans for women from AND. 
                Made from best quality cotton in stretchable material, this pair of ankle-length 
                jeans features a straight fit with four pockets. Pair these jeans with a range of 
                T-shirts, tops and shirts. Throw on comfortable sneakers or even heels suiting the 
                mood of the occasion.</span>
        </div>
    </section>

    <section id="product1" class="section-p1">
        <h2>New Arrivals</h2>
        <p>Spring and Summer Collection</p>
        <div class="pro-container">
        <div class="pro">
                <img src="image/home/1.jpg" >
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
                <img src="image/home/2.jpg"  >
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
                <img src="image/home/3.jpg" >
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
                <img src="image/home/4.jpg" >
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