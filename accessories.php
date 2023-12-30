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

    <section id="page-header" class="accessories-header">
        <h2>#readmore</h2>
        <p>Read all case studies about our products!</p>
    </section>

    <section id="blog">
        <div class="blog-box">
                <div class="blog-img">
                    <img src="image/accessories/1.jpg" alt="">
                </div>
                
            <form action="cart.php" method="POST">
                <div class="blog-details">
                    <h4>Green Silk Thread Bangles with Glossy Stone</h4><br><br>
                    <h3>RS:200</h3>
                    <p>Green Silk Thread Bangles with Glossy stone set festive bangles , Comes as 4 bangles only.
                        Make Material: Green Silk Thread Bangles are made of kundan stones and silk thread.</p>
                    <button type="submit" name="add_to_cart" class="btn btn-primary">ADD TO BAG</button>
                    <input type="hidden" name="item_name" value="Green Silk Thread Bangles with Glossy Stone">
                    <input type="hidden" name="price" value="200">
                </div>
            </form>
        </div>
        <div class="blog-box">
                <div class="blog-img">
                    <img src="image/accessories/2.jpg" alt="">
                </div>
                
            <form action="cart.php" method="POST">
                <div class="blog-details">
                    <h4>Kundan Bangle Pink Ring</h4><br><br>
                    <h3>RS:250</h3>
                    <p>Kundan Bangle Pink Ring Silk Thread Bangles- kundan stone festive bangles , Comes as 2 bangles only.
                        Make Material:Kundan Silk Thread Bangles -is made of glossy  or matt stone and silk thread.</p>
                    <button type="submit" name="add_to_cart" class="btn btn-success">ADD TO BAG</button>
                    <input type="hidden" name="item_name" value="Kundan Bangle Pink Ring">
                    <input type="hidden" name="price" value="250">
                </div>
            </form>
        </div>
        <div class="blog-box">
                <div class="blog-img">
                    <img src="image/accessories/3.jpg" alt="">
                </div>
                
            <form action="cart.php" method="POST">
                <div class="blog-details">
                    <h4>Kundan Bangle White Matt Lines</h><br><br>
                    <h3>RS:220</h3>
                    <p>Kundan Bangle -White Matt Lines Silk Thread Bangles- kundan stone festive bangles , Comes as 2 bangles only.
                        Make Material: Kundan Silk Thread Bangles -is made of glossy  or matt stone and silk thread.</p>
                    <button type="submit" name="add_to_cart" class="btn btn-success">ADD TO BAG</button>
                    <input type="hidden" name="item_name" value="Kundan Bangle White Matt Lines">
                    <input type="hidden" name="price" value="220">
                </div>
            </form>
        </div>
        <div class="blog-box">
            <div class="blog-img">
                <img src="image/accessories/4.jpg" alt="">
            </div>
            <form action="cart.php" method="POST">
                <div class="blog-details">
                    <h4>Kundan Bangle Half Moon Golden</h4><br><br>
                    <h3>RS:250</h3>
                    <p>Kundan Bangle-Half Moon Golden– Sandal Silk Thread Bangles- kundan stone festive bangles , Comes as 2 bangles only.
                        Make Material: Single Line Kundan Bangle-Glossy Thread Bangles are made of kundan stones and silk thread.</p>
                    <button type="submit" name="add_to_cart" class="btn btn-success">ADD TO BAG</button>
                    <input type="hidden" name="item_name" value="Kundan Bangle Half Moon Golden">
                    <input type="hidden" name="price" value="250">
                </div>
            </form>
        </div>
        <div class="blog-box">
                <div class="blog-img">
                    <img src="image/accessories/5.jpg" alt="">
                </div>
                
            <form action="cart.php" method="POST">
                <div class="blog-details">
                    <h4>Multi Color kundan Silk Thread Kundan Bangle</h4><br><br>
                    <h3>RS:300</h3>
                    <p>Silk Thread Kundan Bangle-Thin Bangles – kundan stone festive bangles , Comes as 4 bangles only.
                        Make Material: Kids Silk Thread Kundan Bangle-Thin Bangles -is made of glossy  or matt stone and silk thread.</p>
                    <button type="submit" name="add_to_cart" class="btn btn-success">ADD TO BAG</button>
                    <input type="hidden" name="item_name" value="Multi Color kundan Silk Thread Kundan Bangle">
                    <input type="hidden" name="price" value="300">
                </div>
            </form>
        </div>
        <div class="blog-box">
                <div class="blog-img">
                    <img src="image/accessories/6.jpg" alt="">
                </div>
                
            <form action="cart.php" method="POST">
                <div class="blog-details">
                    <h4>Yellow Silk Thread Bangles with White Stone</h4><br><br>
                    <h3>RS:200</h3>
                    <p>Yellow Silk Thread Bangles with White Stone- white glossy stone set festive bangles , Comes as 4 bangles only.
                        Yellow Silk Thread Bangles with White Stone are made of kundan stones and silk thread.</p>
                    <button type="submit" name="add_to_cart" class="btn btn-success">ADD TO BAG</button>
                    <input type="hidden" name="item_name" value="Yellow Silk Thread Bangles with White Stone">
                    <input type="hidden" name="price" value="200">
                </div>
            </form>
        </div>
        <div class="blog-box">
                <div class="blog-img">
                    <img src="image/accessories/11.jpg" alt="">
                </div>
                
            <form action="cart.php" method="POST">
                <div class="blog-details">
                    <h4>3 Layered Blue Bead Malai with AD Stone</h4><br><br>
                    <h3>RS:500</h3>
                    <p>3 Layered BlueBead Malai with white ad stone tiny mugappu -No pendant; pearl interludes Neckpiece only.
                        Make Material:3 Layered Blue Bead Malai with Kemp; Neckpiece is made of  imitation beads, artificial pearls; copper and brass alloy.
                    </p>
                    <button type="submit" name="add_to_cart" class="btn btn-success">ADD TO BAG</button>
                    <input type="hidden" name="item_name" value="3 Layered Blue Bead Malai with AD Stone">
                    <input type="hidden" name="price" value="500">
                </div>
            </form>
        </div>
        <div class="blog-box">
                <div class="blog-img">
                    <img src="image/accessories/12.jpg" alt="">
                </div>
                
            <form action="cart.php" method="POST">
                <div class="blog-details">
                    <h4>Copper Bead Pendant Neckpiece -Maroon</h4><br><br>
                    <h3>RS:450</h3>
                    <p>Copper Bead Pendant Neckpiece -Maroon- 3 copper beads with green interludes; Neckpiece Only.
                        Make Material:Copper Bead Pendant Neckpiece is made of copper and brass alloy and artificial beads.</p>
                    <button type="submit" name="add_to_cart" class="btn btn-success">ADD TO BAG</button>
                    <input type="hidden" name="item_name" value="Copper Bead Pendant Neckpiece -Maroon">
                    <input type="hidden" name="price" value="450">
                </div>
            </form>
        </div>
        <div class="blog-box">
                <div class="blog-img">
                    <img src="image/accessories/13.jpg" alt="">
                </div>
                
            <form action="cart.php" method="POST">
                <div class="blog-details">
                    <h4>Five Layered Pearl Malai</h4><br><br>
                    <h3>RS:700</h3>
                    <p>Five Layered Pearl Malai -No pendant; tiny beads of pearls Neckpiece only.
                        Make Material: Five Layered Pearl Malai;Neckpiece is made of  imitation beads, artificial pearls; copper and brass alloy.
                    </p>
                    <button type="submit" name="add_to_cart" class="btn btn-success">ADD TO BAG</button>
                    <input type="hidden" name="item_name" value="Five Layered Pearl Malai">
                    <input type="hidden" name="price" value="700">
                </div>
            </form>
        </div>
        <div class="blog-box">
                <div class="blog-img">
                    <img src="image/accessories/14.jpg" alt="">
                </div>
                
            <form action="cart.php" method="POST">
                <div class="blog-details">
                    <h4>Layered  Pearl and White and Pastel beads Malai</h4><br><br>
                    <h3>RS:900</h3>
                    <p>Layered  Pearl and White and Pastel beads Malai -14 layers lengthy neckpiece; rows of beads arranged into layers with upper pearl malai; comes with matching earrings.
                        Make Material: Layered  Pearl and White and Pastel beads Malai , copper and brass alloy, artificial beads.</p>
                    <button type="submit" name="add_to_cart" class="btn btn-success">ADD TO BAG</button>
                    <input type="hidden" name="item_name" value="Layered  Pearl and White and Pastel beads Malai">
                    <input type="hidden" name="price" value="900">
                </div>
            </form>
        </div>
        <div class="blog-box">
                <div class="blog-img">
                    <img src="image/accessories/15.jpg" alt="">
                </div>
                
            <form action="cart.php" method="POST">
                <div class="blog-details">
                    <h4>Three Layered Cluster Pearl Beaded Neckpiece</h4><br><br>
                    <h3>RS:1200</h3>
                    <p>Three Layered Cluster Pearl Beaded Neckpiece-Red bead finish-No pendant; tiny small sized beads of pearls Neckpiece only.
                        Make Material: Three Layered Pearl Malai;Neckpiece is made of  imitation beads, artificial pearls; copper and brass alloy.</p>
                    <button type="submit" name="add_to_cart" class="btn btn-success">ADD TO BAG</button>
                    <input type="hidden" name="item_name" value="Three Layered Cluster Pearl Beaded Neckpiece">
                    <input type="hidden" name="price" value="1200">
                </div>
            </form>
        </div>
        <div class="blog-box">
                <div class="blog-img">
                    <img src="image/accessories/16.jpg" alt="">
                </div>
                
            <form action="cart.php" method="POST">
                <div class="blog-details">
                    <h4>AD Stone Beaded High Neck Choker -Dark Green </h4><br><br>
                    <h3>RS:1700</h3>
                    <p>AD Stone Beaded High Neck Choker -Dark Green five layers beaded and green centre stone set pendant high neck choker, comes with matching studs.
                        Make Material: AD Stone, Copper and brass alloy, artificial beads.</p>
                    <button type="submit" name="add_to_cart" class="btn btn-success">ADD TO BAG</button>
                    <input type="hidden" name="item_name" value="AD Stone Beaded High Neck Choker -Dark Green ">
                    <input type="hidden" name="price" value="1700">
                </div>
            </form>
        </div>
        <div class="blog-box">
                <div class="blog-img">
                    <img src="image/accessories/17.jpg" alt="">
                </div>
                
            <form action="cart.php" method="POST">
                <div class="blog-details">
                    <h4>Layered Ruby Bead Malai</h4><br><br>
                    <h3>RS:1200</h3>
                    <p>Layered Ruby Bead Malai-No pendant; with pearl interludes Neckpiece only.
                        Make Material:Layered Ruby Bead Malai- 3 layer; Neckpiece is made of  imitation Ruby beads, artificial pearls; copper and brass alloy.</p>
                    <button type="submit" name="add_to_cart" class="btn btn-success">ADD TO BAG</button>
                    <input type="hidden" name="item_name" value="Layered Ruby Bead Malai">
                    <input type="hidden" name="price" value="1200">
                </div>
            </form>
        </div>
        <div class="blog-box">       
                <div class="blog-img">
                    <img src="image/accessories/18.jpg" alt="">
                </div>
                
            <form action="cart.php" method="POST">
                <div class="blog-details">
                    <h4>Single Strand Pearl maatil /Ear Chain</h4><br><br>
                    <h3>RS:250</h3>
                    <p>Single Strand Pearl maatil /Ear Chain -G4736- quality maatal with hanging pearls.
                        Make material : Single Strand Pearl maatil /Ear Chain -G4736 is made of Copper, brass and other alloy, pearl beads.</p>
                    <button type="submit" name="add_to_cart" class="btn btn-success">ADD TO BAG</button>
                    <input type="hidden" name="item_name" value="Single Strand Pearl maatil /Ear Chain">
                    <input type="hidden" name="price" value="250">
                </div>
            </form>
        </div>
    </section>

    <section id="pagination" class="section-p1">
        <a href="shop.php">1</a>
		<a href="Tshirts.php">2</a>
        <a href="winter.php">3</a>
        <a href="spring.php">4</a>
		<a href="accessories.php"><i class="bi bi-arrow-left-circle"></i></a>
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