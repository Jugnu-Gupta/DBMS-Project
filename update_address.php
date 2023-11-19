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
    <title>Update Address</title>

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
    
    
    
    
    
    
    
    
    <!-- update profile section  -->
    <section class="form-container">

        <form action="" method="post">
            <h3>your address</h3>
            <input type="text" class="box" placeholder="flat no." required maxlength="50" name="flat">
            <input type="text" class="box" placeholder="building no." required maxlength="50" name="building">
            <input type="text" class="box" placeholder="area name" required maxlength="50" name="area">
            <input type="text" class="box" placeholder="town name" required maxlength="50" name="town">
            <input type="text" class="box" placeholder="city name" required maxlength="50" name="city">
            <input type="text" class="box" placeholder="state name" required maxlength="50" name="state">
            <input type="text" class="box" placeholder="country name" required maxlength="50" name="country">
            <input type="number" class="box" placeholder="pin code" required max="999999" min="0" maxlength="6"
            name="pin_code">
            <input type="submit" value="save address" name="submit" class="btn">
        </form>
        
    </section>


    
    
    
    <!-- footer section -->
    <?php include('components/footer.php'); ?>
    



        <div class="credits">created by <span>Jugnu Gupta</span> | all rights reserved</div>
    </footer>

    <div class="loader">
        <img src="images/loader.gif" alt="">
    </div>




    <!-- Script -->
    <script src="./JS/script.js"></script>
</body>

</html>