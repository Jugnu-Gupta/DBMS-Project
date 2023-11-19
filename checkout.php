<?php
    include('components/connection.php');

    session_start();

    if(isset($_SESSION['user_id'])){
        $user_id = $_SESSION['user_id'];
    }
    else{
        $user_id = '';
        header('location:home.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>

    <!-- cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- custom css file link -->
    <link rel="stylesheet" href="./CSS/style.css">

    <!-- font awesome cdn link -->
    <script src="https://kit.fontawesome.com/848e0df24d.js" crossorigin="anonymous"></script>
</head>

<body>


    <!-- header section -->
    <?php include('components/user_header.php'); ?>
    
    
    
    
    
    
    <!-- heading -->
    <div class="heading">
        <h3>checkout</h3>
        <p><a href="home.php">home</a> <span> / checkout</span></p>
    </div>
    

    <!-- checkout section -->
    <section class="checkout">

        <h1 class="title">order summary</h1>

        <form action="" method="post">

            <div class="cart-items">
                <h3>cart items</h3>
                <p><span class="name">main dish 01</span><span class="price">$3</span></p>
                <p><span class="name">delicious pizza 02</span><span class="price">$3</span></p>
                <p><span class="name">delicious dessert 02</span><span class="price">$3</span></p>
                <h3>cart items</h3>
                <p class="grand-total"><span class="name">grand total :</span><span class="price">$9</span></p>
                <a href="cart.php" class="btn">veiw cart</a>
            </div>

            <!-- <input type="hidden" name="total_products" value="<?= $total_products; ?>">
            <input type="hidden" name="total_price" value="<?= $grand_total; ?>" value="">
            <input type="hidden" name="name" value="<?= $fetch_profile['name'] ?>">
        <input type="hidden" name="number" value="<?= $fetch_profile['number'] ?>">
        <input type="hidden" name="email" value="<?= $fetch_profile['email'] ?>">
        <input type="hidden" name="address" value="<?= $fetch_profile['address'] ?>"> -->

            <div class="user-info">
                <h3>your info</h3>
                <p><i class="fas fa-user"></i><span>Jugnu Gupta</span></p>
                <p><i class="fas fa-phone"></i><span>1234567890</span></p>
                <p><i class="fas fa-envelope"></i><span>jugnugupta@gmail.com</span></p>
                <a href="update_profile.php" class="btn">update info</a>
                <h3>delivery address</h3>
                <p><i class="fas fa-map-marker-alt"></i><span>flat no. 1,
                        building no.5, narela, delhi - 110040</span></p>
                        <a href="update_address.php" class="btn">update address</a>
                        
                        <select name="method" class="box" required>
                            <option value="" disabled selected>select payment method --</option>
                            <option value="cash on delivery">cash on delivery</option>
                    <option value="credit card">credit card</option>
                    <option value="paytm">paytm</option>
                    <option value="paypal">paypal</option>
                </select>

                <input type="submit" value="place order"
                    class="btn <?html if($fetch_profile['address'] == ''){echo 'disabled';} ?>"
                    style="width:100%; background:var(--red); color:var(--white);" name="submit">
            </div>

        </form>

    </section>

    
    
    
    
    <!-- footer section -->
    <?php include('components/footer.php'); ?>
    
    


    <div class="loader">
        <img src="images/loader.gif" alt="">
    </div>


    <!-- Script -->
    <script src="./JS/script.js"></script>
</body>

</html>