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
    <title>Profile</title>

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
    
    
    
    
    
    <section class="user-details">

        <div class="user">
            <img src="images/user-icon.png" alt="">
            <p><i class="fas fa-user"></i><span><span>
            <?= $fetch_profile[0]['name']; ?>
                    </span></span></p>
            <p><i class="fas fa-phone"></i><span>
            <?= $fetch_profile[0]['number']; ?>
            </span></p>
            <p><i class="fas fa-envelope"></i><span>
            <?= $fetch_profile[0]['email']; ?>
            </span></p>
            <a href="update_profile.php" class="btn">Update info</a>
            <p class="address"><i class="fas fa-map-marker-alt"></i><span>
            <?php if($fetch_profile[0]['address'] == ''){echo 'Please enter your address!!';}else{echo $fetch_profile[0]['address'];} ?>
            </span></p>
            <a href="update_address.php" class="btn">Update address</a>
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