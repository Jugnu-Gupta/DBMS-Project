<?php
    include('components/connection.php');

    session_start();

    if(isset($_SESSION['user_id'])){
        $user_id = $_SESSION['user_id'];
    }
    else{
        $user_id = '';
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>

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
        <h3>shopping cart</h3>
        <p><a href="home.php">home</a> <span> / cart</span></p>
    </div>

    <!-- shopping cart section starts  -->
    
    <section class="products">
        
        <h1 class="title">your cart</h1>
        
        <div class="cart-total">
            <p>cart total : <span>$9</span></p>
            <a href="checkout.php" class="btn">Proceed To Checkout</a>
        </div>
        
        <div class="box-container">
            
            <form action="" method="post" class="box">
                <button type="button" class="fa-solid fa-eye" name="quick_view"></button>
                <button type="button" class="fa-solid fa-times" name="delete"
                onclick="return confirm('delete this item?');"></button>
                <img src="uploaded_img/pizza-1.png" alt="">
                <div class="name">delicious pizza 01</div>
                <div class="flex">
                    <div class="price"><span>$</span>3</div>
                    <input type="number" name="qty" class="qty" min="1" max="99" value="1"
                        onkeypress="if(this.value.length==2) return false;">
                    <button type="button" class="fas fa-edit"></button>
                </div>
                <div class="sub-total">sub total : <span>$3</span></div>
            </form>

            <form action="" method="post" class="box">
                <button type="button" class="fa-solid fa-eye" name="quick_view"></button>
                <button type="button" class="fa-solid fa-times" name="delete"
                onclick="return confirm('delete this item?');"></button>
                <img src="uploaded_img/pizza-2.png" alt="">
                <div class="name">delicious pizza 02</div>
                <div class="flex">
                    <div class="price"><span>$</span>3</div>
                    <input type="number" name="qty" class="qty" min="1" max="99" value="1"
                        onkeypress="if(this.value.length==2) return false;">
                        <button type="button" class="fas fa-edit"></button>
                    </div>
                <div class="sub-total">sub total : <span>$3</span></div>
            </form>

            <form action="" method="post" class="box">
                <button type="button" class="fa-solid fa-eye" name="quick_view"></button>
                <button type="button" class="fa-solid fa-times" name="delete"
                    onclick="return confirm('delete this item?');"></button>
                <img src="uploaded_img/dessert-1.png" alt="">
                <div class="name">delicious dessert 01</div>
                <div class="flex">
                    <div class="price"><span>$</span>3</div>
                    <input type="number" name="qty" class="qty" min="1" max="99" value="1"
                        onkeypress="if(this.value.length==2) return false;">
                        <button type="button" class="fas fa-edit"></button>
                </div>
                <div class="sub-total">sub total : <span>$3</span></div>
            </form>
        </div>

        <div class="more-btn">
            <form action="" method="post">
                <button type="button" class="delete-btn" name="delete_all"
                onclick="return confirm('delete this item?');">Delete All</button>
            </form>
        </div>
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