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
    <title>Menu</title>

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
    
    
    
    
    
    
    
    <!-- heading sectiion -->
    <div class="heading">
        <h3>our menu</h3>
        <p><a href="home.php">home</a> <span> / menu</span></p>
    </div>

    
    
    <!-- menu section  -->
    
    <!-- home section -->
    <section class="products">
        <h1 class="title">latest disher</h1>

        <div class="box-container">
            
            <form action="" method="post" class="box">
                <button type="button" class="fa-solid fa-eye" name="quick_view"></button>
                <button type="button" class="fa-solid fa-cart-shopping" name="add_to_cart"></button>
                <img src="uploaded_img/burger-1.png" alt="">
                <a href="#" class="cat">fast food</a>
                <div class="name">chezzy burger 01</div>
                <div class="flex">
                    <div class="price"><span>$</span>3</div>
                    <input type="number" name="qty" class="qty" min="1" max="99" value="1"
                    onkeypress="if(this.value.length==2) return false;">
                </div>
            </form>

            <form action="" method="post" class="box">
                <button type="button" class="fa-solid fa-eye" name="quick_view"></button>
                <button type="button" class="fa-solid fa-cart-shopping" name="add_to_cart"></button>
                <img src="uploaded_img/dish-1.png" alt="">
                <a href="#" class="cat">dishes</a>
                <div class="name">main dish 01</div>
                <div class="flex">
                    <div class="price"><span>$</span>3</div>
                    <input type="number" name="qty" class="qty" min="1" max="99" value="1"
                    onkeypress="if(this.value.length==2) return false;">
                </div>
            </form>

            <form action="" method="post" class="box">
                <button type="button" class="fa-solid fa-eye" name="quick_view"></button>
                <button type="button" class="fa-solid fa-cart-shopping" name="add_to_cart"></button>
                <img src="uploaded_img/dessert-1.png" alt="">
                <a href="#" class="cat">desserts</a>
                <div class="name">delicious dessert 01</div>
                <div class="flex">
                    <div class="price"><span>$</span>3</div>
                    <input type="number" name="qty" class="qty" min="1" max="99" value="1"
                        onkeypress="if(this.value.length==2) return false;">
                    </div>
            </form>

            <form action="" method="post" class="box">
                <button type="button" class="fa-solid fa-eye" name="quick_view"></button>
                <button type="button" class="fa-solid fa-cart-shopping" name="add_to_cart"></button>
                <img src="uploaded_img/drink-1.png" alt="">
                <a href="#" class="cat">drinks</a>
                <div class="name">cold drink 01</div>
                <div class="flex">
                    <div class="price"><span>$</span>3</div>
                    <input type="number" name="qty" class="qty" min="1" max="99" value="1"
                        onkeypress="if(this.value.length==2) return false;">
                </div>
            </form>
            
            <form action="" method="post" class="box">
                <button type="button" class="fa-solid fa-eye" name="quick_view"></button>
                <button type="button" class="fa-solid fa-cart-shopping" name="add_to_cart"></button>
                <img src="uploaded_img/pizza-1.png" alt="">
                <a href="#" class="cat">fast food</a>
                <div class="name">delicious pizza 01</div>
                <div class="flex">
                    <div class="price"><span>$</span>3</div>
                    <input type="number" name="qty" class="qty" min="1" max="99" value="1"
                        onkeypress="if(this.value.length==2) return false;">
                    </div>
            </form>

            <form action="" method="post" class="box">
                <button type="button" class="fa-solid fa-eye" name="quick_view"></button>
                <button type="button" class="fa-solid fa-cart-shopping" name="add_to_cart"></button>
                <img src="uploaded_img/dish-2.png" alt="">
                <a href="#" class="cat">dishes</a>
                <div class="name">main dish 02</div>
                <div class="flex">
                    <div class="price"><span>$</span>3</div>
                    <input type="number" name="qty" class="qty" min="1" max="99" value="1"
                    onkeypress="if(this.value.length==2) return false;">
                </div>
            </form>

            <form action="" method="post" class="box">
                <button type="button" class="fa-solid fa-eye" name="quick_view"></button>
                <button type="button" class="fa-solid fa-cart-shopping" name="add_to_cart"></button>
                <img src="uploaded_img/pizza-2.png" alt="">
                <a href="#" class="cat">fast food</a>
                <div class="name">delicious pizza 02</div>
                <div class="flex">
                    <div class="price"><span>$</span>3</div>
                    <input type="number" name="qty" class="qty" min="1" max="99" value="1"
                    onkeypress="if(this.value.length==2) return false;">
                </div>
            </form>
            
            <form action="" method="post" class="box">
                <button type="button" class="fa-solid fa-eye" name="quick_view"></button>
                <button type="button" class="fa-solid fa-cart-shopping" name="add_to_cart"></button>
                <img src="uploaded_img/dessert-2.png" alt="">
                <a href="#" class="cat">desserts</a>
                <div class="name">delicious dessert 02</div>
                <div class="flex">
                    <div class="price"><span>$</span>3</div>
                    <input type="number" name="qty" class="qty" min="1" max="99" value="1"
                        onkeypress="if(this.value.length==2) return false;">
                </div>
            </form>

            <form action="" method="post" class="box">
                <button type="button" class="fa-solid fa-eye" name="quick_view"></button>
                <button type="button" class="fa-solid fa-cart-shopping" name="add_to_cart"></button>
                <img src="uploaded_img/drink-2.png" alt="">
                <a href="#" class="cat">drinks</a>
                <div class="name">cold drink 02</div>
                <div class="flex">
                    <div class="price"><span>$</span>3</div>
                    <input type="number" name="qty" class="qty" min="1" max="99" value="1"
                    onkeypress="if(this.value.length==2) return false;">
                </div>
            </form>
        </div>

    </section>
    
    


    <!-- footer section -->
    <?php include('components/footer.php'); ?>
    

    



    <!-- Script -->
    <script src="./JS/script.js"></script>
</body>

</html>