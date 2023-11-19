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
    <title>Contact</title>

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
        <h3>Contact us</h3>
        <p><a href="home.html">home</a> <span> / contact</span></p>
    </div>


    <!-- contact section -->
    
    <section class="contact">

        <div class="row">

            <div class="image">
                <img src="images/contact-img.svg" alt="">
            </div>
            
            <form action="" method="post">
                <h3>tell us something!</h3>
                <input type="text" name="name" maxlength="50" class="box" placeholder="enter your name" required>
                <input type="number" name="number" min="0" max="9999999999" class="box" placeholder="enter your number"
                required maxlength="10">
                <input type="email" name="email" maxlength="50" class="box" placeholder="enter your email" required>
                <textarea name="msg" class="box" required placeholder="enter your message" maxlength="500" cols="30"
                rows="10"></textarea>
                <input type="submit" value="send message" name="send" class="btn">
            </form>

        </div>
        
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