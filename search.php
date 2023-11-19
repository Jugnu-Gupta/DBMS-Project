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
    <title>Search Page</title>

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
    
    
    
    
    
    
    
    <!-- search form section  -->
    
    <section class="search-form">
        <form method="post" action="">
            <input type="text" name="search_box" placeholder="search here..." class="box">
            <button type="submit" name="search_btn" class="fas fa-search"></button>
        </form>
    </section>
    
    <section class="products" style="min-height: 100vh; padding-top:0;"></section>
    
    


    <!-- footer section -->
    <?php include('components/footer.php'); ?>
    



    <div class="loader">
        <img src="images/loader.gif" alt="">
    </div>



    <!-- Script -->
    <script src="./JS/script.js"></script>
</body>

</html>