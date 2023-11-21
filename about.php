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
    <title>About</title>

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




    
    
    
    <!-- heading section -->
    <div class="heading">
        <h3>about us</h3>
        <p><a href="home.php">home</a> <span> / about</span></p>
    </div>


    <!-- about section -->

    <section class="about">

        <div class="row">
            
            <div class="image">
                <img src="images/about-img.svg" alt="">
            </div>
            
            <div class="content">
                <h3>Why choose us?</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, neque debitis incidunt qui ipsum
                    sed doloremque a molestiae in veritatis ullam similique sunt aliquam dolores dolore? Quasi atque
                    debitis nobis!</p>
                    <a href="menu.php" class="btn">our menu</a>
            </div>
            
        </div>
        
    </section>


    <!-- steps section  -->
    
    <section class="steps">
        
        <h1 class="title">simple steps</h1>
        
        <div class="box-container">

            <div class="box">
                <img src="images/step-1.png" alt="">
                <h3>choose order</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt, dolorem.</p>
            </div>
            
            <div class="box">
                <img src="images/step-2.png" alt="">
                <h3>fast delivery</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt, dolorem.</p>
            </div>
            
            <div class="box">
                <img src="images/step-3.png" alt="">
                <h3>enjoy food</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt, dolorem.</p>
            </div>

        </div>
        
    </section>


    <!-- reviews section  -->
    <section class="reviews">

        <h1 class="title">customer's reivews</h1>
        
        <div class="swiper reviews-slider">
            
            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <img src="images/pic-1.png" alt="">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos voluptate eligendi laborum
                        molestias ut earum nulla sint voluptatum labore nemo.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>john deo</h3>
                </div>
                
                <div class="swiper-slide slide">
                    <img src="images/pic-2.png" alt="">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos voluptate eligendi laborum
                        molestias ut earum nulla sint voluptatum labore nemo.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>john deo</h3>
                </div>

                <div class="swiper-slide slide">
                    <img src="images/pic-3.png" alt="">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos voluptate eligendi laborum
                        molestias ut earum nulla sint voluptatum labore nemo.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>john deo</h3>
                </div>

                <div class="swiper-slide slide">
                    <img src="images/pic-4.png" alt="">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos voluptate eligendi laborum
                        molestias ut earum nulla sint voluptatum labore nemo.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>john deo</h3>
                </div>

                <div class="swiper-slide slide">
                    <img src="images/pic-5.png" alt="">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos voluptate eligendi laborum
                        molestias ut earum nulla sint voluptatum labore nemo.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>john deo</h3>
                </div>

                <div class="swiper-slide slide">
                    <img src="images/pic-6.png" alt="">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos voluptate eligendi laborum
                        molestias ut earum nulla sint voluptatum labore nemo.</p>
                        <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>john deo</h3>
                </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>

    </section>

    
    
    
    <!-- footer section -->
    <?php include('components/footer.php'); ?>
    
    



    <div class="loader">
        <img src="images/loader.gif" alt="">
    </div>


    <!-- custom js file link  -->
    <script src="js/script.js"></script>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".reviews-slider", {
            loop: true,
            grabCursor: true,
            spaceBetween: 20,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                700: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            },
        });
    </script>
</body>

</html>