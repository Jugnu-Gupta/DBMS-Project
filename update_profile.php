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
    <title>Update Profile</title>

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
    <section class="form-container update-form">

        <form action="" method="post">
            <h3>update profile</h3>
            <!-- <input type="text" name="name" placeholder="<?= $fetch_profile['name']; ?>" class="box" maxlength="50"> -->
            <input type="text" name="name" placeholder="Enter your name" class="box" maxlength="50">
            <!-- <input type="email" name="email" placeholder="<?= $fetch_profile['email']; ?>" class="box" maxlength="50" -->
            <input type="email" name="email" placeholder="Enter your email" class="box" maxlength="50"
            oninput="this.value = this.value.replace(/\s/g, '')">
            <!-- <input type="number" name="number" placeholder="<?= $fetch_profile['number']; ?>"" class=" box" min="0" -->
            <input type="number" name="number" placeholder="Enter your number" class=" box" min="0" max="9999999999"
                maxlength="10">
                <input type="password" name="old_pass" placeholder="enter your old password" class="box" maxlength="50"
                oninput="this.value = this.value.replace(/\s/g, '')">
                <input type="password" name="new_pass" placeholder="enter your new password" class="box" maxlength="50"
                oninput="this.value = this.value.replace(/\s/g, '')">
            <input type="password" name="confirm_pass" placeholder="confirm your new password" class="box"
                maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
            <input type="submit" value="update now" name="submit" class="btn">
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