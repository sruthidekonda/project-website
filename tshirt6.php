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
              <form action="cart.php" method="post"><img src="image/t-shirt/6.jpg" weight=100%   id="MainImg" alt=""></form>
            </div>
        
        <form action="cart.php" method="POST">
            <div class="single-pro-details">
                <h5>New Trendy Prints</h5>
                <div class="dress-name">
                    <h3>O Womaniya T-shirts for Girls</h3>
                </div>
                <div class="price">
                    <h2>RS-280</h2>
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
                <input type="hidden" name="item_name" value="O Womaniya T-shirts for Girls">
                <input type="hidden" name="price" value="280">
                <h4>Product Details</h4>
                <span>Fabric:Bio-washed Cotton, Neck:Round Neck, Pattern:Printed, Sleeve:Half-sleeves, Fit:Regular-fit, Style:Casual Wear</span>
            </div>    
        </form>
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
            <a href="#">Contact us</a>
        </div>
        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign In</a>
            <a href="#">View Cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Help</a>
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