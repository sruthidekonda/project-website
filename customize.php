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
                <li><a class="active" href="customize.php">Customize</a></li>
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

    <section id="about-head" class="section-p1">
        <img src="image/MEASUREMENT.png" alt="">
        <div>
            <h2>USE THIS PICTURE</h2>
            <p>Use this picture for fill the customize Form</p>
        </div>
    </section>

    <section id="form-details">
        <form action="custform.php" method="POST">
            <span>Customize Form</span>
            <h2>CUSTOMIZE YOUR PRODUCT IN YOUR OWN WAY</h2>
                <label>NAME</lable><br><br><input type="text" name="pname" placeholder="Your Name">
                <label>EMAIL</lable><br><br><input type="text" name="email" placeholder="Email">
                <label>PRODUCT NAME</lable><br><br><input type="text" name="productname" placeholder="Product Name from this Website">
                <label>CLOTH TPYE</lable><br><br><input type="text" name="clothtp" placeholder="Eg.cotton,silk cotton">
                <label>COLOR</lable><br><br><input type="text" name="color" placeholder="Your wish Eg.Pink">
                <label>SEX</lable><br><br><input type="text" name="sex" placeholder="Fill here">
                <label>AGE</lable><br><br><input type="text" name="age" placeholder="Your Age">
                <label>SHOULDER</lable><br><br><input type="text" name="shlderwidth" placeholder="Shoulder Width in Inches">
                <label>BUST</lable><br><br><input type="text" name="bustgrth" placeholder="Bust Girth in Inches">
                <label>UNDERBUST</lable><br><br><input type="text" name="bustmesmt" placeholder="Underbust Size in Inches">
                <label>WAIST</lable><br><br><input type="text" name="waists" placeholder="Waist Size in Inches">
                <label>HIP</lable><br><br><input type="text" name="hipmesmt" placeholder="Hip size in Inches">
                <label>HAND</lable><br><br><input type="text" name="handcrl" placeholder="Hand Circumference in Inches">
                <label>ARM</lable><br><br><input type="text" name="armlgth" placeholder="Arm Length in Inches">
                <label>LEG</lable><br><br><input type="text" name="leglgth" placeholder="Leg Length in Inches">
                <label>BODY HEIGHT</lable><br><br><input type="text" name="bodyhght" placeholder="Your Body Height in Inches">
                <label>PHONE NO</lable><br><br><input type="text" name="phoneno" placeholder="Your phone No">
                <label>ADDRESS</lable><br><br><textarea type="text" cols="30" rows="10"  name="address" placeholder="Your Address"></textarea>
                <label>MESSAGE</lable><br><br><textarea type="text" cols="30" rows="10"  name="msg" placeholder="Type about product and date when you want"></textarea>  
            <button class="submit">Submit</button>
        </form>
    </section>

    <script src="script.js"></script>
</body>
</html>