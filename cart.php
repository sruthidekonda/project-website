<?php
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['add_to_cart']))
    {
        if(isset($_SESSION['cart']))
        {
            $myitems=array_column($_SESSION['cart'],'item_name');
            if(in_array($_POST['item_name'],$myitems))
            {
                echo"<script>
                alert('Item Already Added');
                window.location.href='shop.php';
                </script>";
            }
            else{
                $count=count($_SESSION['cart']);
                $_SESSION['cart'][$count]=array('item_name'=>$_POST['item_name'],'price'=>$_POST['price']);
                echo"<script>
                    alert('Item Added');
                    window.location.href='shop.php';
                </script>";
            }
            
        }
        else
        {
            $_SESSION['cart'][0]=array('item_name'=>$_POST['item_name'],'price'=>$_POST['price']);
            echo"<script>
                alert('Item Added');
                window.location.href='shop.php';
            </script>";
        }
    }
    if(isset($_POST['remove_item']))
    {
        foreach($_SESSION['cart'] as $key => $value)
        {
           if($value['item_name']==$_POST['item_name'])
           {
            unset($_SESSION['cart'][$key]);
            $_SESSION['cart']=array_values($_SESSION['cart']);
            echo"<script>
                alert('Item Removed');
                window.location.href='cart.php';
                </script>";
           }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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
                    <li><a class="active" href="cart.php"><i class="bi bi-cart"></i>(<?php echo $count; ?>)</a></li>
                </div>
            </ul>
        </div>
    </section>

    <section id="page-header" class="about-header">
        <h2>#Let's_talk</h2>
        <p>LEAVE A MESSAGE, We Love to hear from you</p>
    </section>

    <section class="cart-details">
        <div class="Container">
            <div class="row">
                <div class="alert alert-danger">
                    <h3>MY CART</h3>
                </div>

                <div class="col-lg-9">
                    <table class="table">
                        <thead class="text-center">
                            <tr>
                            <th scope="col">Serial No:</th>
                            <th scope="col">Item Name</th>
                            <th scope="col">Price</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <?php
                                $total=0; 
                                if(isset($_SESSION['cart']))
                                {
                                    foreach ($_SESSION['cart'] as $key => $value) 
                                    {
                                        $sr=$key+1;
                                        $total= ((int)$total + (int)$value['price']);
                                        echo"
                                            <tr>
                                                <td>$sr</td>
                                                <td>$value[item_name]</td>
                                                <td>$value[price]</td>
                                                <td>
                                                    <form action='cart.php' method='POST'>
                                                        <button name='remove_item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
                                                        <input type='hidden' name='item_name' value='$value[item_name]'>
                                                    </form>
                                                </td>
                                            </tr>
                                        ";
                                    }
                                }
                            ?>
                        </tbody>
                    </table><br><br>
                </div>
                

                <div class="col-lg-4 container text-center">
                   <div class="border bg-light rounded p-4">
                        <h5>TOTAL:</h5>
                        <h3 class="text-right"><?php echo $total?></h3>
                        <br>
                        <form  action="">
                        <div class="btn-group">
                            <a href="payment.php" class="btn btn-primary btn-lg" >Online Payment</a>
                            <a href="cashondelivery.php" class="btn btn-primary btn-lg">Cash On delivery</a>
                            </div><br><br>
		<h3>100% REPLACEMET IS AVAILABLE..<h3>
                        </form>
                   </div>
                </div>
            </div>
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