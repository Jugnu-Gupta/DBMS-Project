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
    <title>Home</title>

    <!-- cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- custom css file link -->
    <link rel="stylesheet" href="./CSS/style.css">

    <!-- font awesome cdn link -->
    <script src="https://kit.fontawesome.com/848e0df24d.js" crossorigin="anonymous"></script>
</head>

<body>



    <?php include('components/user_header.php'); ?>





    <!-- hero section -->
    <section class="hero">
        <div class="swiper hero-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide">
                    <div class="content">
                        <span>order online</span>
                        <h3>delicious pizza</h3>
                        <a href="menu.php" class="btn">See more</a>
                    </div>
                    <div class="image">
                        <img src="./images/home-img-1.png" alt="Pizza">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="content">
                        <span>order online</span>
                        <h3>Chessy hamburger</h3>
                        <a href="menu.php" class="btn">See more</a>
                    </div>
                    <div class="image">
                        <img src="./images/home-img-2.png" alt="Pizza">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="content">
                        <span>order online</span>
                        <h3>roasted chicken</h3>
                        <a href="menu.php" class="btn">See more</a>
                    </div>
                    <div class="image">
                        <img src="./images/home-img-3.png" alt="Pizza">
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div style="display: none;" class="autoplay-progress">
                <svg viewBox="0 0 48 48"></svg>
                <span></span>
            </div>
        </div>
    </section>


    <!-- category section -->
    <section class="category">
        <h1 class="title">food category</h1>

        <div class="box-container">
            <a href="category.php?category=fast food" class="box">
                <img src="images/cat-1.png" alt="">
                <h3>fast food</h3>
            </a>

            <a href="category.php?category=main dish" class="box">
                <img src="images/cat-2.png" alt="">
                <h3>main dishes</h3>
            </a>

            <a href="category.php?category=drink" class="box">
                <img src="images/cat-3.png" alt="">
                <h3>drinks</h3>
            </a>

            <a href="category.php?category=dessert" class="box">
                <img src="images/cat-4.png" alt="">
                <h3>desserts</h3>
            </a>
        </div>
    </section>


    <!-- home section -->
    <section class="products">

    <h1 class="title">latest dishes</h1>

    <div class="box-container">

        <?php
            $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 6");
            $select_products->execute();
            // if($select_products->rowCount() > 0){
            if(count($select_products->fetchAll(PDO::FETCH_ASSOC)) > 0){
            while($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)){
        ?>
        <form action="" method="post" class="box">
            <input type="hidden" name="pid" value="<?= $fetch_products['id']; ?>">
            <input type="hidden" name="name" value="<?= $fetch_products['name']; ?>">
            <input type="hidden" name="price" value="<?= $fetch_products['price']; ?>">
            <input type="hidden" name="image" value="<?= $fetch_products['image']; ?>">
            <a href="quick_view.php?pid=<?= $fetch_products['id']; ?>" class="fas fa-eye"></a>
            <button type="submit" class="fas fa-cart-shopping" name="add_to_cart"></button>
            <img src="uploaded_img/<?= $fetch_products['image']; ?>" alt="">
            <a href="category.php?category=<?= $fetch_products['category']; ?>" class="cat"><?= $fetch_products['category']; ?></a>
            <div class="name"><?= $fetch_products['name']; ?></div>
            <div class="flex">
            <div class="price"><span>$</span><?= $fetch_products['price']; ?></div>
            <input type="number" name="qty" class="qty" min="1" max="99" value="1" maxlength="2">
            </div>
        </form>
        <?php
            }
        }else{
            echo '<p class="empty">no products added yet!</p>';
        }
        ?>

    </div>
    </section>





    <div class="more-btn">
        <a href="menu.html" class="btn">veiw all</a>
    </div>

</section>







    <?php include('components/footer.php'); ?>









    <div class="loader">
        <img src="images/loader.gif" alt="">
    </div>



    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        const progressCircle = document.querySelector(".autoplay-progress svg");
        const progressContent = document.querySelector(".autoplay-progress span");
        var swiper = new Swiper(".hero-slider", {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
                dynamicBullets: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev"
            },
            on: {
                autoplayTimeLeft(s, time, progress) {
                    progressCircle.style.setProperty("--progress", 1 - progress);
                    progressContent.textContent = `${Math.ceil(time / 1000)}s`;
                }
            }
        });
    </script>

    <!-- custom js file link -->
    <script src="./JS/script.js"></script>
</body>

</html>