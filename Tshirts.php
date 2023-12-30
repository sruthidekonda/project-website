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
                <img src="image/t-shirt/1.jpg"  onclick="window.location.href='tshirt1.php';" alt="">
                <div class="des">
                    <span>srisu</span>
                    <h5>Relax T-shirts for Girls</h5>
                    <h4>RS-200</h4>
                    <div class="star">
                        <input type="radio" name="star17" id="star81">
                        <label for="star81" class="fa fa-star"></label>
                        <input type="radio" name="star17" id="star82">
                        <label for="star82" class="fa fa-star"></label>
                        <input type="radio" name="star17" id="star83">
                        <label for="star83" class="fa fa-star"></label>
                        <input type="radio" name="star17" id="star84">
                        <label for="star84" class="fa fa-star"></label>
                        <input type="radio" name="star17" id="star85">
                        <label for="star85" class="fa fa-star"></label>
                    </div>
                </div>
            </div>
            <div class="pro">
                <img src="image/t-shirt/2.jpg"  onclick="window.location.href='tshirt2.php';" alt="">
                <div class="des">
                    <span>srisu</span>
                    <h5>Bugs Bunny T-shirts for Girls</h5>
                    <h4>RS-220</h4>
                    <div class="star">
                        <input type="radio" name="star18" id="star86">
                        <label for="star86" class="fa fa-star"></label>
                        <input type="radio" name="star18" id="star87">
                        <label for="star87" class="fa fa-star"></label>
                        <input type="radio" name="star18" id="star88">
                        <label for="star88" class="fa fa-star"></label>
                        <input type="radio" name="star18" id="star89">
                        <label for="star89" class="fa fa-star"></label>
                        <input type="radio" name="star18" id="star90">
                        <label for="star90" class="fa fa-star"></label>
                    </div>
                </div>
            </div>
            <div class="pro">
                <img src="image/t-shirt/3.jpg"  onclick="window.location.href='tshirt3.php';" alt="">
                <div class="des">
                    <span>srisu</span>
                    <h5>Music Panda T-shirts for Girls</h5>
                    <h4>RS-300</h4>
                    <div class="star">
                        <input type="radio" name="star19" id="star91">
                        <label for="star91" class="fa fa-star"></label>
                        <input type="radio" name="star19" id="star92">
                        <label for="star92" class="fa fa-star"></label>
                        <input type="radio" name="star19" id="star93">
                        <label for="star93" class="fa fa-star"></label>
                        <input type="radio" name="star19" id="star94">
                        <label for="star94" class="fa fa-star"></label>
                        <input type="radio" name="star19" id="star95">
                        <label for="star95" class="fa fa-star"></label>
                    </div>
                </div>
            </div>
            <div class="pro">
                <img src="image/t-shirt/4.jpg"  onclick="window.location.href='tshirt4.php';" alt="">
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
                <img src="image/t-shirt/5.jpg"  onclick="window.location.href='tshirt5.php';" alt="">
                <div class="des">
                    <span>srisu</span>
                    <h5>Pocket Fries T-shirts for Girls</h5>
                    <h4>RS-250</h4>
                    <div class="star">
                        <input type="radio" name="star21" id="star101">
                        <label for="star101" class="fa fa-star"></label>
                        <input type="radio" name="star21" id="star102">
                        <label for="star102" class="fa fa-star"></label>
                        <input type="radio" name="star21" id="star103">
                        <label for="star103" class="fa fa-star"></label>
                        <input type="radio" name="star21" id="star104">
                        <label for="star104" class="fa fa-star"></label>
                        <input type="radio" name="star21" id="star105">
                        <label for="star105" class="fa fa-star"></label>
                    </div>
                </div>
            </div>
            <div class="pro">
                <img src="image/t-shirt/6.jpg"  onclick="window.location.href='tshirt6.php';" alt="">
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
                <img src="image/t-shirt/7.jpg"  onclick="window.location.href='tshirt7.php';" alt="">
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
                <img src="image/t-shirt/8.jpg"  onclick="window.location.href='tshirt8.php';" alt="">
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

    <section id="pagination" class="section-p1">
        <a href="shop.php">1</a>
		<a href="Tshirts.php"><i class="bi bi-arrow-right-circle"></i></a>
        <a href="winter.php">3</a>
        <a href="spring.php">4</a>
		<a href="accessories.php">5</i></a>
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