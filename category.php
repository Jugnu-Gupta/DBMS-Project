<?php
    include('components/connection.php');

    session_start();

    if(isset($_SESSION['user_id'])){
        $user_id = $_SESSION['user_id'];
    }
    else{
        $user_id = '';
    }

    include 'components/add_cart.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>

    <!-- cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- custom css file link -->
    <link rel="stylesheet" href="./CSS/style.css">

    <!-- font awesome cdn link -->
    <script src="https://kit.fontawesome.com/848e0df24d.js" crossorigin="anonymous"></script>
</head>

<body>



    <?php include('components/user_header.php'); ?>






    <!-- category section -->
    <section class="products">

        <h1 class="title">Food Category</h1>

        <div class="box-container">

            <?php
                $category = $_GET['category'];
                $sql = "SELECT * FROM `products` where category = '$category';";
                $select_products = mysqli_query($conn, $sql);
                $fetch_products = mysqli_fetch_all($select_products, MYSQLI_ASSOC);
                if(count($fetch_products) > 0){
                    for ($i = 0; $i < count($fetch_products); $i++) {
            ?>
            <form action="" method="post" class="box">
                <input type="hidden" name="pid" value="<?= $fetch_products[$i]['id']; ?>">
                <input type="hidden" name="name" value="<?= $fetch_products[$i]['name']; ?>">
                <input type="hidden" name="price" value="<?= $fetch_products[$i]['price']; ?>">
                <input type="hidden" name="image" value="<?= $fetch_products[$i]['image']; ?>">
                <a href="quick_view.php?pid=<?= $fetch_products[$i]['id']; ?>" class="fas fa-eye"></a>
                <button type="submit" class="fas fa-cart-shopping" name="add_to_cart"></button>
                <img src="uploaded_img/<?= $fetch_products[$i]['image']; ?>" alt="">
                <div class="name"><?= $fetch_products[$i]['name']; ?></div>
                <div class="flex">
                    <div class="price"><span>$</span>
                        <?= $fetch_products[$i]['price']; ?>
                    </div>
                    <input type="number" name="qty" class="qty" min="1" max="99" value="1" maxlength="2">
                </div>
            </form>
            <?php
                }
            }
            else{
                echo '<p class="empty">no products added yet!</p>';
            }
            ?>
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