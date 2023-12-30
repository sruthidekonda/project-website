<?php 
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
    <section id="form-details">
        <div class="cashform">
            <form action="cash.php" method="POST">
                <span>FILL THIS FORM</span>
                <h2>Cash on delivery Form</h2>
                <input type="text" name="cname" placeholder="Your Name">
                <input type="text" name="email" placeholder="Email">
                <input type="text" name="phone" placeholder="Your Phone No">
                <textarea name="address" id="" cols="30" rows="10" placeholder="Your address"></textarea>
                <button class="submit">Submit</button>
            </form>
        </div>
    </section>

    <section id="pagination" class="section-p1">
		<a href="cart.php"><i class="bi bi-arrow-left-circle"></i></a>
    </section>
    
</body>
</html>