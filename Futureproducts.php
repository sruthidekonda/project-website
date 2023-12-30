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
                <img src="image/blog/1.jpg">
                <div class="des">
                    <span>srisu</span>
                    <h5>Designer Blouse</h5>
                </div>
            </div>
            <div class="pro">
                <img src="image/blog/3.jpg">
                <div class="des">
                    <span>srisu</span>
                    <h5>Designer Blouse</h5>
                </div>
            </div>
            <div class="pro">
                <img src="image/blog/4.jpg">
                <div class="des">
                    <span>srisu</span>
                    <h5>Designer Blouse</h5>
                </div>
            </div>
            <div class="pro">
                <img src="image/blog/5.jpg">
                <div class="des">
                    <span>srisu</span>
                    <h5>Designer Blouse</h5>
                </div>
            </div>
            <div class="pro">
                <img src="image/blog/6.jpg" >
                <div class="des">
                    <span>srisu</span>
                    <h5>Designer Blouse</h5>
                </div>
            </div>
            <div class="pro">
                <img src="image/blog/7.jpg">
                <div class="des">
                    <span>srisu</span>
                    <h5>Designer Blouse</h5>
                </div>
            </div>
            <div class="pro">
                <img src="image/blog/8.jpg">
                <div class="des">
                    <span>srisu</span>
                    <h5>Designer Blouse</h5>
                </div>
            </div>
        </div>
    </section>